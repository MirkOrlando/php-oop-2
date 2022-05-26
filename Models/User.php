<?php
class User
{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $password;
    protected $is_logged;
    protected $credit_card;

    function __construct(String $firstname, String $lastname, String $email, String $password, bool $is_logged, array $credit_card)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->is_logged = $is_logged;
        $this->credit_card = $credit_card;
    }
}
