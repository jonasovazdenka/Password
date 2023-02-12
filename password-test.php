<?php
include "password.php";

class PasswordTest
{
    public function testGenerate()
    {
        $password = new Password("");
        $generatedPassword = $password->generate(10, "strong");

        if (strlen($generatedPassword) != 10) {
            echo "Test generate() failed: wrong password lenght\n";
        } else {
            echo "Test generate() done\n";
            echo "Generated Password: " . $generatedPassword . "\n";
        }
    }

    public function testCheck()
    {
        $password = new Password("password");
        $randomPassword = $password->generate();

        if (!$password->check("password")) {
            echo "Test check() failed: Bad password verification\n";
        } elseif ($password->check($randomPassword)) {
            echo "Test check() failed: Bad password verification \n";
        } else {
            echo "Test check() done\n";
            echo "Passwords do not match.\n";
            echo "Password compared: " . $randomPassword . "\n";
        }
    }
}

$passwordTest = new PasswordTest();
$passwordTest->testGenerate();
$passwordTest->testCheck();
