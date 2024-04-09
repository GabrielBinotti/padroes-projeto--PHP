<?php
namespace structural\adapter\classes;

use structural\adapter\interfaces\InterfaceNotification;

class EmailNotification implements InterfaceNotification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message) : void
    {
        mail($this->adminEmail,$title, $message);
        echo "email eviado. Usando EmailNotification";
    }
}