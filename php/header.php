<html>
<header>
<? session_start();
?>
<link rel="stylesheet" href="style/style.css">
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
            <a class="" href="http://ia/phplogin/index.php" id="Login"> 
            <?php if (isset($_SESSION['loggedin'])){
                echo "Logout";
            } else {
                echo "Login";
            }
            ?>
            </a>
        
    </div>

</html>