<?php

$loc=$_GET['code'];

if (is_dir($loc))
{
  header("Location: $loc");
  exit;
}
else {
  header("Location: index.php?e");
  exit;
}
?>
