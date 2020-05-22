<?php

/**
 * Class PersonAdapter
 * Adopt PersonInterface To be used by
 * Client class that require PersonAdapterInterface
 */
class PersonAdapter implements PersonAdapterInterface
{

    private $person;

    function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function getPersonTitle()
    {
        return $this->person->getFirstName() . ' ' . $this->person->getLastName();
    }
}