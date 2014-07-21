<?php


require_once "_start.php";
$webdriver->get("http://mk.beta.karadev.ru/ru/");
// заходим на сайт.

$webdriver->findElement(WebDriverBy::cssSelector('[class="menu-login "]'))->click();
// переходим в меню авторизации/регистарции.

$webdriver->findElement(WebDriverBy::cssSelector('[id="auth-AuthVkontakte"]'))->click();
// переходим на авторизацию через VK

$webdriver->findElement(WebDriverBy::cssSelector('[name="email"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="email"]'))->sendKeys(['79253719307']);
// input login

$webdriver->findElement(WebDriverBy::cssSelector('[name="pass"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="pass"]'))->sendKeys(['russkii12!@']);
// input password

$webdriver->findElement(WebDriverBy::cssSelector('[id="install_allow"]'))->click();
// click on autorization

$webdriver->close();