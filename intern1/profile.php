<!DOCTYPE html>
<html>
<head>
        <title>Robin's Nest</title>
</head>
<style type="text/css">

    #blue_bar{
        height: 50px;
        background-color: #405d9b;
        color: #d9dfeb;
    }

    #search_box{

        width: 400px;
        height: 20px;
        border-radius: 5px;
        border: none;
        padding: 4px;
        font-size: 14px;
        background-image: url(search.png);
        background-repeat: no-repeat;
        background-position: right;

    }

    #profile_pic{

        width: 150px;
        margin-top: -250px;
        border-radius: 50%;
        border: solid 2px white;

    }

    #menu_button{

    

        width: 100px;
        display: inline-block;
        margin: 2px;

    }

    #friends_img{

        width: 75px;
        float: left;
        margin: 8px;
    }

    #friends_bar{

        background-color: white;
        min-height: 400px;
        margin-top: 20px;
        color: #aaa;
        padding: 5px;
    }

    #friends{

        clear: both;
        font-size: 12px;
        font-weight: bold;
        color: #405d9b;
    }

    textarea{

        width: 100%;
        border: none;
        font-family: tahoma;
        font-size: 14px;
        height: 60px;
     
    }

    #post_button{

        float: right;
        background-color: #405d9b;
        border: none;
        color: white;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;

    }

    #post_bar{

        margin-top: 20px;
        background-color: white;
        padding: 10px;
    }

    #post{

        padding: 4px;
        font-size: 13px;
        display: flex;
        margin-bottom: 20px;

    }

</style>
<body style="font-family: tahoma; background-color: #d0d8e4;">

<!--top bar-->
<div id="blue_bar">
    <div style="width: 800px;margin: auto;font-size: 30px;">
    Robin's Nest &nbsp &nbsp <input type="text" id="search_box" placeholder="Searh for people">
    <img src="selfie.jpg" style="width: 40px;float: right;">
    <a href="logout.php">
    <span style="font-size: 11px; float:right; margin: 10px; color: white;">Logout</span>
    </a>
</div>
</div>

<!--cover area-->
<div style="background-color: 800px; margin:auto;  min-height: 400px;">
<div style="background-color: white; text-align: center; color: #405d9b">
    
<img src="mountain.jpg" style="width:100%">
<img id="profile_pic" src="selfie.jpg"><br>
 <div style="font-size:20px">User 1</div>
    <br>
    <a href="home.php">
    <div id="menu_button">Home</div> 
</a>
    <a href="members.php">
    <div id="menu_button">Members</div>
</a> 
    <a href="friends.php">
    <div id="menu_button">Friends</div> 
</a>
    <a href="messages.php">
    <div id="menu_button">Messages</div>
</a>
    <a href="editprofile.php">
    <div id="menu_button">Edit Profile</div>
</a>
    <a href="logout.php">
    <div id="menu_button">Logout</div>
    </a>
</div>

<!--below cover area-->
<div style="display: flex;">

<!--friends area-->
<div style="min-height: 400px; flex: 1;">
<div id="friends_bar">

Mutual Friends<br>
<div id="friends">
    <img id="friends_img" src="user1.jpg">
    <br>
    Alex
</div>

<div id="friends">
    <img id="friends_img" src="user2.jpg">
    <br>
    Second User
</div>

<div id="friends">
    <img id="friends_img" src="user3.jpg">
    <br>
    Third User
</div>

<div id="friends">
    <img id="friends_img" src="user4.jpg">
    <br>
    Fourth User
</div>


</div>
</div>
<!--posts area-->
<div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">

<div style="border:solid thin #aaa; padding: 10px;background-color:white;">
<textarea placeholder="Whats on your mind"></textarea>
<input id="post_button" type="submit" value="Post">
<br>
</div>
<!--post 1-->
<div id="post_bar"> 
    <div id="post">
        <div>
            <img src="user1.jpg" style="width: 75px;margin-right: 4px;">
        </div>
        <div>
            <div style="font-weight: bold;color: #405d9b;"> First Guy </div>
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
<br/><br/>
<a href="">Like</a>. <a href="">Comment</a>. <span styple="color: #999;">April 20 2022</span>
    </div>
</div>


<!--post 2-->
<div id="post_bar"> 
    <div id="post">
        <div>
            <img src="user3.jpg" style="width: 75px;margin-right: 4px;">
        </div>
        <div>
            <div style="font-weight: bold;color: #405d9b;"> Third Guy </div>
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
        Group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary 
<br/><br/>
<a href="">Like</a>. <a href="">Comment</a>. <span styple="color: #999;">April 20 2022</span>
    </div>
</div>

</div>
</div>
</div>
</div>

</body>
</html>