<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "1";
$example->data = 1;
$example->data = true;
$example->data = ["1"];

function sampleFunction(string|array $data): void
{

//  bisa return string|array
    if (is_array($data)) {
        echo "Array" . PHP_EOL;
//      return ["array"]
    } elseif (is_string($data)) {
        echo "String" . PHP_EOL;
//      return "string"

    }
}

sampleFunction("Novin");
sampleFunction(["novin", "ardian"]);