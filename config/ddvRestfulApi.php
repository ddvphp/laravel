<?php
return array(
    'headersPrefix' => 'x-ddv-',
    'cors' => array(// 来源
        'origin'=>array(
            'http://127.0.0.1',
            'http://127.0.0.1*',
            'http://10.*.*.*',
            'http://10.*.*.*:*'
        ),
        // 授权请求
        'method'=>array(
        ),
        // 授权请求头
        'allowHeader'=>array(
        ),
        // 授权响应头读取
        'exposeHeader'=>array(
            'set-cookie',
            'x-ddv-request-id',
            'x-ddv-session-sign'
        ),
        // 缓存时间
        'control'=>7200
    )
);