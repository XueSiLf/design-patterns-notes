<?php
/**
 * User: XueSi
 * Date: 2021/5/18 13:18
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Tests\Creational\Singleton\Example;


use DesignPatterns\Creational\Singleton\Example\MySqlDbSingleton;
use PHPUnit\Framework\TestCase;
use function spl_object_hash;

class MySqlDbSingletonTest extends TestCase
{
    public function testGetInstance()
    {
//        $db1 = new MySqlDbSingleton();
//        $db2 = new MySqlDbSingleton();
//        var_dump($db1, $db2);

        // 如果想得到一个对象，就必须通过类名调用getInstance静态方法
        $db1 = MySqlDbSingleton::getInstance();
        // 反复调用 依旧创建多个对象
        $db2 = MySqlDbSingleton::getInstance();
//        var_dump($db1, $db2);
        $this->assertSame($db1, $db2);
        $this->assertSame(spl_object_hash($db1), spl_object_hash($db2));

        // 通过clone关键字得到一个新的对象空间
//        $db3 = clone $db1;
//        var_dump($db3);

        // 反序列化对象
//        $db4 = unserialize(serialize($db1));
//        var_dump($db4);
    }
}
