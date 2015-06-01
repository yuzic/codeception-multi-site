# Небольшая настройка для Codeception для тестирования нескольких сайтов сразу <h1>
Настройка и установка:

1. Клонируем репозиторий этот репозиторий, и выполняем командочку: wget http://codeception.com/codecept.phar, для linux все просто, если под Windows, то не забывайте страдать =)
Лучше поставьте Linux и можно забыть о несчатьях.

После, я надеюсь успешной установки библиотеки на windows, алилуя чтобы она была  успешной, мы можем запустить и проверить все тесты на работоспособность:

#### Как правильно писать тесты:
1. Задайте настройки для сайтов в конфигурационном файле /config.php (по умолчанию тестируеться  домен c ключом: stage ).
2. Проверьте в файле /tests/_bootstrap.php наличие строк:
```
require "_helper/Config.php";
   $config = new Config();
   $config->setServerKey('stage');
```
3. Все тесты храняться в директории /acceptance, каждая директория внутри неё соотвествует названию сайта (желательно использовать имя ключа из конфига).
4. Файлы внутри директори /acceptance/сайт должны заканчиваться на Cept.php например: indexPageCept.php
5. На каждый раздел сайта необходимо создать новый файл внутри /acceptance/название сайта.

#### Дополнительные фичи:
1. Запуск всех тестов командочка: codecept run acceptance
2. Запуск отдельного теста происходит через команду, указав путь до самого теста:
 codecept run tests/acceptance/allcafe/loginPageCept.php
3. Запуск тестов для одного сайта, осуществяенться через команду: 
 codecept run tests/acceptance/allcafe/


