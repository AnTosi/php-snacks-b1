<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            <label for="name">First Name</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="mail">eMail address</label>
            <input type="text" id="mail" name="mail">
        </div>

        <div>
            <label for="age">Age</label>
            <input type="text" id="age" name="age">
        </div>

        
            <?php if (is_string($name) && strlen($name) > 3 && in_array('@', $mail) && in_array('.', $mail) && is_int($age)) { 
                echo "<p> Accesso riuscito </p>";
                } else {
                    echo "<p> Accesso negato </p>";

                }
            
   
 
                ?>

        </p>
            
        

    </form>
</body>
</html>