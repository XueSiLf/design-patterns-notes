<?php
/**
 * User: XueSi
 * Date: 2021/5/18 11:10
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

// 单例：保证实例在生命周期中始终唯一
// 这里用一个final类作为示例 防止被继承 仅作为参考
/**
 * 单例模式
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 * @Date: 2021/5/18 11:20
 * @author XueSi <1592328848@qq.com>
 */
final class Singleton
{
    /** @var Singleton */
    private static $instance;

    /**
     * 通过懒加载获得实例（在第一次使用时创建）
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            // 具体使用 根据业务逻辑选择
            // self::$instance = new self; // 当前类

            // 推荐用
            self::$instance = new static(); // 调用时确定类
        }
        return self::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {

    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
