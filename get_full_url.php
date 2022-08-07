<meta http-equiv="refresh" content="0; url=/uploads.list" />
<?php
  exec('ls uploads/ | sed "s|^|https://'.$_SERVER['SERVER_NAME'].'/uploads/|g" > uploads.list');
?>
