<?php
session_start();

require_once('funcs.php');
require_once('./common/head_parts.php');
require_once('./common/header.php');
loginCheck();


?>

<!DOCTYPE html>
<html lang="ja">
<head>

    <?= $head_parts ?>

</head>
<body>
<form id="form" action="select.php">
		
    <div>
        title：浅草神社の夫婦狛犬
    </div>
    <div>
        <img src="./img/a.jpg" width="100px">
    </div>
    <div>
        推しコメント：浅草神社の夫婦狛犬最初はただの狛犬さんだったのに、生まれたときから尻尾がハート！　夫婦狛犬として活躍すべく生まれてきた奇跡の狛犬さん。
    </div>

  
      <input id="submit" type="submit" value="確認">
  
</form>


<div><a href="select.php">COLLECTION LIST</a></div>
<div><a href="logout.php">LOGOUT</a></div>

</body>
</html>