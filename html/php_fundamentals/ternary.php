<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ternary</title>
    </head>
    <body>
        <h2>10. Ternary exercises</h2>
        <form method="get" action="">
                    <input type="radio" name="gender" value="F">
                    <label for="femme">Femme</label>
                    <input type="radio" name="gender" value="H">
                    <label for="homme">Homme</label>
                    <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <?php
        if (isset($_GET['gender'])){
            $gender=$_GET['gender'];
            $hello = "Bonjour";
            echo $gender=='F' ? $hello." Madame" : $hello." Monsieur";
        }
        ?>
    </body>
</html>