<?php

$str = "mijn bericht";
echo sha1($str);

if (sha1($str) == "YViuaq6KwCDXWLep") {
          echo "<br>origineletext: mijn bericht";
}

?>