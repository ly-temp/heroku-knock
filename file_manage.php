<?php
  echo_folder("uploads/");

  function echo_folder($folder){ 
    $output_file = shell_exec("ls ".$folder.' | tee '.substr($folder, 0, -1).'.list');
    $output_file = explode("\n", $output_file);
    array_pop($output_file);
    foreach($output_file as $file){
      $file_path = '/'.$folder.$file;
      echo '<a href="'.$file_path.'" target="_blank" download>'.$file.'</a>';
      echo '&#160;';
      echo '<a href="'.$file_path.'" target="_blank">preview</a>';
      echo '<br>';
    }
  }
    
?>
<br><br>
<a href="/bulk_knock.php">all acsm to ebook</a><br>
<a href="/get_full_url.php">get full url</a><br>
<a href="/log.txt">log</a><br>
<a href="/clear.phpp">clear</a><br>
<a href="/">back</a>
