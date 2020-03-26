<?php

namespace App\Models;

use GW01\Model;

class User extends Model
{
    public function checkRegister(string $email, string $password) : bool
    {
        $sql = "SELECT count(*) as verif FROM users 
                WHERE email= '" . $email . "'" . " and password = '" . $password . "'";
        $result = $this->getPdo()->query($sql);
        $row = (int)$result->fetch()["verif"];
        if ($row == 1){
            return true;
        }
        return false;
    }
}