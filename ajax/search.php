<?php
ob_start();
session_start();
extract($_POST);
include('../includes/config.php');
include('../includes/global_functions.php');
$json = array();
$content = "";

$sql = 'SELECT id_channel as id_search, name_channel as name_search, is_live as is_live, type_search FROM(
        SELECT id_channel, name_channel, is_live, "Channel" as type_search FROM channel WHERE channel.name_channel LIKE "%test%" OR channel.name_channel LIKE "test%" OR channel.name_channel LIKE "%test" OR 1 = 1
        UNION ALL
        SELECT id_stream, name_stream, is_live_stream, "Stream" FROM stream WHERE stream.name_stream LIKE "%test%" OR stream.name_stream LIKE "test%" OR stream.name_stream LIKE "%test" OR 1 = 1
        UNION ALL 
        SELECT id_user, username_user, false, "User" FROM user WHERE user.username_user LIKE "%test%" OR user.username_user LIKE "%test" OR user.username_user LIKE "test%" OR 1 = 1
        ) as search';
$result = odbc_exec($con, $sql);
while ($table = odbc_fetch_object($result)){
    
}