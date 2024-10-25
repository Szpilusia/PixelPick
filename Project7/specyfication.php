<?php

    session_start();

    if(isset($_GET["lang"])){
            $_SESSION["lang"] = $_GET["lang"];
    }

    if (!isset($_GET['id'])) {
        die("podaj id.");
    }

    include './data/langs.php';
    include './data/produkty.php';

    if (!isset($produkty[$_GET["id"]])) {
        die("nie ma takiego produktu. lol.");
    }

    $produkt = $produkty[$_GET["id"]];

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="./assets/css/style_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js"></script>
    <title><?php echo htmlspecialchars($produkt["model"]); ?> - Senstor</title>
</head>
<body>
    <!--headerr--------------------------------->
    <?php
        include 'header.php'; 
    ?>
    <!--specyfication_container--------------------------------->
    <div class="spec_container">
        <!--Top con with products look-->
        <div class="looks">
            <!--images-->
            <div  class="spec_images">
                <div class="imgcontent big_phot" id="panel1" style="display: block;">
                    <img src="<?php echo ($produkt["photos"]["p1"]); ?>">
                </div>
                <div class="imgcontent big_phot" id="panel2" style="display: none;">
                    <img src="<?php echo ($produkt["photos"]["p2"]); ?>">
                </div>
                <div class="imgcontent big_phot" id="panel3" style="display: none;">
                    <img src="<?php echo ($produkt["photos"]["p3"]); ?>">
                </div>
                <div class="imgcontent big_phot" id="panel4" style="display: none;">
                    <img src="<?php echo ($produkt["photos"]["p4"]); ?>">
                </div>
                <div class="small_photos">
                    <img class="imglinks" onclick="newPanel(event, 'panel1')" src="<?php echo ($produkt["photos"]["p1"]); ?>">
                    <img class="imglinks" onclick="newPanel(event, 'panel2')" src="<?php echo ($produkt["photos"]["p2"]); ?>">
                    <img class="imglinks" onclick="newPanel(event, 'panel3')" src="<?php echo ($produkt["photos"]["p3"]); ?>">
                    <img class="imglinks" onclick="newPanel(event, 'panel4')" src="<?php echo ($produkt["photos"]["p4"]); ?>">
                </div>
            </div>
            <!--short decripton-->
            <div class="short_spec">   
                <div class="punkts">
                    <h1><?php echo htmlspecialchars($produkt["model"]); ?></h1>
                    <p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?>:      <span><?php echo htmlspecialchars($produkt["display"]); ?></span></p>
                    <p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?>:          <span><?php echo htmlspecialchars($produkt["resolution"]); ?></span></p>
                    <p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclosure"]);?>:    <span><?php echo htmlspecialchars($produkt["enclosureMaterial"]); ?></span></p>
                    <p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutdim"]);?>:       <span><?php echo htmlspecialchars($produkt["cutoutDimensions"]); ?></span></p>
                </div>
                <div class="no_punkts">
                    <p><?php echo htmlspecialchars($produkt["shortext"]); ?></p>
                </div>
            </div>
        </div>
        <!--all informations-->
        <div class="tab_spec">
            <!--choose what you want to know-->
           <div class="spec_menu">
                <div class="tabs">
                    <button class="inflinks active" onclick="nextInfo(event, 'spec')"><?=htmlspecialchars($try[$_SESSION["lang"]]["spec"]);?></button>
                </div>
           </div>
           <!--choosen informations-->
           <div  class="spec_informations">
                <div id="spec" class="infcontent" style="display: block;">
                    <ul>
                        <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["hardware"]);?></h4>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["display"]);?></p>       <span><?php echo htmlspecialchars($produkt["display"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["lcdViewing"]);?></p>    <span><?php echo htmlspecialchars($produkt["lcdViewing"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["res"]);?></p>           <span><?php echo htmlspecialchars($produkt["resolution"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["colors"]);?></p>        <span><?php echo htmlspecialchars($produkt["colors"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["brightness"]);?></p>    <span><?php echo htmlspecialchars($produkt["brightness"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["touPan"]);?></p>        <span><?php echo htmlspecialchars($produkt["touchPanel"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["CPU"]);?></p>           <span><?php echo htmlspecialchars($produkt["CPU"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["memory"]);?></p>        <span><?php echo htmlspecialchars($produkt["memory"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["ethPort"]);?></p>       <span><?php echo htmlspecialchars($produkt["ethernetPort"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["USBP"]);?></p>          <span><?php echo htmlspecialchars($produkt["USBPort"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["progDownl"]);?></p>     <span><?php echo htmlspecialchars($produkt["programDownload"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["serPort"]);?></p>       <span><?php echo htmlspecialchars($produkt["serialPort"]); ?></span></li>
                    </ul>
                    <ul>
                        <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["electrical"]);?></h4>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["ratedPow"]);?></p>      <span><?php echo htmlspecialchars($produkt["ratedPower"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["ratedV"]);?></p>        <span><?php echo htmlspecialchars($produkt["ratedVoltage"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["poweProt"]);?></p>      <span><?php echo htmlspecialchars($produkt["powerProtection"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["powInterr"]);?></p>     <span><?php echo htmlspecialchars($produkt["powerInterruption"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["certi"]);?></p>         <span class="ony_one"><?php echo htmlspecialchars($produkt["certification"]); ?></span></li>
                    </ul>
                    <ul>
                        <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["environmental"]);?></h4>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["operTemp"]);?></p>      <span><?php echo htmlspecialchars($produkt["operatingTemperature"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["storTemp"]);?></p>      <span><?php echo htmlspecialchars($produkt["storageTemperature"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["UVR"]);?></p>           <span><?php echo htmlspecialchars($produkt["UVResistance"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enviHumi"]);?></p>      <span><?php echo htmlspecialchars($produkt["environmentalHumidity"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["vibEnd"]);?></p>        <span><?php echo htmlspecialchars($produkt["vibrationEndurance"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["coolMet"]);?></p>       <span><?php echo htmlspecialchars($produkt["coolingMethod"]); ?></span></li>
                    </ul>
                    <ul>
                        <h4><?=htmlspecialchars($try[$_SESSION["lang"]]["mechanical"]);?></h4>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["protLev"]);?></p>       <span><?php echo htmlspecialchars($produkt["protectionLevel"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["enclMat"]);?></p>       <span><?php echo htmlspecialchars($produkt["enclosureMaterial"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["cutDimen"]);?></p>      <span><?php echo htmlspecialchars($produkt["cutoutDimensions"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["dimensions"]);?></p>    <span><?php echo htmlspecialchars($produkt["dimensions"]); ?></span></li>
                        <li><p><?=htmlspecialchars($try[$_SESSION["lang"]]["weight"]);?></p>        <span><?php echo htmlspecialchars($produkt["weight"]); ?></span></li>
                    </ul>
                    <div>
                        <a href="./data/downloads/<?php echo htmlspecialchars($produkt["shortName"]); ?>.pdf" download="<?php echo htmlspecialchars($produkt["shortName"]); ?>_specyfication.pdf">
                            <button class="btn"><i class="fa fa-download"></i><?=htmlspecialchars($try[$_SESSION["lang"]]["Downbut"]);?></button>
                        </a>
                        <a href="./data/downloads/<?php echo htmlspecialchars($produkt["shortName"]); ?>_img.pdf" download="<?php echo htmlspecialchars($produkt["shortName"]); ?>_size_image.pdf">
                            <button class="btn"><i class="fa fa-download"></i><?=htmlspecialchars($try[$_SESSION["lang"]]["Downsize"]);?></button>
                        </a>
                    </div>
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
    <script src="./assets/js/products.js"></script>
</body>