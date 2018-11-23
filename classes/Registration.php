<?php

//class Registration
class Registration extends User
{

    public function __construct(Array $data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->login = $data['login'];
        $this->email = $data['email'];
        $this->birthDate = $data['birthDate'];
        $this->password = $data['password'];
        $this->confirm_password = $data['confirm_password'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->registr_date = $data['registr_date'];
        $this->user_role = $data['user_role'];
    }

    public function passwordMatch()
    {
        return $this->password == $this->confirm_password;
    }

    public function validate()
    {
        return !empty($this->firstName) && !empty($this->lastName) && !empty($this->login) && !empty($this->email) && !empty($this->password) && !empty($this->confirm_password) && $this->passwordMatch();
    }

}

