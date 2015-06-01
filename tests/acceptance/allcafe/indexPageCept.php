<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('allcafe'));
$I->amOnSubdomain('spb');

$I->amOnPage('/');
$I->see('Новости ресторанов');
$I->seeResponseCodeIs(200);

