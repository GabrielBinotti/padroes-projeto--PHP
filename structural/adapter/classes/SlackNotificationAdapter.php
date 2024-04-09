<?php

namespace structural\adapter\classes;

use structural\adapter\adaptee\SlackApiAdaptee;
use structural\adapter\interfaces\InterfaceNotification;

class SlackNotificationAdapter implements InterfaceNotification
{
    private $slack;
    private $chatId;

    public function __construct(SlackApiAdaptee $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }


    public function send(string $title, string $message): void
    {
        $slackMessage = $title . ' ' . $message;
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}