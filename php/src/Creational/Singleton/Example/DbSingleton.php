<?php
/**
 * User: XueSi
 * Date: 2021/5/18 13:09
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton\Example;

/**
 * Class DbSingleton
 * @package DesignPatterns\Creational\Singleton\Example
 * @Date: 2021/5/18 13:13
 * @author XueSi <1592328848@qq.com>
 */
class DbSingleton
{
    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance instanceof static) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    /**
     * MySQLDbSingleton constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
