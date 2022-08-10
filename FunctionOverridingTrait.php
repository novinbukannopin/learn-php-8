<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    public function sampleFunction(string $name): string
//  tidak sembarangan bisa merubah paramater dari abstract function
    {
        // TODO: Implement sampleFunction() method.
    }
}
