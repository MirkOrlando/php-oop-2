<?php

class Payment
{

    protected $chart;

    public function isCreditCardExpired(User $user)
    {
        $credit_card = $user->credit_card;
        var_dump($credit_card['year']);
        var_dump($credit_card['month']);
        var_dump($credit_card['year'] <= intval(date('Y')));
        var_dump($credit_card['month'] <= intval(date('m')));

        if ($credit_card['year'] <= intval(date('Y'))) {
            if ($credit_card['month'] <= intval(date('m'))) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function calcDiscount(AnimalProduct $product, User $user)
    {
        $is_signed = $user->getIsSigned();
        if ($is_signed) {
            $discount = $product->price * $product->discount / 100;
            $product->price = number_format($product->price - $discount, 2, ',', '.');
        }
    }

    public function checkout(User $user)
    {
        if (!$this->isCreditCardExpired($user)) {
            return 'la carta è valida';
        } else {
            return 'la carta non è valida';
        }
    }
}
