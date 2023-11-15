<?php

namespace Traits;

// Define a trait named ResponseFormatter
trait ResponseFormatter
{
    // Define a method named responseFormatter with three parameters: $code, $message, and $data (with a default value of null)
    public function responseFormatter($code, $message, $data = null)
    {
        // Return a JSON-encoded array with keys 'code', 'message', and 'data'
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ], JSON_PRETTY_PRINT);
    }
}