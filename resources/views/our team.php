<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <?php
 $texte = '<script>alert("Hello!");</script>';
 $texte_filtre = filter_var($texte, FILTER_SANITIZE_SPECIAL_CHARS);
 echo $texte_filtre;
    
    ?>
</body>
</html>