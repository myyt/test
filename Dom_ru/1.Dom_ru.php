<?php

require_once "_start.php";
  $webdriver->get("http://ya-web.jetstyle.ru/domru/index.html?test_portal=1&tab=7");

  $webdriver->findElement(WebDriverBy::cssSelector('[data-url="domru_karaoke/index.html#Catalogue"]'))->click();

  $webdriver->navigate()->to("http://ya-web.jetstyle.ru/domru/index.html?test_portal=1&tab=7");

  $webdriver->findElement(WebDriverBy::cssSelector('[data-url="domru_karaoke/index.html#Free"]'))->click();

  $count = sizeof($webdriver->findElements(WebDriverBy::cssSelector('[data-bind="event:{click:m_karaoke.songClick,focus:m_karaoke.focusedSong}"]')));
  if ($count < 5){
      throw new Exception('Число бесплатных песен меньше 5');
  }

  $webdriver->navigate()->to("http://ya-web.jetstyle.ru/domru/index.html?test_portal=1&tab=7");

  sleep(10);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-url="domru_karaoke/index.html#SubscribeChoose"]'))->click();

  sleep(10);

  $webdriver->findElement(WebDriverBy::cssSelector('[onclick="m_karaoke.goSubscribe(m_karaoke.payments()[0].id);"]'))->click();

  //$webdriver->findElement(WebDriverBy::cssSelector('[class="SubscribeWritePhone__field sel navigatable"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[class="SubscribeWritePhone__field sel navigatable"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-bind="value:api.subscribePhone"]'))->sendKeys(['9652858383']);
  $webdriver->getKeyboard()->pressKey(WebDriverKeys::ENTER);
  $webdriver->findElement(WebDriverBy::cssSelector('[class="SubscribeWritePhone__field sel navigatable"]'))->click();


  sleep(100);

  $webdriver->close();

  echo 'Ok';