<?php

function parseEnv($filePath)
{
    $env = [];
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos($line, '#') === 0) {
            continue;
        }

        list($key, $value) = explode('=', $line, 2) + [null, null];

        $key = trim($key);
        $value = trim($value);

        if ($key !== null && $value !== null) {
            $env[$key] = $value;
        }
    }

    return $env;
}

$envFilePath = dirname(__DIR__) . '\\.env';

$env = parseEnv($envFilePath);
