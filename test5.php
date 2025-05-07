<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $stringData = "1|Sok Dara|Male|012 123 456\n"; fwrite($fh, $stringData);
    $stringData = "2|Sok San|Male|011 123 456\n"; fwrite($fh, $stringData); fclose($fh);
 ?>
 <?php
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $stringData = "3|Sok Sreyleak|Female|010 123 456\n"; fwrite($fh, $stringData);
    $stringData = "4|Sok Visal|Female|090 123 456";
    fwrite($fh, $stringData); fclose($fh);
 ?>
</body>
</html>

