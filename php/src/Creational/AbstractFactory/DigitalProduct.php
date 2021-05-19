<?php
/**
 * User: XueSi
 * Date: 2021/5/18 12:00
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * 数码产品类
 * Class DigitalProduct
 * @package DesignPatterns\Creational\AbstractFactory
 * @Date: 2021/5/18 12:03
 * @author XueSi <1592328848@qq.com>
 */
class DigitalProduct implements ProductInterface
{
    /**
     * 产品价格
     * @var int
     */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        // TODO: Implement calculatePrice() method.
        return $this->price;
    }
}
