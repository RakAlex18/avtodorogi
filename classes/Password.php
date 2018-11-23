<?php
class Password
{
    const SALT_TEXT = 'Yes, Mr White! Yes, science!';
    private $password;
    private $hashedPassword;
    private $salt;
    public function __construct($password, $saltText = null)
    {
        $this->password = $password;
        $this->salt = md5( is_null($saltText) ? self::SALT_TEXT : $saltText );
        $this->hashedPassword = md5($this->salt . $password);
    }
    public function __toString()
    {
        return $this->hashedPassword;
    }
}
/**
 * Created by PhpStorm.
 * User: Alex_
 * Date: 23.11.2018
 * Time: 6:08
 */