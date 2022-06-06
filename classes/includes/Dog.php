<?php

class Dog extends Animal implements Talkative
{
    public function bark()
    {
        echo 'I can bark';
    }

    public function talk()
    {
        echo 'Bla bla blah';
    }
}
