<?php

declare (strict_types = 1);

/*
 * Validate上下文处理器（兼容协程）
 */

namespace Yesccx\ThinkValidate\Context;

use Hyperf\Utils\Context;

trait ValidateContextHandle {

    /**
     * 上下文key
     *
     * @var string
     */
    protected static $contextKey = 'ThinkValidate.ValidateContextHandle';

    /**
     * 设置参数在上下文中的值
     *
     * @param string $name 参数名
     * @param mixed $default 参数值
     * @return $this
     */
    public function setParams(string $name, $value) {
        $contextData = Context::get(self::$contextKey, []);
        $contextData[$name] = $value;
        Context::set(self::$contextKey, $contextData);

        return $this;
    }

    /**
     * 从上下文中获取参数
     *
     * @param string $name 参数名
     * @param mixed $default 缺省值
     * @return array|string
     */
    public function getParams(string $name, $default = false) {
        $contextData = Context::get(self::$contextKey, []);
        return isset($contextData[$name]) ? ($contextData[$name] ?: $default): ($this->{$name} ?? $default);
    }

}