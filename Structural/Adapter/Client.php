<?php

class Client
{

    private $personAdapter;

    public function __construct($firstName, $lastName)
    {
          $this->personAdapter = new PersonAdapter(
              new Person($firstName, $lastName)
          );
    }

    function getPersonSignLine()
    {
        return 'This is : ' . $this->personAdapter->getPersonTitle();
    }
}