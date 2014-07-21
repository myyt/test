<?php

require_once "_start.php";
$webdriver->get("http://mk.beta.karadev.ru/ru/");
// заходим на сайт.

$webdriver->findElement(WebDriverBy::cssSelector('[class="menu-login "]'))->click();
// переходим в меню авторизации/регистарции.

$webdriver->findElement(WebDriverBy::cssSelector('[id="auth-AuthGooglePlus"]'))->click();
// переходим на авторизацию через Google

$webdriver->findElement(WebDriverBy::cssSelector('[id="Email"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="Email"]'))->sendKeys(['vanyavanya1988@gmail.com']);
// input login

$webdriver->findElement(WebDriverBy::cssSelector('[id="Passwd"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="Passwd"]'))->sendKeys(['qwerty123!@#']);
// input password

$webdriver->findElement(WebDriverBy::cssSelector('[id="signIn"]'))->click();
// click on autorization

$webdriver->findElement(WebDriverBy::cssSelector('[id="submit_approve_access"]'))->click();
// даём доступ приложению MasterKaraoke к аккаунту Google+

$webdriver->findElement(WebDriverBy::cssSelector('[id="menu-payments-link"]'))->click();
// click Payments

$webdriver->findElement(WebDriverBy::cssSelector('[id="menu-view-link"]'))->click();
// click on profile

$text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[id="profile-info"] p'))->getText();

if ($text != 'Имя в системе: ')
    throw new Exception('ошибка в блоке: '.$block);

$webdriver->close();