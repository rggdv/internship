<?php

class Customer extends Person
{
    public function makeOrder(Cashier $cashier, string $order)
    {
        $cashier->receive($this, $order);

        echo 'Customer make order to cashier with ' . $order;
    }
}
