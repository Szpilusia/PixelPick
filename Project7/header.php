<?php
       function setlangurl($lang){
        $params = array_merge( $_GET, array( 'lang' => $lang ) );
        return "?".http_build_query( $params );    
    } 

    include './data/langs.php';  
?>
<!--headerr--------------------------------->
<div class="header">
    <!--top head-->
    <div id="topHead" class="top_head">
        <div class="rs">
            <div class="butsam">
                <a href="./contact.php"><button><?=htmlspecialchars($try[$_SESSION["lang"]]["contact"]);?></button></a>
            </div>
            <div class="dropdown">
                <button class="btn"><?=htmlspecialchars($try[$_SESSION["lang"]]["currlang"]);?></button>
                <div id="dropdown-content">
                    <a href="<?=setlangurl("en");?>">English</a>
                    <a href="<?=setlangurl("pl");?>">Polish</a>
                </div>
            </div>
        </div>
    </div>
    <!--bottom head-->
    <div id="navbar" class="bottomHead">
        <!--bottom head left side-->
        <div class="leftSite">
            <div class="name">
                <a href="./index.php">
                    <button>
                        <span>Senstor</span>
                    </button>
                </a>
            </div>
            <div id="menu" >
                <div class="menImg" >
                    <img src="./photos/menu2.png" onclick="Mymenu()">
                </div>
            </div>
        </div>
        <!--bottom head right side-->
        <div id="rightSite" class="rightSite">
            <div class="right">
                <a  href="./index.php">
                    <button <?php 
                        if (str_ends_with($_SERVER['SCRIPT_NAME'], "main_page.php")) {
                            echo 'class="active"';
                        } 
                        ?>>
                        <?=htmlspecialchars($try[$_SESSION["lang"]]["home"]);?>
                    </button>
                </a>
                <a href="./products.php">
                    <button <?php 
                        if (str_ends_with($_SERVER['SCRIPT_NAME'], "products.php")) {
                            echo 'class="active"';
                        } 
                        ?>>
                        <?=htmlspecialchars($try[$_SESSION["lang"]]["product"]);?>
                    </button>
                </a>
                <a href="./contact.php">
                    <button <?php
                        if(str_ends_with($_SERVER['SCRIPT_NAME'], "contact.php")){
                            echo 'class="active"';
                        }
                        ?>>
                        <?=htmlspecialchars($try[$_SESSION["lang"]]["supp"]);?>
                    </button>
                </a>
            </div>
            <div class="login">
                <button><a><img src="./photos/log_pic_white.png"></a></button>
            </div>
        </div>
    </div>
</div>

