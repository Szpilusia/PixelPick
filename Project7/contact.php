<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="./assets/css/style_page.css">
    <title>Contact site</title>
</head>
<body>
    <div class="ContactContainer">
        <!--headerr--------------------------------->
        <?php

            if(isset($_GET["lang"])){
                $_SESSION["lang"] = $_GET["lang"];
            }else{
                $_SESSION["lang"] = "en";
            }

            include './data/langs.php';
            include 'header.php';
        ?>
        <!----contact container-->
        <div class="MainCont">
            <div class="ContactData">
                <div class="Contact">
                    <!---support image--->
                    <div class="supImg">
                        <img src="./photos/support.png">
                    </div>
                    <!---support informations--->
                    <div class="pl">
                        <div class="technic">
                            <h2><?=htmlspecialchars($try[$_SESSION["lang"]]["sup1"]); ?></h2>
                            <a><?=htmlspecialchars($try[$_SESSION["lang"]]["tel"]); ?> +48 501 471 055</a><br>
                            <a>support@senstor.eu</a>
                        </div>    
                        <div class="shop">
                            <h2><?=htmlspecialchars($try[$_SESSION["lang"]]["sup2"]); ?></h2>
                            <a><?=htmlspecialchars($try[$_SESSION["lang"]]["tel"]); ?> +48 501 471 055</a><br>
                            <a>products@senstor.eu</a>
                        </div>
                        <div class="pages">
                            <h2><?=htmlspecialchars($try[$_SESSION["lang"]]["sup3"]); ?></h2>
                            <a>webs@pixelpick.pl</a>
                        </div>
                    </div>
                </div>
            </div>
            <!------fottter----------->
            <div class="fotter">
                <div class="fot_text">
                    <a>© Senstor</a>
                    <span><?=htmlspecialchars($try[$_SESSION["lang"]]["fot_span"]);?></span>
                </div>
            </div>
        </div>
    </div>
    <scrip>
    <script src="./assets/js/products.js"></script>
</body>
</html>