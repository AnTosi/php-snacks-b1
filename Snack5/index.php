<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$longtext = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi inventore, autem odit error, maiores optio sequi quo ab, dolorum quasi tempore nam doloribus minima quam perspiciatis sunt tenetur dolores cum laborum. Delectus, ut perferendis laborum, explicabo reiciendis beatae quo obcaecati impedit assumenda ex excepturi nihil ea. Natus, ad dignissimos quae inventore distinctio veniam, delectus veritatis minima optio tempora modi at!";

$divided_text = explode(".", $longtext);


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
    <?php for ($i=0; $i < count($divided_text); $i++) { ?>
        <p style="border: 1px solid black; padding: 1rem;"> <?php echo $divided_text[$i] ?> </p>
    <?php } ?> 
    </body>
</html>