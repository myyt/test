<?php

require_once "_start.php";

    $webdriver->get("http://ui.masterkaraoke.com/TV/LG/0.2/");


  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50037"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50039"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50050"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50042"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50038"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50051"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="interesting-lg.ru.catalog.interesting.50047"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  $webdriver->close();

  echo 'Ok';