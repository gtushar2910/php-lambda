<?php
return function ($event) {
    $name = $event['queryStringParameters']['script'] ?? 'default';
    include __DIR__ . "/scripts/{$name}.php";
};