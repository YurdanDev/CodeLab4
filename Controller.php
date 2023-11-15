<?php

namespace Controller;

class BaseController
{
    // Properties
    protected $controllerName;
    protected $controllerMethod;

    // Method to get controller attributes
    public function getControllerAttribute()
    {
        return [
            'controllerName' => $this->controllerName,
            'controllerMethod' => $this->controllerMethod,
        ];
    }
}
