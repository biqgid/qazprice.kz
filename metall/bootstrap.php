<?php
define('ROOT2', __DIR__);
require ROOT2.'/users/db.php';
require ROOT2.'/php/mail.php';

$categories = R::findAll('product');

$armatura = R::findAll('armatura');
$armaturakz = R::findAll('armaturakz');
$katanka = R::findAll('katanka');
$krug = R::findAll('krug');
$kvadrat = R::findAll('kvadrat');
$listhk = R::findAll('listhk');
$listgk = R::findAll('listgk');
$listpvl = R::findAll('listpvl');
$ugolokkz = R::findAll('ugolokkz');
$ugolokru = R::findAll('ugolokru');
$shveller = R::findAll('shveller');
$shvellerrelieved = R::findAll('shvellerrelieved');
$balka = R::findAll('balka');
$trubaelectric = R::findAll('trubaelectric');
$trubagaz = R::findAll('trubagaz');
$polosa = R::findAll('polosa');
$electrodi = R::findAll('electrodi');
$brus = R::findAll('brus');
$trubaprofil = R::findAll('trubaprofil');
$rulongk = R::findAll('rulongk');
$provolka = R::findAll('provolka');
$provolkadrawn = R::findAll('provolkadrawn');
$setka = R::findAll('setka');
$profnastil = R::findAll('profnastil');

?>

