<?php

require "./boostrap/Route.php";

function pr($data) {
    echo '<pre>';
      print_r($data);
    echo '</pre>';
}

$route = new Route();