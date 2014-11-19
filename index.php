<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 17/11/2014
 * Time: 16:50
 */

require __DIR__.'/class/Task.php';

$task = new();

$date = new DateTime();
$date->setTimezone(new DateTimeZone('Europe/Paris'));
£task
        ->setId(1)
        ->setName('Task 1')
        ->setContent('Buy some bread.')
        ->setDate($date)
        ->setStatus(Task::STATUS_PENDING);