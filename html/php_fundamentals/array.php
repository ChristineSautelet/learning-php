<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<h2>Excercise 2-3</h2>
    <?php
    $family_members = array( 'Maxi', 'Joël' , 'Philippe', 'Christine', 'Sébastien', 'Marlène' );
    print_r($family_members);
    echo '<br>';
    ?>
<h2>Excercise 4-5</h2>
    <?php
    $favourite_recipes = array( 'Pâtes', 'Moussaka' , 'Ratatouille', 'Desserts' );
    print_r($favourite_recipes);
    echo '<br>';
    ?>
<h2>Excercise 6-7</h2>
    <?php
    $favourite_films = array( 'The Game', 'Seul au Monde' , 'La Ligne Verte', 'Bound', 'La Grande Vadrouille', 'Le Diner de Cons' );
    echo $favourite_films[1];
    $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );
    echo '<pre>';
    print_r($countries);
    echo '</pre>';
    echo '<br>';
    var_dump($countries);
    echo '<br>', $countries[2];
    array_push($countries, 'England');
    echo '<pre>';
    print_r($countries);
    echo '</pre>';
    $countries[] = 'Greece';
    echo '<pre>';
    print_r($countries);
    echo '</pre>';
    echo '<br>';
    $person=['test1','test2'];
    $person['function'] = 'Junior Web Developer';
    echo $person['function'];
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    $person['function'] = 'Junior Web Developer';
    $person['function'] = 'Senior Web Developer';
    echo $person['function'];
    $person[0] = '02/2198445';
    $person[1] = 'Cantersteen 10';
    $person[2] = 'Brussels';
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo $person[1];
    echo $person['street'];
    $user = array (
        'firstname' => 'Juan',
        'lastname' => 'Pablo',
        'adress' => '3 Paradijsestraat',
        'city' => 'Antwerpen'
        );
    echo '<br>', $user['lastname'];
    ?>
<h2>Excercise associative</h2>
    <?php    
        $me = array (
            'firstname' => 'Chris',
            'lastname' => 'Sautelet',
            'age' => 50,
            'favourite season' => 'Spring',
            'soccer' => false,
            'favourite_movies' 	=> array('The Game', 'Seul au Monde' , 'La Ligne Verte', 'Bound', 'La Grande Vadrouille', 'Le Diner de Cons' )
        );
        $me['hobbies'] = ['rubik\'s cube', 'coding', 'movies', 'music'];
        echo '<pre>';
        print_r($me);
        echo '</pre>';
        $mother = array (
            'firstname' => 'Maxi',
            'age' => 75,
            'favourite season' => 'Summer',
            'soccer' => false,
            'favourite_movies' 	=> array('Doctor Jivago', 'Seul au Monde' , 'La Ligne Verte', 'La Mélodie du Bonheur', 'La Grande Vadrouille', 'Le Diner de Cons' )
        );
        $mother['hobbies'] = ['internet', 'gardening', 'animals'];
        echo '<pre>';
        print_r($mother);
        echo '</pre>';
        $me['mother']=$mother;   
        echo '<pre>';
        print_r($me);
        echo '</pre>';
        ?>
        <h2>Count the number of elements</h2>
        <?php
        echo '<pre>'.'number of mother\'s hobbies: ';
        var_dump(count($mother['hobbies']));
        echo '</pre>';
        echo '<pre>'.'number of my hobbies: ';
        var_dump(count($me['hobbies']));
        echo '<br>', count($me['hobbies'])+count($mother['hobbies']).'</pre>';

        $me["hobbies"][]='taxidermy';

        $me["lastname"]='Durand';

        echo '<br><pre>';
        print_r($me);
        echo '</pre>';
        ?>
        <h2>intersection et fusion</h2>
        <?php


        $soulmate = array(
            'hobbies' 	=> array('music', 'gardening', 'rubik\'s cube', 'gaming'));
        // perform array operation
        $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
        $possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

        echo '<pre>';
        print_r($possible_hobbies_via_intersection);
        print_r($possible_hobbies_via_merge);
        echo '</pre>';
        ?>
        <h2>more array exercices</h2>
        <?php
        $web_development = array (
            'frontend' => [],
            'backend' => []);

        array_push($web_development['frontend'], 'xhtml'); 
        array_push($web_development['backend'], 'rubis on rails');       
        array_push($web_development['frontend'], 'css');
        array_push($web_development['frontend'], 'flash');
        array_push($web_development['frontend'], 'javascript');

        echo '<pre>';
        print_r($web_development);
        echo '</pre>';

        echo '<br>replace xhtml by html';

        $keyxhtml = array_search('xhtml', $web_development['frontend']);
        array_splice($web_development['frontend'], $keyxhtml, 1, 'html');

        echo '<pre>';
        print_r($web_development);
        echo '</pre>';

        echo '<br>removes Flash';

        $keyflash = array_search('flash', $web_development['frontend']);
        unset($web_development['frontend'][$keyflash]);

        
        echo '<pre>';
        print_r($web_development);
        echo '</pre>';    
        ?>
</body>
</html>