<?php


function orderPizza($pizzaType, $firstName) {

//$type = $pizzaType;
    echo 'Creating new order... <br>';
    $price = calculateCosts($pizzaType);
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
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

/*function total_price($price) {
        return $price;
}*/

/*function test($pizzaChosen) {
    echo "Test: type is {$pizzaChosen}. <br>";
}*/

function calculateCosts($pizzaChosen)
{
    $cost = 'unknown';
    switch ($pizzaChosen) {
        case 'marguerita':
            $cost = 5;
            return $cost; 
            break;
        case 'golden':
            $cost = 100;
            return $cost; 
            break;
        case 'calzone':
            $cost = 10;
            return $cost; 
            break;
        /*case 'hawai' :
            throw new Exception('Computer says no');
            break; */

    }    
}
  

//function ordr_piz_all()
//{
//$test= 0;
orderPizza('calzone', 'koen');
orderPizza('marguerita', 'manuele');

orderPizza('golden', 'students');
//}





//function make_Allhappy($do_it) {
//if ($do_it) {
  //      ordr_piz_all();
  //  } else {
        // Should not do anything when false
  //  }
//}

//make_Allhappy(true);