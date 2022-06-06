<?php

class Cashier extends Person
{
    public string $order;
    public Customer $customer;

    public function receive(Customer $customer, string $order)
    {
        $this->customer = $customer;
        $this->order = $order;
    }

    public function giveOrder()
    {
        echo 'give order to customer . ' . $this->order;

        return $this->order;
    }
}
