<?php
var_dump(new DateTime('NOW'));
var_dump(mysqli_connect($_ENV["DB_HOST"], 'root', 'root'));
$memcacheD = new Memcached;
$memcacheD->addServer($_ENV['MEMCACHE_HOST'], $_ENV['MEMCACHE_PORT']);
var_dump($memcacheD->set('aaaa', 'bdddbb'));
var_dump($memcacheD->get('aaaa'));

phpinfo();