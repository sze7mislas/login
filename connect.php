<?php
$server="localhost";
$user="esti_szoftverf";
$pwd="esti_szoftverf";
$dbName="esti_login";


$db=new mysqli($server, $user, $pwd, $dbName);
if($db->connect_errno){
    die("Nem sikerült csatlakozni az adatbázishoz!");
}
//echo "Sikeres csatlakozás";
if(!$db -> set_charset("utf8")){
    echo "Nem sikerült a karakterkódolás";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

