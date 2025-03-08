<?php
class AuthModel {
    private $validUser = "usuario1";
    private $validPass = "pass123";

    public function validateUser($user, $pass) {
        return $user === $this->validUser && $pass === $this->validPass;
    }
}
?>