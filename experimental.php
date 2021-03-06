<?php

//main function that calls other function to order the different pizzas
function orderPizza($pizzaType, $firstName)
{
    $price = calculateCosts($pizzaType);
    $address = getAddress($firstName);
    writeOrders($pizzaType,$firstName,$price,$address);
}

//function to associate each person with an address
function getAddress($firstName)
{
    $address = '';
    switch ($firstName) {
        case 'koen':
            $address="Yacht in Antwerp";
            break;
        case 'manuele':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
    }
    return $address;
}

//Function to associate each pizza chosen with a price
function calculateCosts($pizzaChosen)
{
    $cost = '';
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
    }    
}

//Function to print the informations on screen
function writeOrders($pizzaType,$firstName,$price,$address)
{
    echo 'Creating new order... <br>';
    echo ' A '. $pizzaType. ' pizza should be sent to ' . $firstName .  '<br>The address: '. $address.'</br>';
    echo 'The bill is €'.$price.'.<br>';
    echo 'Order finished.<br><br>';
}

orderPizza('calzone', 'koen');
orderPizza('marguerita', 'manuele');
orderPizza('golden', 'students');
