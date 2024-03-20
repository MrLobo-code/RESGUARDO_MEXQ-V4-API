<?php

namespace App\Utils;

use Firebase\JWT\JWT;

class token extends JWT
{
    public static $key = 'JWT_SECRET';
    public static $encryption = 'HS256';

    public function __construct($key, $encryption)
    {
        $this->key = $key;
        $this->encryption = $encryption;
    }
    public static function generate(string $userName, string $password)
    {
        $payload = [
            'iat' => time(),
            'exp' => time() + (24 * 60 * 60),
            'credentials' => [
                'employee_name' => $userName,
                'payroll_number' => $password
            ]
        ];

        $jwt_token = JWT::encode($payload, self::$key, self::$encryption);

        if (!$jwt_token) {
            return false;
        }

        return $jwt_token;
        
    }
}
