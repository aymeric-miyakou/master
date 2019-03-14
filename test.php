<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mangas</title>
        <style>
            body{
                background-color:#FF0000;
                // background-color:#3B3E3F;
               
            }
            .icone{
                float:left;
                margin:0px;
            }

            .selection ul{
                padding:0px;
                margin:10px;
                list-style-type:none;
                background-color: #333333;
            }

            .selection li{
                display:inline-block;
                width:100px;
                height:40px;
                margin:0px;
                padding:0px;
                border-right:1px solid #CCCCCC;
                text-align:center;
                line-height:40px;
            }

            .selection li:hover{
                background-color:#3388BB;
            }

            .selection li a{
                display:block;
                text-decoration: none;
                color:#FFFFFF;
            }

            .header-search{
                height:38px;
                float:right;
                margin-top:18px;
                margin-right:20px;
                width:402px;
                position: relative;;
            }

            .header-search input{
                height:38px;
                line-height:38px;
                border:2px solid #fd113a;
                outline:0;
                border-radius:19px 0 0 19px;
                padding-left:20px;
                font-size:14px;
                width:226px;
            }

            .header-search-list{
                position:absolute;
                border:1px solid #ededed;
                background-color:#fff;
                width:277px;
                top:38px;
                left:15px;
                padding:20px 0;
                padding-bottom:0px;
            }

            .header-search a{
                display:block;
                float:right;
                width:108px;
                height:44px;
                line-height:38px;
                font-size:16px;
                color:#fff;
                padding-left:44px;
                border-radius:0 19px 19px 0;
                background-color:#000000;
                //background-color:#fd113a;
                background-repeat:no-repeat;
                background-position:20px 10px;
                text-decoration:none;
            }

            .categorie ul{
                padding:0px;
                margin:10px;
                list-style-type:none;
                background-color:#343637;
            }

            .categorie li{
                display:inline-block;
                width:100px;
                height:40px;
                margin:0px;
                padding:0px;
                border-right:1px solid #CCCCCC;
                text-align:center;
                line-height:40px;
            }

            .categorie li:hover{
                background-color:#3388BB;
            }

            .categorie li a{
                display:block;
                text-decoration: none;
                color:#CDD5D8;
            }

            span{
                weight:10px;
                height:10px;
            }

        </style>
    </head>
    <body>
        <?php
        echo '<p class="icone">
            <a href="mangas.php"><img style="width:70px;" src="images/manga.jpg"></a>
        </p>'
        ?>

        <?php 
        echo'
        <ul class="selection" style="line-height:65px; font-family:Arial Black; font-size: 20px; font-weight:bold">
            <li><a href="mangas.php">Accueil</a></li>
            <li><a href="ListMangas.php" >Mangas</a></li>
        </ul>'
        ?>
        <?php
        echo '<div class="header-search">
            <input id="txtKeywords" type="text" placeholder="Recherche de manga" data-default="Recherche" >
            <div class="header-search-list" style="display: none"></div>
            <a id="btnSearch" href="javascript:newsearch();">Recherche</a>
        </div>'
        ?>
        
        <?php
            echo '<ul class="categorie" style="line-height:65px; font-family:sans-serif; font-size:15px">
            <li><a href="Action.php">Action</li>
            <li><a href="Aventure.php">Aventure</li>
            <li><a href="Policier.php">Policier</li>
            <li><a href="Horreur.php">Horreur</li>
            <li><a href="Historique.php">Historique</li>
            <li><a href="Romance.php">Romance</li>
            <li><a href="Sport.php">Sport</li>
        </ul>'
        ?>


    </body>
</html>
