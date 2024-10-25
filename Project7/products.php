<?php 
    session_start();
    
    if(isset($_GET["lang"])){
        $_SESSION["lang"] = $_GET["lang"];
    }

    include './data/langs.php';
    include "./data/produkty.php";
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="./assets/css/style_page.css">
    <script src="https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js"></script>
    <title>Senstor products</title>
</head>
<body class="productsBody">
    <!--headerr--------------------------------->
    <?php
        include 'header.php';
    ?>
    <!--choose your product-------------------------->
    <div class="menu" style="display: none;">
        <div class="tabs">
            <button class="tablinks active" onclick="opentag(event, 'panels')"><?=htmlspecialchars($try[$_SESSION["lang"]]["panels"]);?></button>
            <button class="tablinks" onclick="opentag(event, 'control_systems')"><?=htmlspecialchars($try[$_SESSION["lang"]]["contr_sys"]);?></button>
            <button class="tablinks" onclick="opentag(event, 'robots')"><?=htmlspecialchars($try[$_SESSION["lang"]]["robots"]);?></button>
        </div>
    </div>
    <!------products--------------------------------->
    <div class="ProductsContainer">
        <div id="panels" class="tabcontent" style="display: block;">
            <div class="products">
                <div class="product">
                    <a href="./specyfication.php?id=wojtek">
                        <div>
                            <img src="<?php echo ($produkty["wojtek"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["wojtek"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["wojtek"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["wojtek"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["wojtek"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["wojtek"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=oskar">
                        <div>
                            <img src="<?php echo ($produkty["oskar"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["oskar"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["oskar"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["oskar"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["oskar"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["oskar"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=janusz">
                        <div>
                            <img src="<?php echo ($produkty["janusz"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["janusz"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["janusz"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["janusz"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["janusz"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["janusz"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>    
            <div class="products">   
                <div class="product">
                    <a href="./specyfication.php?id=andzej">
                        <div>
                            <img src="<?php echo ($produkty["andzej"]["photos"]["p1"]); ?>">
                        </div>
                        <div  class="table">
                            <h1><?php echo htmlspecialchars($produkty["andzej"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["andzej"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["andzej"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["andzej"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["andzej"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=dzony">
                        <div>
                            <img src="<?php echo ($produkty["dzony"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["dzony"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["dzony"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["dzony"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["dzony"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["dzony"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=pankracy">
                        <div>
                            <img src="<?php echo ($produkty["pankracy"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["pankracy"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><span><?php echo htmlspecialchars($produkty["pankracy"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["pankracy"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["pankracy"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["pankracy"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <div class="products">
                <div class="product">
                    <a href="./specyfication.php?id=tadeusz">
                    <div>
                            <img src="<?php echo ($produkty["tadeusz"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["tadeusz"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><?php echo htmlspecialchars($produkty["tadeusz"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["tadeusz"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["tadeusz"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["tadeusz"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=ignacy">
                    <div>
                            <img src="<?php echo ($produkty["ignacy"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["ignacy"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><?php echo htmlspecialchars($produkty["ignacy"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["ignacy"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["ignacy"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["ignacy"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="product">
                    <a href="./specyfication.php?id=ratatuj">
                        <div>
                            <img src="<?php echo ($produkty["ratatuj"]["photos"]["p1"]); ?>">
                        </div>
                        <div class="table">
                            <h1><?php echo htmlspecialchars($produkty["ratatuj"]["shortName"]); ?></h1>
                            <ul>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:</p><?php echo htmlspecialchars($produkty["ratatuj"]["display"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:</p><span><?php echo htmlspecialchars($produkty["ratatuj"]["resolution"]); ?></span></li>
                                <li class="dark"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:</p><span><?php echo htmlspecialchars($produkty["ratatuj"]["enclosure"]); ?></span></li>
                                <li class="light"><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:</p><span><?php echo htmlspecialchars($produkty["ratatuj"]["cutoutdimension"]); ?></span></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--robot tab-------->
        <div id="robots" class="tabcontent" style="display: none;">Roooołboootttssss

        </div>
        <!--servo napends tab-------->
        <div id="servnap" class="tabcontent" style="display: none;"> somfink hirrr
            
        </div>
    </div>
    <!------fottter----------->
    <div class="fotter">
        <div class="fot_text">
            <a>© Senstor</a>
            <span><?=htmlspecialchars($try[$_SESSION["lang"]]["fot_span"]);?></span>
        </div>
    </div>
    <script src="./assets/js/products.js"></script>
</body>
</html>