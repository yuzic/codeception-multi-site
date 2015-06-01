<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('domsnov'));

$I->amOnPage('/');
$I->see('Сонник онлайн: толкование значения снов бесплатно');
$I->seeResponseCodeIs(200);