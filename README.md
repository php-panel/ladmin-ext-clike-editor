Several c-lick language editor extensions for laravel-admin based on code-mirror
======

[DEMO](http://demo.laravel-admin.org/code-mirror/clike) (Login using `admin/admin`)

## Installation 

```bash
composer require php-panel/ladmin-ext-clike-editor

php artisan vendor:publish --tag=laravel-admin-code-mirror
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php

    'extensions' => [

        'clike-editor' => [
        
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
            
            // 编辑器的配置
            'config' => [
                
            ]
        ]
    ]

```

更多配置可以到[CodeMirror文档](https://codemirror.net/)找到

## 使用

在form表单中使用它：
```php
$form->clang('code');

$form->cpp('code');

$form->csharp('code');

$form->java('code');

$form->objectivec('code');

$form->scala('code');

$form->kotlin('code');

$form->ceylon('code');
```

设置高度
```php
$form->clang('code')->height(500);
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
