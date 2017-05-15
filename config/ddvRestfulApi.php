<?php
return array(
    'headersPrefix' => 'x-hz-',
    'cors' => array(// 来源
        'origin'=>array(
            'http://10.8.8.23:3000',
            'http://127.0.0.1',
            'http://10.8.8.88',
            'http://10.8.8.35',
            'http://10.8.8.7',
            'http://10.8.8.23',
            'http://10.8.7.240',
            'http://10.8.7.192',
            'http://127.0.0.1:8888',
            'http://10.8.8.33:8888',
        ),
        // 授权请求
        'method'=>array(
            'GET',
            'POST',
            'PUT',
            'HEAD',
            'DELETE'
        ),
        // 授权请求头
        'allowHeader'=>array(
            'accept',
            'authorization',
            'content-md5',
            'content-type',
            'x-requested-with',
            'x_requested_with',
            'cookie',
            'x-hz-*'
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