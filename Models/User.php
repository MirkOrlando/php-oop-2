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

    public function getIsSigned()
    {
        return $this->is_signed;
    }

    public function setCreditCard(String $card_number, String $key_number, Int $expiration_month, Int $expiration_year)
    {
        $this->credit_card = [
            'number' => $card_number,
            'key' => $key_number,
            'month' => $expiration_month,
            'year' => $expiration_year,
        ];
    }

    public function getCreditCard()
    {
        return $this->credit_card;
    }
}
