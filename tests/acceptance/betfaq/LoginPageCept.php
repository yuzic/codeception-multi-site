<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('betfaq'));
$I->amOnPage('/');

$I->sendPOST('/profile/login/',[
    'email' => 'mandriva2008@mail.ru',
    'password' => '12345678'
]);
$I->see('Ваш аккаунт');

?>