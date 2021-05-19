<?php
/**
 * User: XueSi
 * Date: 2021/5/18 16:22
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Tests\Creational\Singleton\Example;

use DesignPatterns\Creational\Singleton\Example\MySql1DbSingleton;
use PHPUnit\Framework\TestCase;

class MySql1DbSingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $db1 = MySql1DbSingleton::getInstance();
        $db2 = MySql1DbSingleton::getInstance();
        $this->assertSame($db1, $db2);
        $this->assertSame(spl_object_hash($db1), spl_object_hash($db2));
    }
}
