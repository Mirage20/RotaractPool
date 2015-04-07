<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * @author Mirage
 */

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

$userExist = FALSE;

if (isset($_POST) && !empty($_POST)) {

    $captcha = $_POST['g-recaptcha-response'];
    if (isset($captcha) && !empty($captcha)) {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lfi-gQTAAAAAAx5ZfFZZD4QytUH6zxz_aU6bxYC&response=" . $captcha);
        $jsonResponse = json_decode($response, true);
        if ($jsonResponse['success'] == false) {
            $captchaError = TRUE;
        } else {

            $email = $_POST['email'];
            $sqlCheckUser = "SELECT * FROM `register` WHERE `email`='$email'";
            $sqlResult = $dbConn->query($sqlCheckUser);

            if ($sqlResult->num_rows > 0) {
                $userExist = TRUE;
            } else {

                if (isset($_POST['single2'])) {
                    $isSingle2 = 'Yes';
                } else {
                    $isSingle2 = 'No';
                }


                if (isset($_POST['single']) && isset($_POST['double'])) {
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $teamName = $_POST['teamName'];
                    $isSingle = 'Yes';
                    $isDouble = 'Yes';
                    $email2 = $_POST['email2'];
                    $name2 = $_POST['name2'];
                    $gender2 = $_POST['gender2'];
                    $isDouble2 = 'Yes';

                    $sqlInsertUser1 = "INSERT INTO register"
                            . " VALUES ('$email', '$name', '$gender','$teamName', '$isSingle','$isDouble')";
                    $sqlInsertUser2 = "INSERT INTO register"
                            . " VALUES ('$email2', '$name2', '$gender2','$teamName', '$isSingle2','$isDouble2')";
                    $successUser1 = $dbConn->query($sqlInsertUser1);
                    $successUser2 = $dbConn->query($sqlInsertUser2);
                    if ($successUser1 === FALSE && $successUser2 === FALSE) {
                        die("Something went wrong.Please refresh the page and try again. ");
                    }
                } else if (isset($_POST['single'])) {
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $teamName = '';
                    $isSingle = 'Yes';
                    $isDouble = 'No';

                    $sqlInsertUser1 = "INSERT INTO register"
                            . " VALUES ('$email', '$name', '$gender','$teamName', '$isSingle','$isDouble')";
                    if ($dbConn->query($sqlInsertUser1) === FALSE) {
                        die("Something went wrong.Please refresh the page and try again. ");
                    }
                } else if (isset($_POST['double'])) {
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $teamName = $_POST['teamName'];
                    $isSingle = 'No';
                    $isDouble = 'Yes';
                    $email2 = $_POST['email2'];
                    $name2 = $_POST['name2'];
                    $gender2 = $_POST['gender2'];
                    $isDouble2 = 'Yes';


                    $sqlInsertUser1 = "INSERT INTO register"
                            . " VALUES ('$email', '$name', '$gender','$teamName', '$isSingle','$isDouble')";
                    $sqlInsertUser2 = "INSERT INTO register"
                            . " VALUES ('$email2', '$name2', '$gender2','$teamName', '$isSingle2','$isDouble2')";
                    $successUser1 = $dbConn->query($sqlInsertUser1);
                    $successUser2 = $dbConn->query($sqlInsertUser2);
                    if ($successUser1 === FALSE && $successUser2 === FALSE) {
                        die("Something went wrong.Please refresh the page and try again. ");
                    }
                }
                $registerSuccess = TRUE;
            }
        }
    } else {
        $captchaError = TRUE;
    }
}

$dbConn->close();
