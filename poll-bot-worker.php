<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '135932930:AAFiFWjCvvdN0BwOYvaXt5oStodBFwEqc6I');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
