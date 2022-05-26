<?php
class User
{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $password;
    protected $is_signed = false;
    protected $credit_card;

    function __construct(String $firstname, String $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getName()
    {
        return $this->firstname;
    }

    public function signIn($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->is_signed = true;
    }

    public function setCreditCard($card_number, $key_number, $expiration_month, $expiration_year)
    {
        $this->credit_card = [
            'number' => $card_number,
            'key' => $key_number,
            'expiration month' => $expiration_month,
            'expiration year' => $expiration_year,
        ];
    }

    public function getIsSigned()
    {
        return $this->is_signed;
    }

    public function getCreditCard()
    {
        return $this->credit_card;
    }
}
