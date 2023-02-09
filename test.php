<?php
include 'phar://Message.php.phar/Message.php';

if (!ini_get('phar.require_hash')) {
    echo "WARNING: phar.require_hash is Off!\n";
}

echo \SignedNS\Message::say(), "\n";
