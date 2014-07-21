<?php

  require_once "_start.php";

   $webdriver->get("http://www.karaoke.ru");

   $webdriver->findElement(WebDriverBy::cssSelector('[class="_login"]'))->click();

   $webdriver->findElement(WebDriverBy::cssSelector('[href="/register/?back_url=http%3A%2F%2Fwww.karaoke.ru%2F"]'))->click();

   $webdriver->findElement(WebDriverBy::cssSelector('.fos_user_registration_register [type="submit"]'))->click();

   $popap = $webdriver->findElement(WebDriverBy::cssSelector('#pwnd'));


    if (strpos($popap->getText(), 'Следует правильно заполнить форму') === false)
         throw new Exception('Не корректное сообщение об ошибке');

   $webdriver->findElement(WebDriverBy::cssSelector('#pwnd ._ctrl button'))->click();

   $webdriver->findElement(WebDriverBy::cssSelector('[id="fos_user_registration_form_username"]'))->click();
   $webdriver->findElement(WebDriverBy::cssSelector('[id="fos_user_registration_form_username"'))->sendKeys('Ваняя');
   $webdriver->findElement(WebDriverBy::cssSelector('.fos_user_registration_register [type="submit"]'))->click();

    $popap = $webdriver->findElement(WebDriverBy::cssSelector('#pwnd'));


    if (strpos($popap->getText(), 'Следует правильно заполнить форму') === false)
          throw new Exception('Не корректное сообщение об ошибке');

   $webdriver->findElement(WebDriverBy::cssSelector('#pwnd ._ctrl button'))->click();

   $webdriver->findElement(WebDriverBy::cssSelector('[id="fos_user_registration_form_email"]'))->click();
   $webdriver->findElement(WebDriverBy::cssSelector('[id="fos_user_registration_form_email"]'))->sendKeys('aaa888');
   $webdriver->findElement(WebDriverBy::cssSelector('.fos_user_registration_register [type="submit"]'))->click();

   $popap = $webdriver->findElement(WebDriverBy::cssSelector('#pwnd'));


   if (strpos($popap->getText(), 'Следует правильно заполнить форму') === false)
     throw new Exception('Не корректное сообщение об ошибке');

   $webdriver->findElement(WebDriverBy::cssSelector('#pwnd ._ctrl button'))->click();

 // $webdriver->findElement(WebDriverBy::cssSelector('#pwnd ._ctrl button'))->click();

  //$webdriver->findElement(WebDriverBy::cssSelector('[id="fos_user_registration_form_username"]'))->click();




  $webdriver->close();

  echo 'Ok';