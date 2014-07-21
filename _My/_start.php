<?php

require_once
"../_phpwebdriver/__init__.php";
$host = 'http://localhost:9515'; // this is the default
$capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
$webdriver = RemoteWebDriver::create($host, $capabilities);
$webdriver->manage()->timeouts()->implicitlyWait(100);