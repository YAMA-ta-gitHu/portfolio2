<?php
    $dice = array("01.png","02.png","03.png","04.png","05.png","06.png");

    //plyayerゾーン
    $iNum1 = $_POST['num1'];
    $iNum2 = $_POST['num2'];
    $iNum3 = $_POST['num3'];
    //conputerゾーン
    $hNum4 = $_POST['num4'];
    $hNum5 = $_POST['num5'];
    $hNum6 = $_POST['num6'];
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>サイコロ結果</title>
    </head>
    <body>
        <div class="container result">
            <?php
                //plyayerゾーン
                echo "<h2>プレイヤー</h2>";
                echo'<img src="img/dice/',$dice[$iNum1],'">';
                echo'<img src="img/dice/',$dice[$iNum2],'">';
                echo'<img src="img/dice/',$dice[$iNum3],'">';
                //conputerゾーン
                echo "<br>";
                echo "<h2>相手</h2>";
                echo'<img src="img/dice/',$dice[$hNum4],'">';
                echo'<img src="img/dice/',$dice[$hNum5],'">';
                echo'<img src="img/dice/',$dice[$hNum6],'">';
            
                //計算ゾーン
                $player = $iNum1+$iNum2+$iNum3;
                $computer = $hNum4+$hNum5+$hNum6;
                if($player > $computer){
                    echo "<br>","<p>あなたの勝利です！</p>";
                }
                elseif ($player < $computer) {
                    echo "<br>","<p>あなたの負けです・・・</p>";
                }
                else{
                    echo "<br>","<p>同じなので勝利です</p>";
                }
            ?>
            <br>
            <a href="index.php" class="return">もう一度遊ぶ</a>
        </div>
    </body>
</html>