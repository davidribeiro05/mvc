<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC</title>
</head>
<body>
<?php

require __DIR__ . '/vendor/autoload.php';

$url = new Core\ConfigController();

$url->load();
define('URL', 'http://localhost/mvc/');
?>
<a href="<?= URL . 'world/'?>">Teste</a>


</body>
</html>
