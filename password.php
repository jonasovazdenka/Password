<?php

class Password
{
    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function generate($length = 8, $complexity = "normal")
    {
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $specialChars = "!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";

        $characters = $lowercase . $uppercase . $numbers;
        if ($complexity == "strong") {
            $characters .= $specialChars;
        }

        $generatedPassword = "";
        for ($i = 0; $i < $length; $i++) {
            $generatedPassword .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $generatedPassword;
    }

    public function check($password)
    {
        return $this->password === $password;
    }
}
