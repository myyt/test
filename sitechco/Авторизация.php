<?php

require_once "_start.php";

$webdriver->get("http://sitechco.ru/");

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->click();

//$webdriver->close();