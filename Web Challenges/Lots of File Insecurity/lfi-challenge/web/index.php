<?php
$file = $_GET["file"];
if(!empty($file)){
  if(!preg_match("/^\s*\/|^\s*file:\/\//", $file)){
    echo "<pre>";
    echo file_get_contents($file);
    echo "</pre>";
  } else {
    echo "Don't even think about it!";
  }
}
?>
<h1>Challenge</h1>
<p>find the file named "secret". It is <b>not</b> stored within the root of the filesystem /s3cr3t/secret</p>

<h2>Some links</h2>
<ul>
  <li><a href="?file=file1">File 1</a></li>
  <li><a href="?file=file2">File 2</a></li>
</ul>
