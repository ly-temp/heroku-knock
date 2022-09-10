<meta http-equiv="refresh" content="0; url=/file_manage.php" />
<?php
  exec("chmod +x bash/*");
  exec("chmod +x no-backup/*");
  chdir("uploads");
  exec("../bash/buik_knock.sh > ../log.txt 2>&1 &");
?>
