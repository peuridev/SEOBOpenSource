<?php (include 'head.php'); ?>
<!--이 위는 수정할 수 없습니다. 수정하시려면 head.php를 수정해주세요.-->

<?php (include 'menu.php'); ?>
<!--메뉴를 수정하려면 menu.php를 수정해주세요.-->

    <body>
        <!--DIV 영역-->
        <div class="div1">
            <center>
            <b><h1><?php
echo $_SERVER['REMOTE_ADDR'];
?>
</b>
</h1>
            <p>간편하게 내 IP를 찾을 수 있습니다.</p>

            </center>
        </div>
        <br>
        
        <div class="container">


        <h2>상제 접속 정보</h2>

접속 국가/지역 : 
<?php $string = file_get_contents("https://api.ip.pe.kr/json/"); $json_a = json_decode($string, true); 
echo $json_a['country_code']; 
echo $json_a['country_name']['ko'];
?> /
<?php $user_ip = getenv('REMOTE_ADDR'); $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/$user_ip")); $city = $geo->city;    echo "$city"; ?> 



<p class="headline">
상세 접속 정보 : <?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<br>

<p style="color: gray;">
이 IP찾기의 소스는 윈섭의 소스를 사용하였습니다.
</p>
</div>


                  <br>
      </div>


<!--이 아래는 수정할 수 없습니다. 수정하시려면 footer.php를 수정해주세요.-->
<?php (include 'footer.php'); ?>

<!--source by winsub (https://winsub.kr)-->