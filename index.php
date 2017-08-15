<?php

$key=$_GET['u'];
unset($url);
unset($error);

if (isset($key)) {
  $handle = fopen('links.csv','r');

  while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[0] == $key) {
      $url=$data[1];
      break;
    }
  }

  if (isset($url)) {  header("Location: $url");  }
  else { $error="<div class=errordiv>Invalid code.</div>"; }
}

?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body onLoad="document.getElementById('code').focus()">

<div class=logodiv>
<a href="./index.php"><img src=logo.png class=logo /></a>
</div>

<form action=index.php method=get>
<div class=codediv>
<input type=text name=u class=code id=code>
</div>
</form>

<?php
if (isset($error)) {
  echo "$error";
}
?>

</body>
</html>
