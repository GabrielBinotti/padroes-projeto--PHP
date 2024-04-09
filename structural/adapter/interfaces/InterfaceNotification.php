<?php

namespace structural\adapter\interfaces;

interface InterfaceNotification
{
    public function send(string $title, string $message) : void;
}