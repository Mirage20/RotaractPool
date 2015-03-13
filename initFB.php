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

session_start();

$app_id = '1556187094660763';
$app_secret = 'a31b026061e609b2bdd2dd19feb0112e';
$redirect_url = 'http://localhost/RotractPool/index.php#register';

FacebookSession::setDefaultApplication($app_id, $app_secret);
$helper = new FacebookRedirectLoginHelper($redirect_url);

$sessionFB = $helper->getSessionFromRedirect();

$user=null;
$loginUrl=null;

if (isset($sessionFB)) {
    $request = new FacebookRequest($sessionFB, 'GET', '/me');
    $response = $request->execute();
    $graph = $response->getGraphObject(GraphUser::className());
    $loginUrl=null;
    $user=array('id'=> $graph->getId(),
        'name'=> $graph->getName(),
        'url'=> $graph->getLink()
        );
} else {
    $loginUrl=$helper->getLoginUrl();
    $user=null;
}
                       