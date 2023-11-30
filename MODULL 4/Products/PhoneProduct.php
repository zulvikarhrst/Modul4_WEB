<?php

namespace Products; 

use Traits\LoggerTrait;

class PhoneProduct extends Product
{
    use LoggerTrait;

    protected $brand; // properti

    public function __construct($name, $price, $brand) // magic method: __contruct() diakses pada saat pembuatan object.
    {
        parent::__construct($name, $price);
        $this->brand = $brand;
    }

    public function displayInfo()
    {
        return [
            "type" => "Phone",
            "brand" => $this->brand,
            "name" => $this->name,
            "price" => $this->price,
        ];
    }

    public function __toString() // magic method: __toString() diakses jika kita memperlakukan class sebagai string.
    {
        return json_encode($this->displayInfo(), JSON_PRETTY_PRINT);
    }
}
