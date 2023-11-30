<?php

namespace Products; 

use Traits\LoggerTrait;

class LaptopProduct extends Product
{
    use LoggerTrait;

    protected $processor; // properti

    public function __construct($name, $price, $processor) // magic method: __contruct() diakses pada saat pembuatan object.
    {
        parent::__construct($name, $price);
        $this->processor = $processor;
    }

    public function displayInfo()
    {
        return [
            "type" => "Laptop",
            "name" => $this->name,
            "processor" => $this->processor,
            "price" => $this->price,
        ];
    }

    public function __toString() // magic method: __toString() diakses jika kita memperlakukan class sebagai string.
    {
        return json_encode($this->displayInfo(), JSON_PRETTY_PRINT);
    }
}
