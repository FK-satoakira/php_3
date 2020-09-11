<?php
$name = $_GET["name"];
$comment = $_GET["password"];   /* name属の値を変える */

echo <<< _FORM_
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>確認フォームPHP3</title>
</head>
<body>
   <p>
       ■お名前<br>
	  $name
   </p>
   <p>
       ■コメント<br>
       $comment
   </p>
</body>
</html>
_FORM_;
?>
<!-- これならできる -->
