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
$webdriver->findElement(WebDriverBy::cssSelector('[id="user"]'))->sendKeys('ор');
// input user name

$webdriver->findElement(WebDriverBy::cssSelector('[id="register-button"]'))->click();


$webdriver->close();