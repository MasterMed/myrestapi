<?php

require_once __DIR__ . '/vendor/autoload.php';

use Mastermed\Coursework\User;
use Mastermed\Coursework\Article;
use Mastermed\Coursework\Comment;

$className = null;
if (isset($argv[1])) {
    $className = $argv[1];
}

if (is_null($className)) {
    echo 'It works!';
    exit();
}

