<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

// Manual Checking Null
function getCountry(?User $user): ?string
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }
    return null;
}

// NullSafe Checking
function getCountrySafe(?User $user): ?string
{
    return $user?->address?->country;
}

echo getCountrySafe(null) . PHP_EOL;
