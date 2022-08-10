<?php

function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Invalid name");
    }
}

try {
    validate("n");
} catch (Exception) {
    echo "Invalid" . PHP_EOL;
}

// tidak butuh variable data exception
