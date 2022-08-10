<?php

$value = "D";
$result = "";
$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin anda salah jurusan",
    default => "Nilai apa ituuu!!"
};

echo $result . PHP_EOL;


$value = 80;
$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mrs. Novin";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Madam",
    default => "Hello"
};

echo $result . PHP_EOL;