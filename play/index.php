<?php
    require 'LivingPerson.php';
    require 'SkillOfPerson.php';

    $hero = new SkillOfPerson();
    $hero->setName('Hero 1');
    $hero->setType('Knight');
    $hero->setArms('Sword');
    var_dump($hero->displayFullPerson());
?>