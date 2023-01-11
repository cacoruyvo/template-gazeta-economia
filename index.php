<?php
//Download rss file
$rss = simplexml_load_file('https://combovideos.com.br/prod/generateXmlFiles/xmlFiles_4YouSee/genGazetaEconomia_4YouSee.php');
//Check if 1 hour has passed
$filetime = time() - filemtime('feed.xml');
if ($filetime > 3600) {
    //Download rss file
    $rss = simplexml_load_file('https://combovideos.com.br/prod/generateXmlFiles/xmlFiles_4YouSee/genGazetaEconomia_4YouSee.php');
    //Save rss file
    $rss->asXML('feed.xml');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Tecmundo</title>

    <link rel="preload" href="./assets/animate.min.css" as="style">
    <link rel="preload" href="./assets/jquery.min.js" as="script">


    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <script src="./assets/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/animate.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        @media (min-width: 719px) and (max-width: 1918px) {
            #img {
                background-image: url('');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 0;
            }

            #bar {
                position: absolute;
                top: 80%;
                left: 0;
                width: 100%;
                height: 20%;
                background-image: url('./assets/barragazeta.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 1;
                border: 1px solid rgba(0, 0, 0, 0.8);
            }

            #content {
                position: absolute;
                top: 0%;
                left: 12%;
                width: 87.5%;
                height: 100%;
                z-index: 2;
                overflow: visible;
            }

            #title {
                position: absolute;
                top: 7%;
                left: 0;
                width: 100%;
                height: 35%;
                padding-left: 20px;
                
                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1.5em;
                
            }

            #description {
                position: absolute;
                top: 33%;
                left: 0;
                padding-left: 20px;
                width: 85%;
                height: 65%;

                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 2.3em;
            }

            #geco {
                position: absolute;
                top: 70%;
                left: 0%;
                background-color: #fff;
                padding: 4.2px;
                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 3em;
                border: 1px solid rgba(0, 0, 0, 0.8);
            }
            
        }

        @media (min-width: 1919px) {

            #img {
                background-image: url('');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 0;
            }

            #bar {
                position: absolute;
                top: 80%;
                left: 0;
                width: 100%;
                height: 20%;
                background-image: url('./assets/barragazeta.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 1;
                border: 1px solid rgba(0, 0, 0, 0.8);
            }

            #content {
                position: absolute;
                top: 0%;
                left: 12%;
                width: 87.5%;
                height: 100%;
                z-index: 2;
                overflow: visible;
            }

            #title {
                position: absolute;
                top: 6%;
                left: 0;
                width: 100%;
                height: 35%;
                padding-left: 35px;


                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 2.5em;
                
            }

            #description {
                position: absolute;
                top: 33%;
                left: 0;
                padding-left: 35px;
                width: 85%;
                height: 65%;

                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 3.5em;
            }

            #geco {
                position: absolute;
                top: 69%;
                left: 0;
                border: 1px solid rgba(0, 0, 0, 0.8);
                padding: 5px;
                background-color: #fff;
                color: #000;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 5em;
            }
            
        }
    
    </style>
    <script>

    </script>
</head>

<body>
    <!-- DISCLAIMER -->
    <!-- All rights reserved to Combo Videos -->
    <!-- Usage of this feed is limited to Combo Videos partners -->
    <!-- Contact development team for more info -->
    <!-- desenvolvimento@combovideos.com.br -->
    <div id="img" class="animate__animated animate__fadeIn"></div>

    <!-- <div id="eco">
        <div id="geco">
            <div id="geco" class="animate__animated animate__delay-1s animate__fadeIn">Economia</div>
        </div>
    </div> -->

    <!--
        Pra animar é só jogar um  class="animate__animated animate__delay-1s animate__fadeIn" <- esse fadeIn é a animação
         Dá pra você escolher as animações lá no animate.css 
    -->
    <div id="geco" class="animate__animated animate__delay-1s animate__fadeIn">
        Economia
    </div>
    
    <div id="bar" class="animate__animated animate__slideInUp">
        <div id="content">
            <div id="title" class="animate__animated animate__delay-1s animate__fadeIn">Saiba mais em <b>gazetadopovo.com.br</b></div>
            <div id="description" class="animate__animated animate__delay-1s animate__fadeIn">God of War: Ragnarök permite aos jogadores fazerem carinho no 'cachorro'</div>
        </div>
    </div>
    <script>
        function is_cached(src) {
            var image = new Image();
            image.src = src;

            return image.complete;
        }


        $.ajaxSetup({
            cache: false
        });
        //Get rss file feed.xml
        $.get('feed.xml', function(data) {
            //Get entire file
            var item = $(data).find('item');
            //Get size of
            var size = item.length;
            console.log(size);

            //localStorage set item
            if (localStorage.getItem('index') == null) {
                localStorage.setItem('index', size);
            }
            if (localStorage.getItem('current') == null) {
                localStorage.setItem('current', 0);
            } else if (localStorage.getItem('current') == 0) {
                localStorage.setItem('current', 1);
            } else if (localStorage.getItem('current') < size - 1) {
                localStorage.setItem('current', parseInt(localStorage.getItem('current')) + 1);
            } else {
                localStorage.setItem('current', 0);
            }
            console.log(localStorage.getItem('current'));

            var title = $(item[localStorage.getItem('current')]).find('title').text();
            var link = $(item[localStorage.getItem('current')]).find('linkfoto').text();

            $('#description').text(title);
            $('#img').css('background-image', 'url(' + link + ')');
        });

        //Preload all xml image links
        $(document).ready(function() {
            $.get('feed.xml', function(data) {
                var item = $(data).find('item');
                var size = item.length;
                for (i = 0; i < size; i++) {
                    if (i == 0) {
                        $check = is_cached($(item[i]).find('linkfoto').text());
                        console.log($check);
                    }
                    if ($check == false) {
                        var image_preload = new Image();
                        image_preload.src = $(item[i]).find('linkfoto').text();
                    }
                }
            });
        });
    </script>
</body>

</html>