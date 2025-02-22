<?php
    $dice = array("01.png","02.png","03.png","04.png","05.png","06.png");

    //plyaerゾーン
    $saikoro1 = mt_rand(0,5);
    $saikoro2 = mt_rand(0,5);
    $saikoro3 = mt_rand(0,5);
    //conputerゾーン
    $saikoro4 = mt_rand(0,5);
    $saikoro5 = mt_rand(0,5);
    $saikoro6 = mt_rand(0,5);
?>
<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>サイコロゲーム</title>
    </head>
    <body>
        <div class="container">
            <h1>サイコロゲームへようこそ</h1>
            <h3>あいてより合計が多いほうが勝利!</h3>
            <div class="area">
                <form action="index.php" method="post">
                    <input type="submit" value="回す">
                </form>
            </div>
                <form action="post.php" method="post">
                    <?php
                        //plyayerゾーン
                        echo '<img src="img/dice/',$dice[$saikoro1],'">';
                        echo '<img src="img/dice/',$dice[$saikoro2],'">';
                        echo '<img src="img/dice/',$dice[$saikoro3],'">';

                        $numP1 = $saikoro1;
                        $numP2 = $saikoro2;
                        $numP3 = $saikoro3;
                        echo'<input type="hidden" name="num1" value="',$numP1,'">';
                        echo'<input type="hidden" name="num2" value="',$numP2,'">';
                        echo'<input type="hidden" name="num3" value="',$numP3,'">';
                        
                        //conputerゾーン
                        $numC4 = $saikoro4;
                        $numC5 = $saikoro5;
                        $numC6 = $saikoro6;
                        echo'<input type="hidden" name="num4" value="',$numC4,'">';
                        echo'<input type="hidden" name="num5" value="',$numC5,'">';
                        echo'<input type="hidden" name="num6" value="',$numC6,'">';
                    ?>
                    <div class="area">
                        <input type="submit" value="勝負" class="red">
                    </div>
                </form>
        </div>
    </body>
</html>
