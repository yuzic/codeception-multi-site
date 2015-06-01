<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('prisnilos'));

$I->amOnPage('/privoroti');

$I->see('Как сделать приворот');
$I->seeResponseCodeIs(200);