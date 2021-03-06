<?php

use think\facade\Env;

return [
    // 默认使用的数据库连接配置
    'default' => Env::get('database.driver', 'mysql'),

    // 自定义时间查询规则
    'time_query_rule' => [],

    // 自动写入时间戳字段
    // true为自动识别类型 false关闭
    // 字符串则明确指定时间字段类型 支持 int timestamp datetime date
    'auto_timestamp' => true,

    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',

    // 数据库连接配置信息
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type' => Env::get('database.type', 'mysql'),
            // 服务器地址
            'hostname' => Env::get('database.hostname', '127.0.0.1'),
            // 数据库名
            'database' => Env::get('database.database', ''),
            // 用户名
            'username' => Env::get('database.username', 'root'),
            // 密码
            'password' => Env::get('database.password', ''),
            // 端口
            'hostport' => Env::get('database.hostport', '3306'),
            // 数据库连接参数
            'params' => [],
            // 数据库编码默认采用utf8
            'charset' => Env::get('database.charset', 'utf8'),
            // 数据库表前缀
            'prefix' => Env::get('database.prefix', ''),

            // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
            'deploy' => 0,
            // 数据库读写是否分离 主从式有效
            'rw_separate' => false,
            // 读写分离后 主服务器数量
            'master_num' => 1,
            // 指定从服务器序号
            'slave_no' => '',
            // 是否严格检查字段是否存在
            'fields_strict' => true,
            // 是否需要断线重连
            'break_reconnect' => false,
            // 监听SQL
            'trigger_sql' => true,
            // 开启字段缓存
            'fields_cache' => false,
            // 字段缓存路径
            'schema_cache_path' => app()->getRuntimePath() . 'schema' . DIRECTORY_SEPARATOR,
        ],
        // 更多的数据库配置信息
    ],

    // redis 设置
    'redis' => [
        'default' => [
            // 服务器地址
            'host' => Env::get('redis.host', '127.0.0.1'),
            // 密码
            'password' => Env::get('redis.password', null),
            // 端口
            'port' => Env::get('redis.port', 6379),
            // 数据库号
            'database' => Env::get('redis.db', 0),
        ]
    ],

    // elasticsearch 设置
    'elasticsearch' => [
        'default' => [
            // 集群连接
            'hosts' => explode(',', Env::get('elasticsearch.hosts', 'localhost:9200')),
            // 重试次数
            'retries' => 0,
            // 公共CA证书
            'SSLVerification' => null,
            // 开启日志
            'logger' => null,
            // 配置 HTTP Handler
            'handler' => null,
            // 设置连接池
            'connectionPool' => Elasticsearch\ConnectionPool\StaticNoPingConnectionPool::class,
            // 设置选择器
            'selector' => Elasticsearch\ConnectionPool\Selectors\RoundRobinSelector::class,
            // 设置序列化器
            'serializer' => Elasticsearch\Serializers\SmartSerializer::class
        ]
    ]
];
