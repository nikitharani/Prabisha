<?php

$user_name = $_POST["cusName"];
$user_email = $_POST["cusEmail"];
$user_num = $_POST["cusNum"];
$user_compName = $_POST["cusCompName"];
$user_business = $_POST["cusBusiness"];
$user_add = $_POST["cusAdd"];
$user_city = $_POST["cusCity"];
$user_country = $_POST["cusCountry"];
$user_zip = $_POST["cusZip"];
$user_date = $_POST["cusDate"];
$user_info = $_POST["cusInfo"];
$user_interest = $_POST["person_interest"];

// $user_name = 'NIkit';
// $user_email = 'nani@gmail.com';
// $user_num = 67676767;
// $user_compName = 'nani and co';
// $user_business = 'logistics';
// $user_add = 'shirley';
// $user_city = 'biringham';
// $user_country = 'united kindom';
// $user_zip = '3aq';
// $user_date = '2021/03/12';
// $user_info = 'this is my fisrts company';
// $user_interest = 'yes';

// get local db credentials
$db_url = getenv('PRABISHA_DB_URL', $local_only = TRUE);
$dbparts = parse_url($db_url);
$host = '127.0.0.1';//$dbparts['host'];
$user = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

//connecting to DataBase
// $conn = mysqli_connect("localhost","root","","psn");
$conn = mysqli_connect($host, $user, $password, $database); //Connect PHP to MySQL Database

if (!$conn){
    die("Connection failed:".mysql_connect_error());
  }

$sql = "INSERT INTO prabishaStartForm(nameOfUser,email,num,compName,business,user_address,city,country,zip,user_date,info, user_interest) VALUES ('{$user_name}','{$user_email}'
,{$user_num},'{$user_compName}','{$user_business}','{$user_add}','{$user_city}','{$user_country}','{$user_zip}','{$user_date}','{$user_info}','{$user_interest}') ";

// $result = mysqli_query($conn,$sql) or die("SQL Query Failed.");
if(mysqli_query($conn,$sql)){
    echo true;
}
else{
    echo false;
}

?>



