<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$resultLessons = $PDO->PDO->query("
    SELECT * FROM lessons
");

$lessons = array();

while ($lessonInfo = $resultLessons -> fetch()) {
    $lessons[] = $lessonInfo;
}

include 'grammar_printed.php';

