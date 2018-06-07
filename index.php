<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('sample');
$twig = new Twig_Environment($loader);

echo $twig->render('hello.twig', array(
    'name' => 'Time',
    'age' => 32
));