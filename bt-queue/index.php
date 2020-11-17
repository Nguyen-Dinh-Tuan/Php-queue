<?php
include_once ('Queue.php');
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
var_dump($queue->isEmpty());
$queue->enqueue(5);
$queue->enqueue(6);
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
echo $queue->dequeue().'<br/>';
var_dump($queue->isEmpty());