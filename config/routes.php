<?php
$router->map('GET', '/', 'acceuil');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/nouveau', 'nouveau', 'nouveau');
$router->map('GET', '/biens/[*:slug]-[i:id]','biens/comptable', 'comptable');
?>