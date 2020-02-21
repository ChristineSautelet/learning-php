<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unicorn</title>
    </head>
    <body>
        <h2>10. Ternary exercices (unicorn)</h2>
        <form method="get" action="">
            <label for="choice">Are you a human, a cat or a unicorn ?</label>
            <select name="choice" size="1">
                <option>Human
                <option>Cat
                <option>Unicorn
            </select>
            <input type="submit" name="submit" value="Submit">
        </form>
        <img src="$image" alt=" " />

        <br>
        <?php
            if (isset($_GET['choice'])){
                $choice=$_GET['choice'];
                echo "===> ".$choice."<br>";
                $choice=='Human' ? $image = 'https://media.giphy.com/media/lKKXOCVviOAXS/giphy.gif': ($choice=='Cat' ? $image = 'https://media.giphy.com/media/VbnUQpnihPSIgIXuZv/giphy.gif' : $image = 'https://media.giphy.com/media/JT8MDrk0AUV88PQt1O/giphy.gif') ;
                print '<img src="'.$image.'" alt="gif animé" />';
            }
        ?>
    </body>
</html>