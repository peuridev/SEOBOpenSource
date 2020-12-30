<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="main.css">
        <title>내 IP 찾기 - SEOB 섭</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <style>
@font-face {
    font-family: 'TmoneyRoundWindRegular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindRegular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'TmoneyRoundWindExtraBold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindExtraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

body {
    font-family: 'TmoneyRoundWindRegular';
}
   </style>
    </head>
    <body>
    <div class="div1">
        <span style="font-family: 'TmoneyRoundWindExtraBold'; font-size: 40px;">내 IP 찾기</span>
        <br>
        <span style="font-family: 'TmoneyRoundWindRegular';">손쉽게 나의 IP를 찾아보세요!</span>
    </div>
    <div class="container">
        <br>
        <b><h4><?php
echo $_SERVER['REMOTE_ADDR'];
?>
</b>
</h4>
<p class="headline">
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<b>
접속 국가/지역 : 
<?php $string = file_get_contents("https://api.ip.pe.kr/json/"); $json_a = json_decode($string, true); 
echo $json_a['country_code']; 
echo $json_a['country_name']['ko'];
?> /
<?php $user_ip = getenv('REMOTE_ADDR'); $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/$user_ip")); $city = $geo->city;    echo "$city"; ?> </b>
    </div>
 <!-- 
해당소스는 윈섭에서 운영중이며, 이 주석을 지울시 문제가 생길수있습니다.
깃허브 다운로드 : https://github.com/ChangMun00/WinSub-IP
-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>