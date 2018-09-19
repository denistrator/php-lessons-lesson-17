<?php

use Symfony\Component\Yaml\Yaml;

require 'vendor/autoload.php';

//$conn = new PDO('mysql:host=localhost', 'root');
//$result = $conn->query('show databases;')->fetchAll(PDO::FETCH_ASSOC);

//dump($result);

$config = Yaml::parseFile('cofig.yml');

dump($config);