<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h2>Exercice1</h2>
    <?php
        function say_hello($firstname){
            echo "<p>Hello $firstname!</p>";
            echo '<hr>';
        }

        $names=['Maurice','Alice','Jésus','Judas'];
        foreach ($names as $element){
            echo say_hello($element);
        }
    ?>  
    <h2>Exercice2</h2>
    <?php
        $str= "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

        $str= explode(" ", $str);

        foreach ($str as $word){
            echo str_shuffle($word)." ";
        }    
    ?>
    <h2>PREMIERE LETTRE EN MAJUSCULE</h2>
    
    <?php

        function capitalize_firstletter($text){
            $text=mb_strtoupper($text);
            $text= ucfirst(strtolower($text));        
            return $text;
        }
        echo capitalize_firstletter("émile");
    
    ?>

    <h2>AFFICHER L'ANNEE EN COURS</h2>

    <?php 
        function currentyear (){
            return date('Y');
        }
        echo currentyear();
    ?>

    <h2>AFFICHER DATE, HEURE, MINUTES, SECONDES</h2>

    <?php 
        function date_hms (){
            setlocale(LC_TIME, 'fr_FR.UTF8');
            return strftime('%A %d %B %Y, %H:%M:%S');
        }
        echo date_hms();
    ?>
    <h2>FONCTION SOMME</H2>
    <?php
        function thesum ($nb1,$nb2){
            $thesum=$nb1+$nb2;
            return $thesum;
        }
        echo thesum(5.2,144);
    ?>
    <h2>FONCTION SOMME VERIF </H2>
    <?php
        function thesumverif ($nb1,$nb2){
            return (is_numeric($nb1) AND is_numeric($nb2))?$nb1+$nb2:"Error: argument is not a number.";
        }
        echo thesumverif(5,146);
    ?>
    <h2>FONCTION ACRONYME</H2>
    <?php
        
        function acronym ($phrasing){
            
            $phrasing= explode(" ", $phrasing);

            foreach ($phrasing as $word){
                echo mb_strtoupper(mb_substr($word,0,1));
            }         
        }
        echo acronym("In code we trust!");
    ?>
    <h2>FONCTION REMPLACE A ET E par æ</H2>
    <?php
        function replace_a_e ($theword){
            $theword = str_replace("ae", "æ", $theword);
            return $theword;       
        }
        $theword='sphaerotheca';
        echo replace_a_e($theword);
    ?>
    <h2>FONCTION REMPLACE æ par A ET E</H2>
    <?php
        function replace_æ ($theword1){
            $theword1 = str_replace("æ","ae", $theword1);
            return $theword1;       
        }
        $theword1='microsphæra';
        echo replace_æ($theword1);
    ?>
    <h2>FEEDBACK</H2>

    <?php
    function feedback($message,$response){
        if ($response="error"){
            return "<div class='error'>".$message."</div>";
        }
        elseif ($response="info"){
            return "<div class='info'>".$message."</div>";
        }
        else {
            return "<div class='notice'>".$message."</div>";
        }
    }
    echo feedback("Incorrect email address", "error");
    echo feedback("Email address ok", "info");
    echo feedback("Your email address will be kept for one year", "notice");
    ?>

</body>
</html>
