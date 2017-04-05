<?php

require('vendor/autoload.php');

use Ternsk\Customer;
use Ternsk\BankAccount;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);

$args = array();
$args['customers'] = array();


$andrew = new Customer();

$args['customers'][] = $andrew;

$checkingAccount = new BankAccount();

$andrew->addAccount($checkingAccount);

$checkingAccount->deposit(2000);

$whitney = new Customer();
$args['customers'][]= $whitney;

$checkingAccount2 = new BankAccount();
$checkingAccount2->deposit(3000);

$whitney->addAccount($checkingAccount2);

$taylor = new Customer();
$args['customers'][] = $taylor;

$checkingAccount3 = new BankAccount();

$taylor->addAccount($checkingAccount3);

$checkingAccount3->deposit(2001);


echo $twig->render('index.html.twig', array(
    'customers' => array($andrew, $whitney, $taylor),
    'name' => 'signedInValue'
));