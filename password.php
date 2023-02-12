<?php

class Password {
    private $password;

    public function __construct($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public static function generate($length, $complexity) {
        $chars = '';
        
        if ($complexity) {
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;':,.<>/?\\";
        } else {
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        }
        
        return substr(str_shuffle($chars), 0, $length);
    }

    public function check($password2) {
        return $this->password === $password2;
    }
}
