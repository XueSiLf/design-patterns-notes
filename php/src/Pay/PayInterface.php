<?php
/**
 * User: XueSi
 * Date: 2021/5/18 12:05
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Pay;

interface PayInterface
{
    // 构建下单的请求参数
    public function buildUnifiderRequest();

    public function getPayConf();
    // 校验签名
    public function checkSign();
    // 响应第三方
    public function answer();
}
