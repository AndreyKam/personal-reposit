<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Document</title>
</head>
<body>
    <h1 align="center">Здристи...</h1>
    <?php
    mb_internal_encoding('UTF-8');
    mb_http_output('UTF-8');
    mb_http_input('UTF-8');
    mb_language('uni');
    mb_regex_encoding('UTF-8');
    ob_start('mb_output_handler');

    function printTree ($level=1){
        $d = @opendir(".");
        if (!$d) return;
        while (($e=readdir($d)) !==false){
            if ($e=='.' || $e=='..') continue;
            if (!@is_dir($e)) continue;
		for ($i=0; $i<$level; $i++) echo " "; //echo $e . "<br>";
        if (!chdir($e)) continue;
        printTree($level+1);
        chdir("..");
        flush();
    }
    foreach (glob("*.avi") as $filename) {
        if (!@is_dir($filename)) {
           echo realpath($filename) . "<br>";
       }
   }
   closedir($d);  
}
echo "</pre>";
chdir($_SERVER['DOCUMENT_ROOT']);
chdir("D:\WD\Films");
printTree();
echo "</pre>";
 
?>
<p class="as">;lsadfgjasdfk</p>
</body>
</html>