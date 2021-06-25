<?php 

namespace LuBbs\HelloWorld;

class SayHello
{
    /**
     * Dummy method to say hello
     * 
     * @param string $from If you want this dummy method to say from wich
     * context it was called
     * @return string Greetings
     */
    public static function hello(string $from = null): string
    {
        $baseResponse = 'Hello World v2.0.0!';
        
        if ($from) {
            $response = "$baseResponse From '$from'!";
        } else {
            $response = $baseResponse;
        }

        return $response;
    }
}
