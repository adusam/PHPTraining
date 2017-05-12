<?php

// readfile($filename);
// $filename = "log.csv";
// file_get_contents($file);

$filename = "log.csv";
$handle = fopen($filename, "r+");
if (filesize($filename) == 0) {
    echo "First accsess!";
} else {
    $contents = explode(",", trim(fread($handle, filesize($filename))));
    foreach ($contents as $value) {
        echo $value . "<br />";
    }
}

fputs($handle, date("Y/m/d G:i:s,"));
fclose($handle);
?>
<br />
<br />

<?php
$fp = fopen("count.txt", "r+");
$count = trim(fgets($fp, filesize("count.txt")));
$count ++;
rewind($fp);
fwrite($fp, $count);
fclose($fp);
echo "あなたは" . $count . "人目のお客様です。";

?>
