<?php


function orderPizza($pizzaType, $firstName) {

//$type = $pizzaType;
echo 'Creating new order... <br>';
$p = calc_cts($pizzaType);
    $address = 'unknown';
    switch ($firstName) {
        case 'koen':
            $address="Yach in Antwerp";
            break;
        case 'manuele':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
    }
    

    echo ' A '. $pizzaType. ' pizza should be sent to ' . $firstName . ". <br>The address: {$address}.</br>";
    echo'The bill is €'.$p.'.<br>';




    echo "Order finished.<br><br>";
}

    function total_price($p) {
            return $p;
    }

        function test($p_type) {
            echo "Test: type is {$p_type}. <br>";
        }

function calc_cts($p_type)
{
    $cst = 'unknown';
    switch ($p_type) {
        case 'marguerita':
            $cst = 5;
            return $cst; 
            break;
        case 'golden':
            $cst = 100;
            return $cst; 
            break;
        case 'calzone':
            $cst = 10;
            return $cst; 
            break;
        case 'hawai' :
            throw new Exception('Computer says no');
            break;

    }    
}
   /* if ($p_type == 'marguerita') {
        $cst = 5;
    }
    else
        {
        if ($p_type == 'golden')
        {
            $cst = 100;
        }

            if ($p_type == 'calzone')
            {
                $cst = 10;
            }

        if ($p_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cst; 
}*/

            function ordr_piz_all()
            {
            $test= 0;
            orderPizza('calzone', 'koen');
            orderPizza('marguerita', 'manuele');

            orderPizza('golden', 'students');
            }

function make_Allhappy($do_it) {
if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);