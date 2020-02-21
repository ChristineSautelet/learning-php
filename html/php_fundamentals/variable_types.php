<html>
  <head><title>Variable types</title></head>
  <body>
    <p>
        Hi! My name is
        <?php
          $firstname = "Christine";
          echo $firstname;
        ?>
    </p>
    <p>I am
        <?php
        $age=50;
        echo $age;
        ?>
        years old
    </p>
    <p>My eyes are
        <?php
        $eyescolor="blue";
        echo $eyescolor;
        ?>
    </p>
    <p>
        <?php
        $membersfamily= array(
            0 => 'Maxi', 
            1 => 'Joël', 
            2 => 'Philippe', 
            3 => 'Sébastien', 
            4 => 'Marlène');
        foreach ($membersfamily as $members){
            echo $members, ', ';
        }    
        ?>
    </p>
    <p>
        The first person in my family is 
        <?php
          echo $membersfamily[0];
        ?>
    </p>
    <p>
        <?php
        $i_am_hungry = true;
        if ($i_am_hungry==false){
        echo "j'ai faim";}
        else{echo "je n'ai pas faim";}
        ?>

    </p>
    <p>
      <?php
          if( $temperature >= 15 ) {
        // code to execute if the condition results TRUE
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;
      } else {
        // code to execute if the condition results FALSE
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
      }
      
      if ($should_i_wear_a_scarf == true){
        // this is a "fake" function for the sake of the example 
        // that function is only executed in the condition is true
        grab_scarf_from_door_hanger();
      }
      // The following function will be executed everytime, 
      // but its $clothes argument changes according to the result
      // of our previous conditional structure
      cover_my_chest_with($clothes);
      ?>
    </p>
  </body>
</html>