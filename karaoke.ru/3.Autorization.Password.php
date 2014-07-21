<?php

require_once "_start.php";

$webdriver->get("http://www.karaoke.ru");


$webdriver->findElement(WebDriverBy::cssSelector('[name="q"]'))->sendKeys(['Фриске']);
$webdriver->getKeyboard()->pressKey(WebDriverKeys::ENTER);

$webdriver->findElement(WebDriverBy::cssSelector('[class="_login"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_password"]'))->sendKeys('test1');
$webdriver->findElement(WebDriverBy::cssSelector('[name="_remember_me"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('.submit [type="submit"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('[id="hello"]'));
if (strpos($block->getText(), 'Приветствуем, test12') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[href="/logout/"]'))->click();

$webdriver->findElement(WebDriverBy::cssSelector('[class="_login"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="frm-login_password"]'))->sendKeys('     ');
$webdriver->findElement(WebDriverBy::cssSelector('[name="_remember_me"]'))->click();
$webdriver->findElement(WebDriverBy::cssSelector('.submit [type="submit"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys(' test1 ');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('TEST1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('TeSt1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('(;/.');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('321548465');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('321548465654651654651634654654165436521321321321365465479876954361321365416546316546451435154654635416546546546546514635465416546354654654968798461532156');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('~`!@#$%^&*()_+<>?:"{}[];’');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('Теst1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test1');
$webdriver->getKeyboard()->pressKey(WebDriverKeys::BACKSPACE);
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('test');
$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('Prüfung1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('éprouver1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('éàòù ÀàÁáÈèÉéÌìÍíÒòÓóÙùÚú1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('中国的1');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('日本の');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('한국의');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('`~@#$%^&*()_+|-=\{}[]:”;’<>?,./®©£¥¢¦§«»€');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('javascript:alert(\'1\');');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('& < > \'');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('&quot; &apos; &amp; &lt; &gt');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');

$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->clear();
$webdriver->findElement(WebDriverBy::cssSelector('[id="username"]'))->sendKeys('test12');
$webdriver->findElement(WebDriverBy::cssSelector('[id="password"]'))->sendKeys('“test" \'test’ & <test> <test\><script> <table>');
//$webdriver->findElement(WebDriverBy::cssSelector('[id="remember_me"]'))->click();
$block = $webdriver->findElement(WebDriverBy::cssSelector('._login ._preamble'));
if (strpos($block->getText(), 'Введите логин и пароль, указанные при регистрации.') === false)
    throw new Exception('Не корректня авторизация');










$webdriver->close();

echo 'Ok';

///анный тест проверяет кооректность поведения поля Password для различных комбинаций. Поле Logon заполняется корректными данными.