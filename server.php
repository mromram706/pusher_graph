<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "xxxxxxxxxxxxxxxxxxxx'", // Replace with 'key' from dashboard
    "yyyyyyyyyyyyyyyyyyyy", // Replace with 'secret' from dashboard
    "zzzzzzz", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 1; $i < 10; $i++) {
    $pusher->trigger('segment', 'new-segment',
        array(rand(100,200), -rand(30, 300), rand(30, 130), rand(80, 120), -rand(10, 200), rand(100, 200), rand(77, 177), -rand(50, 150), rand(60, 160), -rand(10, 80)
        )
    );
    sleep(1);
}
