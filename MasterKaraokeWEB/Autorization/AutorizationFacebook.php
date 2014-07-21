<?php

require_once "_start.php";
$webdriver->get("http://mk.beta.karadev.ru/ru/");
// заходим на сайт.

$webdriver->findElement(WebDriverBy::cssSelector('[class="menu-login "]'))->click();
// переходим в меню авторизации/регистарции.

$webdriver->findElement(WebDriverBy::cssSelector('[id="auth-AuthFacebook"]'))->click();
// авторизация через Facebook

$webdriver->findElement(WebDriverBy::cssSelector('[id="email"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="email"]'))->sendKeys('test_is_test@bk.ru');
// input login

$webdriver->findElement(WebDriverBy::cssSelector('[id="pass"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="pass"]'))->sendKeys('qwerty123!@#');
// input password

$webdriver->findElement(WebDriverBy::cssSelector('[id="u_0_1"]'))->click();

$webdriver->close();