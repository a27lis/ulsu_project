<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$PDO = PdoConnect::getInstance();

$resultTopics = $PDO->PDO->query("
    SELECT * FROM topics
");

$topics = array();

while ($topicInfo = $resultTopics -> fetch()) {
    $topics[] = $topicInfo;
}

include 'topics_printed.php';

