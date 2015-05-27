<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */
namespace fedemotta\datatables;
use yii\web\AssetBundle;

/**
 * Asset for the DataTables Bootstrap JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTablesBootstrapAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables-bootstrap3'; 

    public $css = [
        "BS3/assets/css/datatables.css",
    ];

    public $js = [
        "BS3/assets/js/datatables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'fedemotta\datatables\DataTablesAsset',
    ];
}