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
$redirect_url = 'http://localhost/RotractPool/index.php#register';

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

    $userID = $user['id'];
    $sqlCheckUser = "SELECT * FROM `register` WHERE `userID`='$userID'";
    $sqlResult = $dbConn->query($sqlCheckUser);
    if ($sqlResult->num_rows > 0) {
        if (!isset($_SESSION['facebook_token'])) {
            $alradyReg=TRUE;
        }
    } else {

        $name = $user['name'];
        $email = $user['email'];
        $url = $user['url'];
        $sqlInsertUser = "INSERT INTO register"
                . " VALUES ('$userID', '$name', '$email', '$url')";
        if ($dbConn->query($sqlInsertUser) === FALSE) {
            die("Something went wrong.Please refresh the page and try again.");
        } 
    }
    $_SESSION['facebook_token'] = $sessionFB->getToken();
} else {
    $loginUrl = $helper->getLoginUrl(array('req_perms' => 'email'));
    $user = null;
}

$dbConn->close();
