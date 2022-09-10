<meta http-equiv="refresh" content="0; url=/file_manage.php" />
<?php
  exec("chmod +x bash/*");
  chdir("uploads");
  exec("../bash/buik_knock.sh > ../log.txt 2>&1 &");
?>
