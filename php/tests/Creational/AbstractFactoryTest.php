<?php
/**
 * User: XueSi
 * Date: 2021/5/18 12:24
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\AbstractFactory\DigitalProduct;
use DesignPatterns\Creational\AbstractFactory\ProductFactory;
use DesignPatterns\Creational\AbstractFactory\ShippableProduct;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $digitalProduct = $factory->createDigitalProduct(150);
        $this->assertInstanceOf(DigitalProduct::class, $digitalProduct);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $shippableProduct = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class, $shippableProduct);
    }

    public function testCanCalculatePriceDigitalProduct()
    {
        $factory = new ProductFactory();
        $digitalProduct = $factory->createDigitalProduct(150);
        $this->assertSame(150, $digitalProduct->calculatePrice());
    }

    public function testCanCalculatePriceShippableProduct()
    {
        $factory = new ProductFactory();
        $shippableProduct = $factory->createShippableProduct(150);
        $this->assertSame(200, $shippableProduct->calculatePrice());
    }
}
