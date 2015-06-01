<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('allcafe'));


$I->sendPOST('/community/in', [
    'email' => 'itcoder',
    'password' => '12345678',
]);
$I->see('выход');
$I->see('itcoder');
$I->see('Мой AllCafe');

$I->seeElement('div.info');
$I->dontSeeElement('.error');
$I->seeResponseCodeIs(200);

