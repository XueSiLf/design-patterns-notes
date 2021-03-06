# 单例模式 （Singleton）
单例模式被公认为是 `反面模式`，为了获得更好的可测试性和可维护性，请使用 `『依赖注入模式』`。

## 目的
在应用程序调用的时候，只能获得一个对象实例。

## 例子、使用场景
- 数据库连接
- 日志 (多种不同用途的日志也可能会成为多例模式)
- 在应用中锁定文件 (系统中只存在一个 ...)

## UML类图
![](./singleton.png)

## 代码部分
```src/Creational/Singleton.php```

## 测试部分
```tests/Creational/SingletonTest.php```
