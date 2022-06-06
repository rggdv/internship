<?php

/*
 * Customer can order food
 * Customer can pay cashier
 * Customer can receive change
 * Customer can receive order
 *
 * Cashier can receive payment
 * Cashier can fulfil order
 * Cashier can return change
 *
 * Person class
 *  - Customer
 *  - Cashier
 */

$customer = new Customer();
$cashier = new Cashier();

$customer->sayHi();
$cashier->sayHi();
$customer->makeOrder($cashier, 'Big Mac');
$cashier->giveOrder();
/*
$cashier->fulfil($customer, 'Big Mac');
$customer->givePaymentTo($cashier, 100);
// hi
// hi
