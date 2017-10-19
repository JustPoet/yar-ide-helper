<?php

/**
 * Yar IDE helper
 */

/**
 * Yar客户端
 *
 * @link http://php.net/manual/zh/class.yar-client.php
 * Class Yar_Client
 */
class Yar_Client
{
    protected $_protocol;

    protected $_uri;

    protected $_options;

    protected $_running;

    /**
     * 创建一个客户端实例
     *
     * @param string $url RPC服务地址
     */
    final public function __construct(string $url) {}

    /**
     * 调用远程服务
     *
     * @param string $method
     * @param array  $parameters
     */
    public function __call(string $method, array $parameters) {}

    /**
     * 设置调用的配置
     *
     * @param number $name
     * @param mixed  $value
     */
    public function setOpt(number $name, mixed $value) {}
}

/**
 * Yar服务端
 *
 * @link http://php.net/manual/zh/class.yar-server.php
 * Class Yar_Server
 */
class Yar_Server
{
    protected $_executor;

    /**
     * 创建一个HTTP RPC Server
     *
     * @param Object $obj
     */
    final public function __construct(Object $obj) {}

    /**
     * 启动HTTP RPC Server
     *
     * @return boolean
     */
    public function handle(){}
}

/**
 * Yar并发客户端
 *
 * @link http://php.net/manual/zh/class.yar-concurrent-client.php
 * Class Yar_Concurrent_Client
 */
class Yar_Concurrent_Client
{
    public static $_callstack;

    public static $_callback;

    public static $_error_callback;

    /**
     * 注册一个并行的服务调用
     *
     * @param string        $uri
     * @param string        $method
     * @param array         $parameters
     * @param callable|null $callback
     * @param array|null    $options
     *
     * @return int
     */
    public static function call(
        string $uri,
        string $method,
        array $parameters,
        callable $callback = null,
        $options = null
    ) {
    }

    /**
     * 发送所有注册的并行调用
     *
     * @param callable|null $callback
     * @param callable|null $error_callback
     *
     * @return boolean
     */
    public static function loop(
        callable $callback = null,
        callable $error_callback = null
    ) {
    }

    /**
     * 清除所有注册调用
     *
     * @return boolean
     */
    public static function reset(){}
}

/**
 * Yar服务端异常
 *
 * @link http://php.net/manual/zh/class.yar-server-exception.php
 * Class Yar_Server_Exception
 */
class Yar_Server_Exception extends Exception
{
    protected $_type;

    /**
     * @return string
     */
    public function getType(){}
}

/**
 * Yar客户端异常
 *
 * @link http://php.net/manual/zh/class.yar-client-exception.php
 * Class Yar_Client_Exception
 */
class Yar_Client_Exception extends Exception
{
    protected $_type;

    /**
     * @return string
     */
    public function getType(){}
}
