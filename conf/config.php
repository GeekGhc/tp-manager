<?php


return [
//    'auto_bind_module'       => true,
    // 是否开启路由
    'url_route_on' => true,
    // 是否强制使用路由
    'url_route_must' => false,
    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],
    // 视图输出字符串内容替换
    'view_replace_str'       => [

    ],
    'template'               => [
//       'layout_on'          => true,
//        'layout_name'       => 'layout'
    ],
];