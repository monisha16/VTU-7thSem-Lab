
<html>
<title>Visiter Count</title>
<body>
<?php
    $file_content=(int)file_get_contents("count.txt");
    $file_content += 1;
    echo '<h1 align="center">Page Views: '.$file_content.' </h1>';
    file_put_contents("count.txt",$file_content);
?>

</body>
</html>


<!-- The modification asked:
    To print incrementing a,b,c .. instead of 1,2,3 .. then use:
        echo '<h1 align="center">Page Views: '.chr($file_content+63).' </h1>'; -->
