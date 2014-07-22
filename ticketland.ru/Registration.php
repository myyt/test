<?php

require_once "_start.php";

$webdriver->get("http://www.ticketland.ru/");
// заходим на сайт
$webdriver->findElement(WebDriverBy::cssSelector('[class="person_menu hideInPrinter"]'))->click();
// клик на регистрацию
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[email]"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[email]"]'))->sendKeys('russ.kostua83@yandex.ru');
//вводим корректный емайл
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[password]"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[password]"]'))->sendKeys('qwerty123');
//вводим корректный пароль
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[password2]"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[password2]"]'))->sendKeys('qwerty123');
// вводим повторно корректный пароль
$webdriver->findElement(WebDriverBy::cssSelector('[name="registration[agree]"]'))->click();
//клик на чекбокс
$webdriver->findElement(WebDriverBy::cssSelector('[class="registration-button"]'))->click();
// клик на баттон регистрации
$webdriver->findElement(WebDriverBy::cssSelector('[name="pin"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[name="pin"]'))->sendKeys('9937376 ');
// вводим пин-код подтверждения регистрации
$webdriver->findElement(WebDriverBy::cssSelector('[class="registration-button"]'))->click();
// регистрируемся на сайте
$webdriver->findElement(WebDriverBy::cssSelector('[id="form-gender-m"]'))->click();
//
$webdriver->findElement(WebDriverBy::cssSelector('[name="form[family]"]'))->sendKeys('Ivanov');
// вводим фамилию
$webdriver->findElement(WebDriverBy::cssSelector('[name="form[name]"]'))->sendKeys('Ivan');
// вводим имя
$webdriver->findElement(WebDriverBy::cssSelector('[name="form[patronymic]"]'))->sendKeys('Ivanovich');
// вводим отчество
$webdriver->findElement(WebDriverBy::cssSelector('[class="registration-button"]'))->click();
// клик на баттон регистрации


$webdriver->close();

echo 'Ok';

