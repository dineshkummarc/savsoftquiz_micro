<?php 
ob_start();
session_start();
date_default_timezone_set('Asia/Kolkata');
// primary server path
$base_url="http://local.rocket.co.in:8081/test1/savsoftquiz_micro/local_server/";
$passCode="1234";
$userLogin="userData-encrypted-22022019002301.txt";
$quizData="quizData-encrypted-22022019002301.txt";
$encryptType="AES-128-ECB";
$appName="sqMicro (Savsoft Quiz Micro) ";
$appNameSlogan="Local Server";
// no of options
$noptions="4";
// numeric or alphabet
$saveResponseIn="alphabet";
$showResultInstantly=true;