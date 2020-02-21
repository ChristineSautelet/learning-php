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
<h2> 1.1 Clean your room Exercise</h2>
    <p>
    <?php
     
        $room_is_filthy = false;

        if($room_is_filthy==true ){
            echo "Yuk, Room is dirty : let's clean it up !";

        } else {
            echo "<br>Nothing to do, room is neat.";
        }
    ?>
    </p>
    <h2> 1.2 Clean your room Exercise, improved</h2>
    <p>
    <?php

        // Create the array of possible states
        $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[2]; 

        if($room_filthiness=="health hazard" or $room_filthiness=="filthy"){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if($room_filthiness=="dirty"){
            echo "Yuk, Room is dirty : let's clean it up !";
        // ...
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
    ?>
    </p>
    <h2> 2. "Different greetings according to time" Exercise</h2>
    <p>
    <?php

        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
        
        $hour= '%H';
        $minute= '%M';
        $thehour = strftime($hour);
        $theminute = strftime($minute);

        if ($thehour>20 or $thehour<5){
            if($thehour=21 and $theminute=0){
                echo "Good evening !";
            }
            else{ echo "Good night !";}
        }
        elseif ($thehour<10){
            if($thehour=9 and $theminute>0){
                echo "Good day !";
            }
            else{ echo "Good morning !";}
        }
        elseif ($thehour<13){
            if($thehour=12 and $theminute>0){
                echo "Good afternoon !";
            }
            else{echo "Good day !";}
        }
        elseif ($thehour<17){
            if($thehour=16 and $theminute>0){
                echo "Good evening !";
            }
            else{echo "Good afternoon !";}
        }
        else{echo "Good evening !";}
    ?>
    </p>
    <h2>3. "Different greetings according to age" Exercise</h2>
    <form method="get" action="">
            <label for="age">Please type your age</label>
            <input type="number" name="age">
            <input type="submit" name="submit" value="Greet me now">
    </form>

    <p>
    <?php
        
        if (isset($_GET['age'])){
            if ($_GET[age]<12){
                echo "Hello kiddo!";
            }
            elseif ($_GET[age]<18){
                echo "Hello Teenager !";
            }
            elseif ($_GET[age]<115){
                echo "Hello Adult !";
            }
            else{
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        
        }
        ?>
    </p>
    <h2>3. Display a different greeting according to the user's age and gender.</h2>
    <form method="get" action="">
            <label for="age">Please type your age</label>
            <input type="number" name="age">
            <br><br>
            <input type="radio" id="femme" name="sexe" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" id="homme" name="sexe" value="homme">
            <label for="homme">Homme</label>
            <input type="submit" name="submit" value="Greet me now">
    </form>
    <p>
    <?php
        
        if (isset($_GET['age'],$_GET['sexe'])){
            if ($_GET['sexe']=='femme'){
                $gender='Miss';
            }
            else{$gender='Mister';}
            if ($_GET[age]<12){
                echo "Hello ", $gender, " kiddo!";
            }
            elseif ($_GET[age]<18){
                echo "Hello ", $gender, " Teenager !";
            }
            elseif ($_GET[age]<115){
                echo "Hello ", $gender, " Adult !";
            }
            else{
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
        ?>
    </p>
    <h2>4. Display a different greeting according to the user's age, gender and mothertongue.</h2>
    <form method="get" action="">
            <label for="age">Please type your age</label>
            <input type="number" name="age">
            <br><br>
            <input type="radio" id="femme" name="gender" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" id="homme" name="gender" value="homme">
            <label for="homme">Homme</label>
            <br><br>
            <label for="english">Do you speak English ?</label>
            <input type="radio" id="yes" name="english" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="english" value="no">
            <label for="no">No</label>
            <input type="submit" name="submit" value="Greet me now">
    </form>
    <p>
    <?php
        
        if (isset($_GET['age'],$_GET['gender'],$_GET['english'])){
            if ($_GET['gender']=='femme'){
                $gender='Miss';
            }
            else{$gender='Mister';}
            if ($_GET['english']=='yes'){
                $greet='Hello';
            }
            else{$greet='Aloha';}
            if ($_GET[age]<12){
                echo $greet, " ", $gender, " kiddo!";
            }
            elseif ($_GET[age]<18){
                echo $greet, " ", $gender, " Teenager !";
            }
            elseif ($_GET[age]<115){
                echo $greet, " ", $gender, " Adult !";
            }
            else{
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
        ?>
    </p>
    <h2>5. The Girl Soccer team</h2>
    <form method="get" action="">
            <label for="name">What's your name ?</label>
            <input type="text" name="name">
            <br><br>
            <label for="age">What's your age ?</label>
            <input type="number" name="age">
            <br><br>
            <input type="radio" id="femme" name="gender" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" id="homme" name="gender" value="homme">
            <label for="homme">Homme</label>
            <br><br>
            <input type="submit" name="submit" value="Submit">
    </form>
    <p>
    <?php
        
        if (isset($_GET['age'],$_GET['gender'],$_GET['name'])){
            if ($_GET['gender']!=='femme' or $_GET['age']<21 or $_GET['age']>40){
                echo "Sorry you don't fit the criteria ", $_GET['name'];
            }
            else{echo "welcome to the team ", $_GET['name'], " !";}
            }
        ?>
    </p>
    <h2>6. Achieve the same, without the ELSE.</h2>
    <form method="get" action="">
            <label for="name">What's your name ?</label>
            <input type="text" name="name">
            <br><br>
            <label for="age">What's your age ?</label>
            <input type="number" name="age">
            <br><br>
            <input type="radio" id="femme" name="gender" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" id="homme" name="gender" value="homme">
            <label for="homme">Homme</label>
            <br><br>
            <input type="submit" name="submit" value="Submit">
    </form>
    <p>
    <?php
        
        if (isset($_GET['age'],$_GET['gender'],$_GET['name'])){
            $theResponse = "welcome to the team ";
            if ($_GET['gender']!=='femme' or $_GET['age']<21 or $_GET['age']>40){
                $theResponse = "Sorry you don't fit the criteria ";
            }
            echo $theResponse, $_GET['name'], " !";
        }

    ?>
    </p>
    <h2>7. "School sucks!" Exercise</h2>
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
        
        if (isset($_GET['name'],$_GET['note'])){
            if($_GET['note']<5){
                echo $_GET['name'], ", this work is really bad. What a dumb kid! ";
            }
            elseif ($_GET['note']<10){
                echo $_GET['name'], ", this is not sufficient. More studying is required.";
            }
            elseif ($_GET['note']==10){
                echo $_GET['name'], ", barely enough!";
            }
            elseif ($_GET['note']<15){
                echo $_GET['name'], ", not bad!";
            }
            elseif ($_GET['note']<19){
                echo $_GET['name'], " Bravo, bravissimo!";
            }
            else{echo $_GET['name'], ", too good to be true : confront the cheater!";
            }
        }
    ?>
    </p>
</body>
</html>


