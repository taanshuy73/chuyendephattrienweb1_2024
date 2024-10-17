<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/' ;

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../3012/less/3012.less">
</head>
<body>
    <div class="type-3012">
        <div class="container text-center my-5">
            <div class="main">
                <p class="our-value">OUR VALUE</p>
                <h2 class="title">Fast Repairs, Affordable Prices,<br>MobiCare Has You Covered</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card p-4">
                            <div class="icon mb-3"><img src="lightbulb-solid.svg" alt="Vision Icon" class="icon-svg"></div>
                            <h3>Our Vision</h3>
                            <p>Efficiur lobortis amet faucibus feugiat aptent conubialis bibendum nostra nulla arcu</p>
                            <a href="#" class="btn">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blue p-4">
                            <div class="icon mb-3"><img src="mobile-screen-button-solid.svg" alt="Vision Icon" class="icon-svg"></div>
                            <h3>Our Mission</h3>
                            <p>Efficiur lobortis amet faucibus feugiat aptent conubialis bibendum nostra nulla arcu</p>
                            <a href="#" class="btn">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4">
                            <div class="icon mb-3"><img src="gear-solid.svg" alt="Vision Icon" class="icon-svg"></div>
                            <h3>Our Motto</h3>
                            <p>Efficiur lobortis amet faucibus feugiat aptent conubialis bibendum nostra nulla arcu</p>
                            <a href="#" class="btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer mt-5">
            <img src="logo3.png" alt="Logo 1">
            <img src="logo5.png" alt="Logo 2">
            <img src="logo6.png" alt="Logo 3">
            <img src="logo1.png" alt="Logo 4">
            <img src="logo4.png" alt="Logo 5">
            <img src="logo2.png" alt="Logo 6">
            </div>
        </div>
    </div>
</body>
</html>
