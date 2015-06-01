<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('domsnov'));

$I->amOnPage('/goroskop/pisces');
$I->see('Гороскоп На сегодня  для других знаков');
$I->seeResponseCodeIs(200);