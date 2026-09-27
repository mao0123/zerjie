<?php
/**
 * Zerjie CLI 入口
 *
 * 用法：
 *   php console.php                # 显示所有命令
 *   php console.php <command>      # 执行命令
 *   php console.php defense:clear  # 例：清除防御等级
 */

// 定义 CLI 标记，让 zerjie.php 跳过前端渲染
define('ZERJIE_SKIP_FRONTEND', true);

// 加载内核
require __DIR__ . '/core/zerjie.php';

// 加载 Console 类
if (!class_exists('Zerjie\\Console\\Console')) {
    require_once ZERJIE_CORE_DIR . '/console/Console.php';
}

// 运行
$console = new \Zerjie\Console\Console();
$console->run();