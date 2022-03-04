<?php
require_once __DIR__ . '/Card.php';
class Customer
{
    public $first_name;
    public $last_name;
    public $age;
    public $card;
    public $registered;
    public function __construct($first_name, $last_name, $age, $card, $registered = null)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
        $this->setCard($card);
        $this->setRegistered($registered);
    }
    // FIRST NAME
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    // LAST NAME
    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    // AGE
    public function getAge()
    {
        return $this->first_name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    // CARD 
    public function getCard()
    {
        return $this->card;
    }
    public function SetCard($card)
    {
        $this->card = $card;
    }

    // REGISTERED
    public function setRegistered($registered)
    {
        if (!$registered) return false;
        return true;
    }
}

// $person = new Customer('Pippo', 'Franco', '54', '1000',);

// var_dump($person);
