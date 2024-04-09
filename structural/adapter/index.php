<?php

use structural\adapter\adaptee\SlackApiAdaptee;
use structural\adapter\classes\EmailNotification;
use structural\adapter\classes\SlackNotificationAdapter;
use structural\adapter\interfaces\InterfaceNotification;

require_once "../../vendor/autoload.php";

function clientCode(InterfaceNotification $notification)
{
    echo $notification->send("title", "message");
}


$notif = new EmailNotification("gabriel@email.com");
clientCode($notif);



/**
 * Usando a biblioteca terceiro, porem muda toda a forma de enviar mensagem
 * Então vamos criar um adapter
 */
$slackApi = new SlackApiAdaptee("user", "apiKey");
$slackApi->sendMessage("chatid", "mensagem");


$notif = new SlackNotificationAdapter($slackApi, "chatId");

clientCode($notif);