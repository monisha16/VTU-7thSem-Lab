
<html>
<title>Displaying Time Using PHP</title>
<meta http-equiv="refresh" content="1">
<body>
<?php
    echo '<h1 align="center">  '.date("h:i:s A").'   </h1>';
      
?>

</body>
</html>

<!-- Modification asked:
    1.Acccording to AM/PM print good morning/ good afternoon accordingly:
        $s=date('A');
        if($s=='AM')
        {
            echo "good morning";
        }
        else{ echo "good afternoon"; }
    
    2. If date and Day is to be printed:
        echo '<h1 align="center">  '.date("d/m/y D").'   </h1>'; -->