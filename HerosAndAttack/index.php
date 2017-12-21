<?php
require 'Hero.php';
require 'Viking.php';
require 'Chevalier.php';
require 'Combat.php';
require 'Arms.php';

$combat = new Combat();
$viking = new Viking();

//object Arms a paramater with name and pa
$arms = new Arms();

$viking->setName("Boby");
// not string but objet Arms
$viking->setArme("Hache");
$vikingArm = $viking->getArme();
$arms->addArms($vikingArm);
$combat->addJoueurs($viking);

$chevalier = new Chevalier();

$chevalier->setName("Jack");
$chevalier->setArme("epee");
$chevalierArm = $chevalier->getArme();

$arms->addArms($chevalierArm);
$combat->addJoueurs($chevalier);

$combat->debut();