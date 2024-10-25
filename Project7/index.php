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
    <script src="https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js"></script>
    <title>Senstor site</title>
</head>
<body class="body">
    <!--headerr--------------------------------->
    <?php
        if(isset($_GET["lang"])){
            $_SESSION["lang"] = $_GET["lang"];
        }else{
            $_SESSION["lang"] = "en";
        }

        include 'header.php';
        include "./data/langs.php";
    ?>
    <!------container------------------------------>
    <div class="container">  
            <!--horizontal-image-gallery-->
            <div class="m_con">
                <div class="scroller" data-speed="slow">
                    <ul class="tag-list scroller_inner">
                        <li>
                            <a href="#readMore">
                                <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont1.png">
                            </a>
                        </li>
                        <li>
                            <a href="#text">
                                <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont2.png">
                            </a>
                        </li>
                        <li>
                            <a href="./products.php">
                                <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont3.png">
                            </a>
                        </li>
                        <li>
                            <a href="./products.php">
                                <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont4.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="abSenstor">
                    <a href="#readMore">
                        <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont1.png">
                    </a>
                    <a href="#text">
                        <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont2.png">
                    </a>
                    <a href="./products.php">
                        <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont3.png">
                    </a>
                    <a href="./products.php">
                        <img src="./photos/<?=htmlspecialchars($try[$_SESSION["lang"]]["add"]);?>cont4.png">
                    </a> 
                </div>
            </div>
            <!--about_us-->
            <div id="aboutUs">   
                <!--showw elements-->
                <div class="lonley_text">
                    <h3><?=htmlspecialchars($try[$_SESSION["lang"]]["lonley"]);?></h3>
                </div>
                <div id="readMore" class="show_element">
                    <div id="div1">
                        <div class="that_elem">
                            <img src="./photos/kabelbok.png"><div class="descr">
                                <h3><?=htmlspecialchars($try[$_SESSION["lang"]]["desc1"]);?></h3>
                                <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["text1"]);?></h4>
                            </div>
                        </div>
                    </div>
                    <div id="div2">
                        <div class="that_elem">
                            <img src="./photos/robibok.png">
                            <div class="descr">
                                <h3><?=htmlspecialchars($try[$_SESSION["lang"]]["desc3"]);?></h3>
                                <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["text3"]);?></h4>
                            </div>
                        </div>
                    </div>    
                    <div id="div3">
                        <div class="that_elem">
                            <img src="./photos/bibok.png">
                            <div class="descr">
                                <h3><?=htmlspecialchars($try[$_SESSION["lang"]]["desc5"]);?></h3>
                                <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["text5"]);?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!----TEXT----->
                <div id="text" class="text_space">
                    <div><?=htmlspecialchars($try[$_SESSION["lang"]]["lg_text"]);?></div>
                    <div>
                        <div class="dots">
                            <span><?=htmlspecialchars($try[$_SESSION["lang"]]["dot0"]);?></span>
                            <li><?=htmlspecialchars($try[$_SESSION["lang"]]["dot1"]);?></li>
                            <li><?=htmlspecialchars($try[$_SESSION["lang"]]["dot2"]);?></li>
                            <li><?=htmlspecialchars($try[$_SESSION["lang"]]["dot3"]);?></li>
                            <li><?=htmlspecialchars($try[$_SESSION["lang"]]["dot4"]);?></li>
                        </div>
                    </div>
                    <div>
                        <span><?=htmlspecialchars($try[$_SESSION["lang"]]["detal"]);?></span>
                    </div>
                    <div><?=htmlspecialchars($try[$_SESSION["lang"]]["lg_text2"]);?></div>        
                </div>
                <!--kontrahents-->
                <div class="kontrahents">
                    <div class="logos">
                        <span><img src="./photos/wromet_logo.png"></span>
                        <span><img src="./photos/mati_logo.png"></span>
                        <span><img src="./photos/flexem_logo.png"></span>
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
    <script src="./assets/js/products.js"></script>
    <script src="./assets/js/main_page.js"></script>
</body>
</html>