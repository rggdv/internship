<?php

class Cart
{
    protected array $items = [];

    public function add(string $itemName) : self
    {
        $this->items[] = $itemName;

        return $this;
    }

    public function remove(string $itemName) : self
    {
        $itemIndexToDelete = array_search($itemName, $this->items); // 0

        unset(
            $this->items[$itemIndexToDelete]
        );

        return $this;
    }

    public function all() : array
    {
        return $this->items;
    }
}

$cart = new Cart();
print_r(
    $cart
        ->add('eggs') // 0
        ->add('milk') // 1
        ->remove('eggs') // delete 0 element
        ->all()
); // [milk]
