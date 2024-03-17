<?php 
    $number=filter_input(INPUT_GET, 'number', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php include("view/header.php");?>
        <?php
        echo "Number: " . $number;
            if($number)
            {
                echo "Results page loaded";
                include("view/results.php");
               
            }
            else {
                echo "Form page loaded";
                include("view/form.php");
            }
                 
        ?>
    <?php include("view/footer.php");?>
</body>
</html>