<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@cod3r.com.br']);
// echo $user->getSelect();

// echo User::getSelect(['id'=> 1], 'name, email');
// echo '<br>';
// echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);

print_r(User::get(['id' => 1], 'id, name, email'));
echo '<br>';
print_r(User::get(['name' => 'Chaves'], 'id, name, email'));
echo '<br>';
print_r(User::get([], 'name'));

echo '<br>';
echo '<br>';

foreach(User::get([], 'name') as $user){
    echo $user->name;
    echo '<br>';
};