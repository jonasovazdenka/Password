<?php

class PasswordTest {
    public function testGenerate() {
        $password = Password::generate(10, true);
        if (strlen($password) != 10) {
            throw new Exception("Password length is incorrect");
        }
    }

    public function testCheck() {
        $password = new Password('password123');
        $password2 = 'password123';
        if ($password->check($password2) !== true) {
            throw new Exception("Passwords do not match");
        }
    }
}
