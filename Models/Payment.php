<?php

class Payment
{
    public function isCreditCardExpired(User $user)
    {
        $credit_card_month = $user->getCreditCard()['month'];
        $credit_card_year = $user->getCreditCard()['year'];
        $current_year = intval(date('Y'));
        $current_month = intval(date('m'));
        if ($credit_card_year <= $current_year) {
            if ($credit_card_month <= $current_month) {
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
