<?php
/**
 * User: XueSi
 * Date: 2021/5/18 12:37
 * Author: XueSi <1592328848@qq.com>
 */
declare(strict_types=1);

namespace DesignPatterns\Behavioral\ObServer;


use SplObserver;

class User implements \SplSubject
{
    private $email;

    /**
     * 观察者对象
     * @var \SplObjectStorage
     */
    private $observer;

    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    public function notify()
    {
        // TODO: Implement notify() method.
    }
}
