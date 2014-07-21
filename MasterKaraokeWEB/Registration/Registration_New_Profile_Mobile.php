<?php

require_once "_start.php";
$webdriver->get("http://mk.beta.karadev.ru/ru/");
// заходим на сайт.

$webdriver->findElement(WebDriverBy::cssSelector('[class="menu-login "]'))->click();

$webdriver->findElement(WebDriverBy::className('[class="comment"]'))->click();

//$href = $webdriver->findElement(WebDriverBy::cssSelector('[class="comment"] > a'))->getAttribute('href');
//$webdriver->get($href);

sleep(30);

$webdriver->findElement(WebDriverBy::cssSelector('[id="user"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="user"]'))->sendKeys('Ваня');
// input user name

$webdriver->findElement(WebDriverBy::cssSelector('[id="login"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="login"]'))->sendKeys('79253719307');

$webdriver->findElement(WebDriverBy::cssSelector('[id="pass"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="pass"]'))->sendKeys('qwerty123');

$webdriver->findElement(WebDriverBy::cssSelector('[id=pass-repeat]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="pass-repeat"]'))->sendKeys('qwerty123');

$webdriver->findElement(WebDriverBy::cssSelector('[id="register-button"]'))->click();


$webdriver->close();