<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('allcafe'));

$I->amOnSubdomain('spb');

$I->amOnPage('/news');

$I->see('Новости и открытия');
$I->seeResponseCodeIs(200);
