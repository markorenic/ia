<!DOCTYPE html>
<? session_start();
?>
<head>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="grid-container">
        <div class="grid"> <?php include "php/header.php"; ?> </div>
        <div class="grid"> <?php include "php/homepage.php"; ?> </div>
        <div class="grid"> <?php include "php/footer.php"; ?> </div>
    </div>

</body>