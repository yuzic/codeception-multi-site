<?php
$I = new AcceptanceTester($scenario);
$I->amOnUrl(Config::get('azbukadiet'));

$I->amOnPage('/');

$I->see('Эффективные диеты для похудения');

$I->sendPOST('/soderzhanie-zhira-v-organizme#addcomment', [
    'solo-comment-subscribe' => 'solo-comment-subscribe',
    'postid' => '9149',
    'ref' => 'http%3A%2F%2Fwww.azbukadiet.ru%2Fsoderzhanie-zhira-v-organizme',
    'ref' => 'http%3A%2F%2Fwww.azbukadiet.ru%2Fsoderzhanie-zhira-v-organizme',
    'email' => 'dssd' . rand(100, 1000).'@mail.ru',
]);
$I->see('Вы были успешно подписаны на комментарии к статье');