<?php
session_start();

require_once('funcs.php');
require_once('./common/head_parts.php');
require_once('./common/header.php');
loginCheck();

// $title = '';
// $content ='';
// $image_data ='';

// if(isset($_SESSION['post']['title'])){
//     $title = $_SESSION['post']['title'];
// }

// if(isset($_SESSION['post']['content'])){
//     $content = $_SESSION['post']['content'];
// }

// if (isset($_SESSION['post']['image_data'])) {
//   $image_data = $_SESSION['post']['image_data'];
// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>

    <?= $head_parts ?>

</head>
<body>
    <?= $header ?>
    
<form id="form" method="post" action="confirm.php">
		
	  <input id="title" type="text" placeholder="例：○○な狛犬" name="title">
		  
      <input id="img" type="file" name="img">
		  
      <textarea id="content" type="text" placeholder="推しコメント" name="content"></textarea>
  
      <input id="submit" type="submit" value="確認">
  
</form>


<div><a href="select.php">COLLECTION LIST</a></div>
<div><a href="logout.php">LOGOUT</a></div>

</body>
</html>
