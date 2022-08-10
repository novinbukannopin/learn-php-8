<?php

function testMixed(mixed $date): mixed
{
    if (is_array($date)) {
        return [];
    } elseif (is_string($date)) {
        return "";
    } elseif (is_int($date)) {
        return 1;
    } else {
        return null;
    }
}
