<?php
$data = file_get_contents('large_file.txt');
$lines = explode("\n", $data);
$lineCount = count($lines);
echo "Line count: {$lineCount}";
?>