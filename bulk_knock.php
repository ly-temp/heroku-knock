<meta http-equiv="refresh" content="0; url=/file_manage.php" />
<?php
  chdir("uploads");
  exec("chmod +x ~/bash/*");
  exec("~/bash/bulk_knock.sh > ~/log.txt 2>&1 &");
?>
