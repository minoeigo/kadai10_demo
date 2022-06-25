<?php
session_start();

//1.  DB接続します

require_once('funcs.php');
require_once('./common/head_parts.php');
require_once('./common/header.php');

loginCheck();
$pdo = db_conn();

// //２．データ取得SQL作成
// $stmt = $pdo->prepare('SELECT * FROM gs_a_table');
// $status = $stmt->execute();

// //３．データ表示

// $view = '';
// if ($status == false) {
//     sql_error($stmt);
// } else {
//     $contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
// }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>狛</title>
  <!-- カード式表示用のCSS -->
  <link rel="stylesheet" type="text/css" href="css2.css"> 
</head>

<body id="main">

<?= $header ?>
<div>
<img src="./img/map.png" width="100%">
</div>
<!-- css追加部分用 -->
<div class="bl_media_container">
  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/a.jpg">
    
      <h3>浅草神社の夫婦夫婦</h3>

      <p>浅草神社の夫婦狛犬最初はただの狛犬さんだったのに、生まれたときから尻尾がハート！　夫婦狛犬として活躍すべく生まれてきた奇跡の狛犬さん。</p>

      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/b.jpg">
    
      <h3>草むらに隠れる肥前狛犬</h3>

      <p>池の中にいるから近づけない！草むらの中に隠れている肥前狛犬さん</p>

      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/c.jpg">
    
      <h3>現代アーティスト小松美羽の陶器狛犬</h3>

      <p>取材中に神殿内へ上げてもらったら出会えたラッキー。大英博物館にも小松美羽さん作こんなかんじの狛犬が所蔵されてるよ。</p>
      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/d.jpg">
    
      <h3>隠されてるチビチビ狛犬さん</h3>

      <p>チワワサイズの華奢すぎる狛犬さん！倉庫に隠されていました。</p>

      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/e.jpg">
    
      <h3>足の間に隠されてたチビチビ狛犬さん</h3>

      <p>角度を変えてみてみたら……玉乗り狛犬さんの球の後ろに隠れてた！</p>

      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

  <div class="bl_media_itemWrapper">
    <div class="bl_media_item">

      <img src="./img/f.jpg">
    
      <h3>こま……いぬ……？</h3>

      <p>きみはほんとうにこまいぬかい？</p>

      <div>
        <small>登録日:2011/11/11</small>
      </div>

      <div>
          <small>更新日:2022/01/11</small>
   
      </div>

      <a href="detail.php">編集する</a>
    </div>
  </div>

</div>

<div>
<a href="index.php">登録画面に戻る</a>
</div>

</body>
</html>
