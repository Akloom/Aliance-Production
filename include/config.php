<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "aliance-production";

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connect){
  die("Code error: " . mysqli_connect_errno() . " MYSQL Error! " . mysqli_connect_error());
  exit();
}
