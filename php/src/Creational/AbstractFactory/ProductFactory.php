<?php
/**
 * User: XueSi
 * Date: 2021/5/18 12:21
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class ProductFactory
{
    /**
     * 可装运产品运输成本
     * @var int
     */
    const SHIPPING_COSTS = 50;

    // 创建可装运产品实例
    public function createShippableProduct(int $price): ProductInterface
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    // 创建数码产品实例
    public function createDigitalProduct(int $price): ProductInterface
    {
        return new DigitalProduct($price);
    }
}
