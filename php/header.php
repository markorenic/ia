<?php session_start();
ob_start();
?>

<html>
<header>
<link rel="stylesheet" href="style/navbar.css">
</header>
<div class="header-container topnav">
    <div class="grid topimage"><img class="logo" src="resources/headline.jpg"></div>
</div>
<div class="grid blue topnav">
            <span class="empty">&nbsp</span>
            <span class="empty">&nbsp</span>
            <span class="empty">&nbsp</span>
            <a class="" href="index.php" id="Home">Home</a>
            <a class="" href="faq.php" id="Faq">About us</a>
            <a class="" href="news.php" id="News">Soon</a> 
            <?php if(isset($_SESSION['id'])): ?>
            <a class="link" href="http://ia/phplogin/logout.php" style="">Logout</a>
            <?php else: ?>
            <a class="link" href="http://ia/phplogin/login.php" style="">Login</a>
            <?php endif; ?>
                </div>

</html>