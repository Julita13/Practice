<?php

function dump(...$values): void
{
    foreach ($values as $value) {
        echo "<pre>" . print_r($value, true) . "</pre>";
    }
}

function dd(...$value): void
{
    dump(...$value);
    die();
}
