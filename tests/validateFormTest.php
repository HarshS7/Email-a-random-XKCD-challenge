<?php

use PHPUnit\Framework\TestCase;

class validateFormTest extends TestCase
{
        public function testThatEnteredDataIsValid()
        {
                $emailValid = new  \App\validateForm;
                $email = "abcd@gmail.com";
                $this->assertTrue($emailValid->validateEmail($email));
        }
}
