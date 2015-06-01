<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('regforum'));
// утсановка теcтируемого url
$I->amOnPage('/', []);
// смотрим на текст на странице
$I->see('Добро пожаловать на Регфорум');
$I->see('Зарегистрироваться на Регфоруме');
$I->see('Форум');
$I->see('Публикации');
$I->see('Лучшие');
$I->seeResponseCodeIs(200);