<?php

  require_once "_start.php";

  file_get_contents('http://billing.karaoke.ru/api/deactivateCouponForTests');

  $webdriver->get("http://ui.masterkaraoke.com/TV/LG/0.2/");
  // заходим на сайт//
  $webdriver->findElement(WebDriverBy::cssSelector('[data-go_state="/profile"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-go_state="/profile.variants#1"]'))->click();


  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="payment_variants"] p'))->getText();
  // заходим в оплату//
  if ($text != 'Вы приобретаете подписку на 31 день за 199 рублей')
      throw new Exception('ошибка в блоке: '.$block);
  // проверяем наличие текста в попапе оплаты//
try {
  $webdriver->findElement(WebDriverBy::cssSelector('[data-go_state="/profile.variants.subscription_sms#1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->sendKeys(['9652858383']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="pay"]'))->click();
} catch (Exception $e) {
    throw new Exception('Проверка оплаты корректным номером телефона: ' . $e->getMessage());
}
  // проверка оплаты корректным номером телефона//

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="payment_back"]'))->click();

  // возвращаемся назад в попап ввода номера телефона//
try {
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->clear();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->sendKeys(['0000000000']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="pay"]'))->click();
} catch (Exception $e) {
    throw new Exception ('Проверка оплаты не корректным номером телефона: ' . $e->getMessage());
}
  //Проверка оплаты не корректным номером телефона//

  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '#modal p'))->getText();

 if ($text != 'Вы ввели неправильный номер телефона.')
    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="ok"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="back"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="back"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-go_state="/profile.variants#2"]'))->click();


  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="payment_variants"] p'))->getText();

if ($text != 'Вы приобретаете подписку на 1 день за 99 рублей')
    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="sms"]'))->click();


  sleep(10);

  //$webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->sendKeys(['9652858383']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="pay"]'))->click();


  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="payment_back"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->clear();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="field1"]'))->sendKeys(['0000000000']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="pay"]'))->click();

  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '#modal p'))->getText();

if ($text != 'Вы ввели неправильный номер телефона.')
    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="ok"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="back"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="card"]'))->click();

//  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="subscription_card"] p:last-child'))->getText();

//var_dump($text);
//if ($text != 'Другие способы оплаты доступны на сайте http://masterkaraoke.com/
//Информацию о состоянии подписки смотрите в разделе "Мой профиль". Приятного пения!
//Закрыть')
//    throw new Exception('ошибка в блоке: '.$block);

  //$webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="success"]'))->click();

 // $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="profile"]'))->getText();


//if ($text != 'У Вас нет активной подписки')
//    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="success"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->sendKeys(['000']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="activate"]'))->click();

  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '#modal p'))->getText();

if ($text != 'Вы ввели неправильный номер купона.')
    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="ok"]'))->click();


  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->clear();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->sendKeys(['33333333333']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="activate"]'))->click();


 // $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="subscription_success"]'))->getText();

//if ($text != 'Подписка успешно активирована.')
//    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="success"]'))->click();

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="coupon_field"]'))->sendKeys(['33333333333']);
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="activate"]'))->click();

  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '#modal p'))->getText();

if ($text != 'Вы ввели неправильный номер купона.')
    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="ok"]'))->click();
  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="back"]'))->click();

//  $text = $webdriver->findElement(WebDriverBy::cssSelector($block = '[data-navblock="profile"]'))->getText();

//if ($text != 'До окончания вашей подписки осталось: 24 часа')
//    throw new Exception('ошибка в блоке: '.$block);

  $webdriver->findElement(WebDriverBy::cssSelector('[data-focus_element="menu-interest"]'))->click();

  file_get_contents('http://billing.karaoke.ru/api/deactivateCouponForTests');

    $webdriver->close();

echo 'Ok';


