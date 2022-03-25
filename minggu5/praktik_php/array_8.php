<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h2>Sorting Array</h2>
        <?php
        $age = array(
            "Joe"=>"29",
            "Elsa"=>"27",
            "Kelvin"=>"32",
            "Nick"=>"24",
            "Olaf"=>"9",
            "Ana"=>"17"
        );
        sort($age);

        foreach ($age as $name => $value) {
            # code...
            echo "name = ".$name.", age = ".$value."<br>";
        }
        ?>
    </body>
</html>