DataTables widget for Yii2
===========================
This extension provides the [DataTables](https://github.com/DataTables/DataTables) integration for the Yii2 framework.

[![Latest Stable Version](https://poser.pugx.org/fedemotta/yii2-widget-datatables/v/stable)](https://packagist.org/packages/fedemotta/yii2-widget-datatables) [![Total Downloads](https://poser.pugx.org/fedemotta/yii2-widget-datatables/downloads)](https://packagist.org/packages/fedemotta/yii2-widget-datatables) [![Latest Unstable Version](https://poser.pugx.org/fedemotta/yii2-widget-datatables/v/unstable)](https://packagist.org/packages/fedemotta/yii2-widget-datatables) [![License](https://poser.pugx.org/fedemotta/yii2-widget-datatables/license)](https://packagist.org/packages/fedemotta/yii2-widget-datatables)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fedemotta/yii2-widget-datatables "*"
```

or add

```
"fedemotta/yii2-widget-datatables": "*"
```

to the require section of your `composer.json` file.

Usage
-----
Use DataTables as any other other Yii2 widget.

```php
use fedemotta\datatables\DataTables;
```

```php
<?php
    $searchModel = new ModelSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>
<?= DataTables::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //columns

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>
```

You can also use DataTables in the JavaScript layer of your application. To achieve this, you need to include DataTables as a dependency of your Asset file.

```php
public $depends = [
...
'fedemotta\datatables\DataTablesAsset',
...
];
```
