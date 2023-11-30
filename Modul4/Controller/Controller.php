<?php

namespace Controller;

class Controller
{
    // VARIABLE ATRIBUT
    var $controllerName;
    var $controllerMethod;

    // METHOD UNTUK MENGAMBIL SEMUA ATURIBUT
    public function getControllerAttribute()

    {
       return[
        "ControllerName" => $this ->controllerName,
        "Method" => $this -> controllerMethod
       ];
    }
}
