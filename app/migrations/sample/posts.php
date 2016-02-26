<?php
return [
    [
        'title' => 'Simple RBAC with Yii2 Mimin',
        'author_id' => '1',
        'categori' => 'yii2',
        'body' => 'Simple RBAC Manager fo Yii 2.0. Minify of [yii2-admin](https://github.com/mdmsoft/yii2-admin) extension with awesome features

[![Latest Stable Version](https://poser.pugx.org/hscstudio/yii2-mimin/v/stable)](https://packagist.org/packages/hscstudio/yii2-mimin) [![Total Downloads](https://poser.pugx.org/hscstudio/yii2-mimin/downloads)](https://packagist.org/packages/hscstudio/yii2-mimin) [![Latest Unstable Version](https://poser.pugx.org/hscstudio/yii2-mimin/v/unstable)](https://packagist.org/packages/hscstudio/yii2-mimin) [![License](https://poser.pugx.org/hscstudio/yii2-mimin/license)](https://packagist.org/packages/hscstudio/yii2-mimin)

Attention
---------
Before you install and use this extension, then make sure that your application has been using the login authentication to the database. especially for yii basic template. Because without it, this extension will produce error and useless.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hscstudio/yii2-mimin "~1.1"
```

or add

```
"hscstudio/yii2-mimin": "~1.1"
```

to the require section of your `composer.json` file.


Configuration
-------------

Once the extension is installed, simply use it in your code by  :

in config
```php
\'as access\' => [
     \'class\' => \'\\hscstudio\\mimin\\components\\AccessControl\',
	 \'allowActions\' => [
		// add wildcard allowed action here!
		\'site/*\',
		\'debug/*\',
		\'mimin/*\', // only in dev mode
	],
],
...,
\'modules\' => [
	\'mimin\' => [
		\'class\' => \'\\hscstudio\\mimin\\Module\',
	],
	...
],
\'components\' => [
	\'authManager\' => [
		\'class\' => \'yii\\rbac\\DbManager\', // only support DbManager
	],
],
```
',
        'created_at' => '1456450535',
        'updated_at' => '1456450535',
    ],
    [
        'title' => 'Yii PHP Framework Version 2',
        'author_id' => '1',
        'categori' => 'yii2',
        'body' => 'Thank you for choosing Yii 2 - a modern PHP framework designed for professional Web development.

Yii 2 is a complete rewrite of its previous version Yii 1.1 which is one of the most popular PHP frameworks.
Yii 2 inherits the main spirit behind Yii for being simple, fast and highly extensible.
Yii 2 requires PHP 5.4 and embraces the best practices and protocols found in modern Web application development.


[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2/v/stable.png)](https://packagist.org/packages/yiisoft/yii2) [![Total Downloads](https://poser.pugx.org/yiisoft/yii2/downloads.png)](https://packagist.org/packages/yiisoft/yii2) [![Reference Status](https://www.versioneye.com/php/yiisoft:yii2/reference_badge.svg)](https://www.versioneye.com/php/yiisoft:yii2/references) [![Build Status](https://img.shields.io/travis/yiisoft/yii2.svg)](http://travis-ci.org/yiisoft/yii2) [![Dependency Status](https://www.versioneye.com/php/yiisoft:yii2/dev-master/badge.png)](https://www.versioneye.com/php/yiisoft:yii2/dev-master) [![HHVM Status](https://img.shields.io/hhvm/yiisoft/yii2-dev.svg)](http://hhvm.h4cc.de/package/yiisoft/yii2-dev) [![Code Coverage](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/coverage.png?s=31d80f1036099e9d6a3e4d7738f6b000b3c3d10e)](https://scrutinizer-ci.com/g/yiisoft/yii2/) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/quality-score.png?s=b1074a1ff6d0b214d54fa5ab7abbb90fc092471d)](https://scrutinizer-ci.com/g/yiisoft/yii2/) [![Code Climate](https://img.shields.io/codeclimate/github/yiisoft/yii2.svg)](https://codeclimate.com/github/yiisoft/yii2)

DIRECTORY STRUCTURE
-------------------

```
build/               internally used build tools
docs/                documentation
framework/           core framework code
tests/               tests of the core framework code
```


REQUIREMENTS
------------

The minimum requirement by Yii is that your Web server supports PHP 5.4.


DOCUMENTATION
-------------

Yii 2.0 has a [Definitive Guide](http://www.yiiframework.com/doc-2.0/guide-index.html) and
a [Class Reference](http://www.yiiframework.com/doc-2.0/index.html) which cover every detail of Yii.

There is also a [PDF version](http://stuff.cebe.cc/yii2-guide.en.pdf) of the Definitive Guide
and a [Definitive Guide Mirror](http://stuff.cebe.cc/yii2docs/) which is updated every 15 minutes.

For 1.1 users, you may refer to [Upgrading from Yii 1.1](docs/guide/intro-upgrade-from-v1.md)
to have a general idea of what has changed in 2.0.
',
        'created_at' => '1456450893',
        'updated_at' => '1456451011',
    ],
];
