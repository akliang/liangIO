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
<style>
body {
  background-image:url('./metal_bg.jpg');
  background-size:cover;
  font-family:Tahoma;
}

.logodiv {
  width:100%;
  text-align:center;
  margin-top:10%;
}

.logo {
  border:none;
}

.codediv {
  width:100%;
  text-align:center;
  margin-top:2%;
}

.code {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  height:50px;
  width:250px;
  text-align:center;
  font-size:24px;
  background-color:#000;
  border:none;
  color:#47a319;
}

.code:hover {
  border:2px groove #47a319;
}

.errordiv {
  width:100%;
  color:red;
  text-align:center;
}

</style>
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
