<?php

$servername = 'localhost';
$username   = 'root';
$password = '';
$dbname = 'animal_adoption';

$db = new mysqli($servername,$username,$password,$dbname);

if($db->connect_error){
    die('Connection failed...');
}