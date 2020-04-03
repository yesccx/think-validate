# think-validate

精简 [think-validate2.0](https://github.com/top-think/think-validate)，去除了`topthink/think-container`依赖，并做了简单的适配Hyperf
> 暂不支持协程，只能通过new或者make验证器类

## 开始使用

#### 1、安装依赖
```shell
composer require yesccx/think-validate:2.0.3
```

#### 2、初始化配置
```shell
php bin/hyperf.php think-validate:publish --config
```

#### 3、相关配置
```php
app/config/autoload/think-validate.php

return [
    // 验证器异常类，如果为空则表示不抛出异常（这时需要获取错误信息进行处理）
    'validate_exception' => AppException::class,
];
```

#### 4、使用
```php

class UserValidate extends Yesccx\ThinkValidate\Validate {
    ...
}

$uv = new UserValidate 或 $uv = UserValidate::make();
$uv->xxxx
```

更多用法可以参考6.0完全开发手册的[验证](https://www.kancloud.cn/manual/thinkphp6_0/1037623)章节
