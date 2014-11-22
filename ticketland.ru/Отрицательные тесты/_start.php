<?php

require_once
"../../_phpwebdriver/__init__.php";
$host = 'http://localhost:9515'; // this is the default
$capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
$webdriver = RemoteWebDriver::create($host, $capabilities);
$webdriver->manage()->timeouts()->implicitlyWait(100);
/*
$webdriver = new WebDriver("127.0.0.1", "9515");
$webdriver->connect("chrome");
$webdriver->get('http://google.com/');
*/