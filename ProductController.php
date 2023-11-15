<?php

namespace Controller;

use Traits\ResponseFormatter;

class ProductController extends BaseController
{
    use ResponseFormatter;

    // Constructor
    public function __construct()
    {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "GET";
    }

    // Method to get all products
    public function getAllProduct()
    {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        // Do not echo here; return the formatted response
        return $this->responseFormatter(200, "Success", $response);
    }
}