<?php
$host = "127.0.0.1";
$user = "Ayoub";
//<editor-fold desc="Password">
$pass = "";
//</editor-fold>
$port = "3307";
$database = "ydays";
$lengthPassword = 8; // Length of password required in all website
const URL = 'http://localhost:8088/GameFy';
const PATH_IMG_USER = 'assets/images/user_image/profile_picture_user';
const PATH_IMG_GAME = 'assets/images/game_image/profile_picture_game';
const PATH_IMG_CHANNEL = 'assets/images/channel_image/profile_picture_channel';
$con = odbc_connect('Driver={MySQL ODBC 8.0 ANSI Driver};SERVER=' . $host . ':' . $port . ';DATABASE=' . $database, $user, $pass);
