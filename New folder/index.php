<?php
header('Content-Type: application'); 
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
if($_SESSION["user"] == file_get_contents("user") and $_SESSION["pw"] == file_get_contents("pw")){
$_POST["user"] = $_SESSION["user"];
$_POST["pw"] = $_SESSION["pw"];
}
if($_POST["user"] == file_get_contents("user") and $_POST["pw"] == file_get_contents("pw")){
$_SESSION["user"] = $_POST["user"];
$_SESSION["pw"] = $_POST["pw"];
?>
<meta name="viewport" content="width=device-width, initial-scale=0.4,maximum-scale=0.4, user-scalable=no" />
<?php
}else{
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php
}
?>
<title>PUBG Control.</title>
<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
<?php
if($_POST["user"] == file_get_contents("user") and $_POST["pw"] == file_get_contents("pw")){
?>
<style>
*{
margin: 0;
pading: 0;
box-sizing: border-box;
}
body{
background-color: #FFFFFF;
font-family: Calibri;
color: rgb(220,220,220);
padding: 50px;
width: 100vw;
overflow-x: hidden;
}
h1{
font-weight: 400;
}
a{
color: inherit;
}
a2{
color: #FF0000;
}
p{
margin-top: .7em;
}
.warning{
color: rgb(62,148,236);
}
.st_viewport{
max-height: 500px;
overflow: auto;
}

[data-table_id="1"]{
background-color: rgb(255,115,0);
}
[data-table_id="2"]{
background-color: rgb(61,53,39);
color: rgb(220,220,220);
}
[data-table_id="3"]{
background-color: rgba(168,189,4, .8);
}
._id{
min-width: 10px;
}
._user{
min-width: 150px;
}
._pw{
min-width: 150px;
}
._code{
min-width: 250px;
}
._date{
min-width: 200px;
}
._edit{
min-width: 0px;
}
pre{
overflow: auto;
}
.st_viewport{
background-color: rgb(62,148,236);
color: rgb(27,30,36);
margin: 20px 0;
}
.st_wrap_table{

}
.st_table_header{
position: -webkit-sticky;
position: sticky;
top: 0px;
z-index: 1;
background-color: rgb(27,30,36);
color: rgb(220,220,220);
}
.st_table_header h2{
font-weight: 400;
margin: 0 20px;
padding: 20px 0 0;
}
.st_table_header .st_row{
color: rgba(220,220,220, .7);
}
.st_table_header .st_column{

}
.st_table{
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-webkit-flex-direction: column;
-ms-flex-direction: column;
flex-direction: column;
}
.st_row{
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
margin: 0;
}
.st_table .st_row:nth-child(even){
background-color: rgba(0,0,0, .1)
}
.st_column{
padding: 10px 20px;
}

[type="submit"] {
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
width: 100%;
background:#2E9AFE;
border-radius:5px;
border:0;
cursor:pointer;
color:white;
font-size:24px;
padding-top:10px;
padding-bottom:10px;
transition: all 0.3s;
margin-top:-4px;
font-weight:700;

[type="submit"]:hover { background:#01A9DB; }
</style>
<?php
}else{
?>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
body { background:white; }
h1 {
text-align: center;
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
font-size: 25px;
}
h2 {
text-align: center;
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
font-size: 15px;
}
.feedback-input {
color:black;
font-family: Helvetica, Arial, sans-serif;
font-weight:500;
font-size: 18px;
border-radius: 5px;
line-height: 22px;
background-color: transparent;
border:2px solid #2E9AFE;
transition: all 0.3s;
padding: 13px;
margin-bottom: 15px;
width:100%;
box-sizing: border-box;
outline:0;
}

.feedback-input:focus { border:2px solid #01A9DB; }

textarea {
height: 150px;
line-height: 150%;
resize:vertical;
}

[type="submit"] {
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
width: 100%;
background:#2E9AFE;
border-radius:5px;
border:0;
cursor:pointer;
color:white;
font-size:24px;
padding-top:10px;
padding-bottom:10px;
transition: all 0.3s;
margin-top:-4px;
font-weight:700;
}
[type="submit"]:hover { background:#01A9DB; }
h1 {
text-align: center;
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
font-size: 35px;
}
h3 {
text-align: left;
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
font-size: 18px;
}
.javan {
color: #000000;
}
#java {
color: #2E9AFE;
}
#jav {
color: #000000;
}
</style>
<?php
}
?>
</head>
<br><br><br>
<form method="GET" action="edit.php">
<input type="hidden" name="id" value="new" /> 
<input type="submit" value="Add Player"/>
</form>
<h1 class="javan"><span id="java">L</span>ogin <span id="java">A</span>dmin<span id="java">.</span></h1>
<form method="POST">
<br>
<h3>Username Admin:</h3>
<input name="user" type="text" class="feedback-input"/>
<h3>Password Admin:</h3>
<input name="pw" type="password" class="feedback-input"/>
<input type="submit" value="LOGIN"/>
</form>
</html>