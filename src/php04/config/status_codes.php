<?php
    $status_codes = [
        [
            'code'=>'102',
            'meaning'=>'Processing',
            'description'=>'処理中である'
        ],
        [
            'code'=>'200',
            'meaning'=>'OK',
            'description'=>'リクエストが正常にできた'
        ],
        [
            'code'=>'301',
            'meaning'=>'Moved',
            'description'=>'リクエストしたリソースが恒久的に移動されている'
        ],
        [
            'code'=>'304',
            'meaning'=>'Not Modified',
            'description'=>'リクエストしたリソースは更新されていない'
        ],
        [
            'code'=>'400',
            'meaning'=>'Bad Request',
            'description'=>'クライアントのリクエストに異常がある'
        ],
        [
            'code'=>'401',
            'meaning'=>'Unauthorized',
            'description'=>'アクセストークンが無効な時や、認証がされていない'
        ],
        [
            'code'=>'403',
            'meaning'=>'Forbidden',
            'description'=>'閲覧制限が無いファイルやフォルダである'
        ],
        [
            'code'=>'404',
            'meaning'=>'Not found',
            'description'=>'Webページが見つからない'
        ],
        [
            'code'=>'500',
            'meaning'=>'Internal Server Erro',
            'description'=>'何らかのサーバー内でエラーが起きた'
        ],
        [
            'code'=>'502',
            'meaning'=>'Bad Gateway',
            'description'=>'サーバーがリクエストに満たすのに必要な機能をサポートしていない'
        ],
        [
            'code'=>'503',
            'meaning'=>'Service Unavailble',
            'description'=>'一時的にサーバーにアクセスできない'
        ]
    ];

// echo '<pre>';
// var_dump($status_codes);
// echo '</pre>';

