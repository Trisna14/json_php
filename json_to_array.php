<?php

$contents = file_get_contents('file.json');

$result = json_decode($contents, true);

var_dump($result);

?>