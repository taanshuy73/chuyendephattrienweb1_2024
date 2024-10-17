<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3028</title>
</head>

<body>
    <div class="type-3028">
        <div class="container">
            
            <div class="services-grid">
                <div class="service-item">
                    <h2 class="title">SMART PHONE REPAIR</h2>
                    <img src="img/1-1.jpg.webp" alt="Mac & PC repair" >
                    <h3>We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & Tablets.</h3>
                </div>
                <div class="service-item">
                     <h2 class="title">TABLETS & IPAD REPAIR</h2>
                    <img src="img/2-1.jpg.webp" alt="Game consoles repair">
                    <h3>If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned catagories as per ...</h3>
                </div>
                <div class="service-item">
                     <h2 class="title">DESKTOP & MAC REPAIR</h2>
                    <img src="img/3-1.jpg.webp" alt="Wifi problems">
                    <h3>We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all sized business, On-Site Computer.</h3>
                </div>
                <div class="service-item">
                    <h2 class="title">Game Console Repair</h2>
                    <img src="img/4-1.jpg.webp" alt="Water Damage">
                    <h3>Has your gaming life come to a halt because of faulty equipment? Let us help you with video game console ...</h3>
                </div>
                <div class="service-item">
                    <h2 class="title">LCD & LED Tv Repair</h2>
                    <img src="img/5-1.jpg.webp" alt="Unlocking">
                    <h3>It doesn’t matter where you purchased your television, our experts can fix the problem at our state-of-the-art repair lab.</h3>
                </div>
                <div class="service-item">
                    <h2 class="title">MP3 & Mp4 Player Repair</h2>
                    <img src="img/6.jpg.webp" alt="Touch screen repair">
                    <h3>If you are facing any problem with your MP3 / P4 Player, dont worry our experts also repair those digital ...</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
