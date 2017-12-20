<?php
require 'Hero.php';
require 'Combat.php';
require 'Viking.php';
require 'Chevalier.php';

$viking = new Viking();

$viking->setName("Boby");
$viking->setArme("Hache");

$chevalier = new Chevalier();

$chevalier->setName("Boby");
$chevalier->setArme("Hache");

$combat = new Combat();
$combat->addPlayers($chevalier);
$combat->addPlayers($viking);
$combat->begin();

// var_dump($viking);
// var_dump($chevalier);


