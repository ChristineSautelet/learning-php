<?php
// Series of exercises on PHP conditional structures.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>
    <h2>8. The "Switch" structure.</h2>
    <form method="get" action="">
            <label for="name">Student's name</label>
            <input type="text" name="name">
            <br><br>
            <label for="note">What's the note ?</label>
            <input type="number" name="note">
            <br><br>
            <input type="submit" name="submit" value="Submit">
    </form>
    <p>
    <?php
        switch ($_GET['note']) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo $_GET['name'], ", this work is really bad. What a dumb kid! ";
                break;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                echo $_GET['name'], ", this is not sufficient. More studying is required.";
                break;
            case 10:
                echo $_GET['name'], ", barely enough!";
                break;
            case 11:
            case 12:
            case 13:
            case 14:
                echo $_GET['name'], ", not bad!";
                break;
            case 15:
            case 16:
            case 17:
            case 18:
                echo $_GET['name'], ", bravo, bravissimo!";
                break;
            case 19:
            case 20:
                echo $_GET['name'], ", too good to be true : confront the cheater!";
                break;
        }
    ?>
    </p>
</body>
</html>