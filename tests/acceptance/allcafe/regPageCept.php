<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('allcafe'));

$I->sendPOST('/community/reg/', [
    'login' => 'zhenia@dws2323.ru',
    'password' => '12345678',
    'password2' => '12345678',
    'email' => 'zhenia.abramovich@mail.ru',
    'city' => 'Санкт-Петербург',
    'code' => 123456,
    'submit'    => 'Зарегистрироваться'
]);

$I->see('неправильный код подтверждени');
$I->seeResponseCodeIs(200);
