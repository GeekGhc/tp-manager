<?php

// 定义api接口应用目录
define('APP_PATH',__DIR__.'/../app/');

// 定义api接口配置文件路径
define('CONF_PATH',__DIR__.'/../conf/');

//绑定到接口模块
define('BIND_MODULE','api');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';