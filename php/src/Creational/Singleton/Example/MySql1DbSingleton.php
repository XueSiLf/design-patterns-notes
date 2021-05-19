<?php
/**
 * User: XueSi
 * Date: 2021/5/18 13:35
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton\Example;

/**
 * Class MySql1DbSingleton
 * @package DesignPatterns\Creational\Singleton\Example
 * @Date: 2021/5/18 16:22
 * @author XueSi <1592328848@qq.com>
 */
class MySql1DbSingleton
{

    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * MySql1DbSingleton constructor.
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
