<?php
session_start();

include("connection.php");
include("login.php")

?>

<html>
    <head>
        <title>Robin's Nest</title>
    </head>
    <style>

        #bar{height: 100px; 
            background-color: rgb(59, 89, 152); 
            color: white;
           padding: 4px;
        }

        #signup_button{
            background-color: green;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
        }

        #bar2{

            background-color: white;
            width: 800px;
            margin: auto;
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;

        }

        #text{
            height:40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #888;
            padding: 4px;
            font-size: 14px;
        }

        #button{
            width: 300px;
            height: 40px;
            border-radius: 4px;
            border: none;
            background-color: rgb(59, 89, 152); 
            color: white;
        }
    
    </style>
    <body style="background-color: e9ebee;">

<div id="bar" >
    <div style="font-size: 40px;">Robin's Nest</div>
    <div id="Signup_button"> Signup </div>
</div>
<div id="bar2">
    Login to Robin's Nest<br><br>

    <input type="text" id="text" placeholder="Email"><br><br>
    <input type="password" id="text" placeholder="Password"><br><br>
    <input type="submit" id="button" value="Login">
    <br><br><br>


</div>
</body>
</html>