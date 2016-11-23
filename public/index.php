<?php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$routes = [
	'/'         => 'index.php',
	'/contacts' => 'contacts.php',
];

include __DIR__ . '/../src/pages/' . ($routes[$url] ?? '404.php');
