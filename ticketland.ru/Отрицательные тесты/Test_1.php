<?php

require_once "_start.php";

$webdriver->get("http://www.ticketland.ru/");
// заходим на сайт
$webdriver->findElement(WebDriverBy::cssSelector('[href="/login/"]'))->click();
// клик на баттон "Вход"
$webdriver->findElement(WebDriverBy::cssSelector('[class="reg-social"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[class="reg-social"]'))->sendKeys('russ.kostua83@yandex.ru');
// вводим логин
$webdriver->findElement(WebDriverBy::cssSelector('[class="kineticjs-content"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[class="kineticjs-content"]'))->sendKeys('qwerty123');










//$webdriver->close();

echo 'Ok';