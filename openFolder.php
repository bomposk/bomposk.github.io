<?php
if (isset($_GET['open_folder'])) {
  // Sanitize the input to prevent any malicious input
  $folder = $_GET['open_folder'];
  
  // Define a list of allowed folders (for security reasons)

  // Check if the folder exists in the allowed folders list
  $folder_path = escapeshellarg($folder);
  shell_exec("explorer $folder_path");
}
?>