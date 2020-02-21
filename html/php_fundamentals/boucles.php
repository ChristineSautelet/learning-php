<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
<h2>FOREACH</h2>
    <?php
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        foreach ($pronouns as $pronoun){
            echo $pronoun=="He/She"?'<br>'.$pronoun." codes":'<br>'.$pronoun." code";
        }
    ?>
<h2>WHILE LOOP</h2>
    <?php
        $thenumber = 1;

        while ($thenumber <= 120)
        {
            echo $thenumber.'<br>';
            $thenumber ++; 
        }
    ?>
<h2>FOR LOOP</h2>
    <?php
        for ($thenumber = 1; $thenumber <= 120; $thenumber ++)
        {
            echo $thenumber.'<br>';
        }
    ?>
<h2>STARTUP ARRAY LOOP</h2>
    <?php
        $members=['Alfred','Bernard','Chris','Daniel','Eric','Fabienne','Guy','Henri','Isabelle','Jacky','Kathy','Léon','Marie'];
        foreach ($members as $member){
            echo '<br>'.$member;
        }
    ?>
<h2>select box inside an html form</h2>
        <form>
            <label for="countries">Countries</label>
            <select name="countries" size="1">
                <option selected>Select a Country
                <?php
                $countries=['Argentina','Australia','Austria','Belgium','Brazil','Canada','China','France','Greece','Italy','Norway'];
                foreach ($countries as $country){
                    echo '<option>'.$country.'</option>';
                }
                ?>
            </select>
        </form>
        <?php
                foreach ($countries as $country){
                    echo '<br>'.$country;}
        ?>
<h2>COUNTRIES ISO CODES</h2>
        <form>
            <label for="countries">Countries</label>
            <select name="countries" size="1">
                <option selected>Select a Country

            <?php
                $countries=['AR'=>'Argentina','AU'=>'Australia','AT'=>'Austria','BE'=>'Belgium','BR'=>'Brazil','CA'=>'Canada','CN'=>'China','FR'=>'France','GR'=>'Greece','IT'=>'Italy','NO'=>'Norway'];

                foreach ($countries as $country){

                    echo '<option>'.$country.'</option>';
                }
            ?>
            </select>
        </form>
</body>
</html>
