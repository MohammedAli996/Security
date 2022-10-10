<?php

$str = "password1234";
echo md5($str);

if (md5($str) == "bdc87b9c894da5168059e00ebffb9077") {
          echo "<br>password1234";
        }
?>
