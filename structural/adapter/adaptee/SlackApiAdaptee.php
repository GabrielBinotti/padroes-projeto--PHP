<?php

namespace structural\adapter\adaptee;

class SlackApiAdaptee
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "conta: '{$this->login}'.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Enviando mensagem via slack\n";
    }
}
