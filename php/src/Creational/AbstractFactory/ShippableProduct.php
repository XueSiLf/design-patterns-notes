<?php
/**
 * User: XueSi
 * Date: 2021/5/18 11:54
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * 可装运产品类
 * Class ShippableProduct
 * @package DesignPatterns\Creational\AbstractFactory
 * @Date: 2021/5/18 11:57
 * @author XueSi <1592328848@qq.com>
 */
class ShippableProduct implements ProductInterface
{
    /**
     * 产品价格
     * @var float
     */
    private $productPrice;

    /**
     * 运输成本
     * @var float
     */
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice()
    {
        // TODO: Implement calculatePrice() method.
        return $this->productPrice + $this->shippingCosts;
    }
}
