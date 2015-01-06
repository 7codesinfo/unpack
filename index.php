<?php
/*
 * PHP Zip - Extract the contents of a zip archive
 */
//create a ZipArchive instance
$zip = new ZipArchive;
//open the archive
if ($zip->open('data/myphotos.zip') === TRUE) {
    //extract contents to /data/ folder
    $zip->extractTo('data/');
    //close the archive
    $zip->close();
    echo 'Archive extracted to data/ folder!';
} else {
    echo 'Failed to open the archive!';
}
?>