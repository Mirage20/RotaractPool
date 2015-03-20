<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * @author Mirage
 */

require_once './Facebook/FacebookSession.php';
require_once './Facebook/FacebookRequest.php';
require_once './Facebook/FacebookResponse.php';
require_once './Facebook/FacebookSDKException.php';
require_once './Facebook/FacebookRequestException.php';
require_once './Facebook/FacebookRedirectLoginHelper.php';
require_once './Facebook/FacebookAuthorizationException.php';
require_once './Facebook/GraphObject.php';
require_once './Facebook/GraphUser.php';
require_once './Facebook/GraphSessionInfo.php';
require_once './Facebook/Entities/AccessToken.php';
require_once './Facebook/HttpClients/FacebookCurl.php';
require_once './Facebook/HttpClients/FacebookHttpable.php';
require_once './Facebook/HttpClients/FacebookCurlHttpClient.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookCurl;

//session_set_cookie_params(900);
session_start();

$app_id = '1556187094660763';
$app_secret = 'a31b026061e609b2bdd2dd19feb0112e';
//For development
$redirect_url = 'http://localhost/RotractPool/index.php#register';
//For deploy
//$redirect_url = 'https://rotract-pool.herokuapp.com/index.php';

$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = 'b5e414713a7502';
$password = '136ab40a';
$dbName = 'heroku_45ee06235dccdc7';

// Create connection
$dbConn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($dbConn->connect_error) {
    die("Connection failed: To database " . $dbConn->connect_error);
}


FacebookSession::setDefaultApplication($app_id, $app_secret);
$helper = new FacebookRedirectLoginHelper($redirect_url);



if (isset($_SESSION['facebook_token'])) {
    $sessionFB = new FacebookSession($_SESSION['facebook_token']);
} else {
    $sessionFB = $helper->getSessionFromRedirect();
}

$user = null;
$loginUrl = null;

if (isset($sessionFB)) {
    $request = new FacebookRequest($sessionFB, 'GET', '/me');
    $response = $request->execute();
    $graph = $response->getGraphObject(GraphUser::className());
    $loginUrl = null;
    $user = array('id' => $graph->getId(),
        'name' => $graph->getName(),
        'url' => $graph->getLink(),
        'email' => $graph->getProperty('email')
    );
    //print_r($_POST);

    $userID = $user['id'];
    $sqlCheckUser = "SELECT * FROM `register` WHERE `userID`='$userID'";
    $sqlResult = $dbConn->query($sqlCheckUser);
    if ($sqlResult->num_rows > 0) {
        if (!isset($_SESSION['facebook_token'])) {
            $alradyReg = TRUE;
        }
        if (isset($_POST) && !empty($_POST)) {
            $gender = $_POST['gender'];

            if (isset($_POST['teamName'])) {
                $teamName = $_POST['teamName'];
            } else {
                $teamName = null;
            }

            if (isset($_POST['single']) && isset($_POST['double'])) {
                $playType = $_POST['single'] . " and " . $_POST['double'];
            } else if (isset($_POST['single'])) {
                $playType = $_POST['single'];
            } else if (isset($_POST['double'])) {
                $playType = $_POST['double'];
            }
            $sqlUpdateUser = "UPDATE register"
                    . " SET `gender`='$gender',"
                    . "`teamName`='$teamName',"
                    . "`playType`='$playType' WHERE `userID`='$userID'";
            if ($dbConn->query($sqlUpdateUser) === FALSE) {
                die("Something went wrong.Please refresh the page and try again. ");
            }
            $updateSuccess=TRUE;
        }
        $sqlResult = $dbConn->query($sqlCheckUser);
        $row = $sqlResult->fetch_row();
        //print_r($row);
        $user['gender'] = $row[3];
        $user['teamName'] = $row[5];
        $user['playType'] = $row[6];
    } else {

        $name = $user['name'];
        $email = $user['email'];
        $url = $user['url'];
        $gender = 'Male';
        $teamName = null;
        $playType = 'Singles';
        $user['gender'] = $gender;
        $user['teamName'] = $teamName;
        $user['playType'] = $playType;
        $sqlInsertUser = "INSERT INTO register"
                . " VALUES ('$userID', '$name', '$email','$gender', '$url','$teamName','$playType')";
        if ($dbConn->query($sqlInsertUser) === FALSE) {
            die("Something went wrong.Please refresh the page and try again. ");
        }
    }
    $_SESSION['facebook_token'] = $sessionFB->getToken();
} else {
    $loginUrl = $helper->getLoginUrl(array('req_perms' => 'email'));
    $user = null;
}

$dbConn->close();
