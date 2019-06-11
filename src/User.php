<?php
namespace TDD;

class User
{
    public $first_name, $surname;

    public function getFullName()
    {
        return $this->first_name.' '.$this->surname;
    }
}