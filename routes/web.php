<?php

require __DIR__ . '/../vendor/autoload.php';

app()->get('/', function () {
  response()->json(['message' => 'Hello World!']);
});

app()->get('/catalog', function() {
  echo '<h1>This is catalog</h1>';
});

app()->post('/ip', function() {
  $ip_address = file_get_contents('http://ifconfig.me/ip');
  echo "Your external IP: $ip_address";
});

app()->get('/ip', function() {
  $ip_address = file_get_contents('http://ifconfig.me/ip');
  echo "Your external IP: $ip_address";
});


app()->run();
