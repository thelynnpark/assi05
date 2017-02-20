<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style_p.css">
  <title>คำนวณอัตราแลกเปลี่ยนเงินบาท</title>
</head>
<body>
  <div id="cal">

    <h3>คำนวณอัตราแลกเปลี่ยนเงินบาท</h3>
    
    <?php

      $money = $_POST["money"];   
      $coin = $_POST["coin"];

      switch ($coin) {
        case 1:
          $coin_m = 35.17;
          $sum = $money / $coin_m;
          echo number_format($money,2)." บาท  <br> = <br> ".number_format($sum,2)." ดอลลาร์สหรัฐอเมริกา (USD)";
          break;
        case 2:
          $coin_m = 0.32;
          $sum = $money / $coin_m;
          echo number_format($money,2)." บาท  <br> = <br> ".number_format($sum,2)." ญี่ปุ่นเยน (JPY)";
          break;
        case 3:
          $coin_m = 0.0344;
          $sum = $money / $coin_m;
          echo number_format($money,2)." บาท <br> = <br>  ".number_format($sum,2)." เกาหลีวอน (KRW)";
          break;
      }


    ?>
    <br>
    <a href="index.html">
      <input type="submit" value="คำนวณอีกครั้ง" id="subbtn">
    </a>
  </div>

</body>
</html>