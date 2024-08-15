<?php
require_once "animal.php";
require_once "frog.php";
require_once "Ape.php";


$sheeps = new Animal('Shaun');
echo 'Name : '.$sheeps->name."<br>" ;
echo 'Legs : '.$sheeps->legs."<br>" ;
echo 'Cold Blooded : '.$sheeps->cold_blooded."<br>" ;
echo "<br><br>" ;
$frog = new Frog('Buduk');
echo'Name : '.$frog->name."<br>" ;
echo 'Legs : '.$frog->legs."<br>" ;
echo 'Cold Blooded : '.$frog->cold_blooded."<br>" ;
echo 'Jump : '.$frog->jump();
echo "<br><br>" ;
$ape = new Ape('Kera Sakti');
echo 'Name : '.$ape->name."<br>" ;
echo 'Legs : '.$ape->legs."<br>" ;
echo 'Cold Blooded : '.$ape->cold_blooded."<br>" ;
echo 'Yell : '.$ape->yell();

?>