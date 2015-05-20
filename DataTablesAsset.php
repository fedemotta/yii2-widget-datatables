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
 * Asset for the DataTables JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTablesAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables'; 

    public $css = [
        "media/css/jquery.dataTables.css",
    ];

    public $js = [
        "media/js/jquery.dataTables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}