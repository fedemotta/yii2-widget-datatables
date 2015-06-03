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
 * Asset for the DataTables TableTools JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTablesTableToolsAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables-tabletools'; 

    public $css = [
        "css/dataTables.tableTools.css",
    ];

    public $js = [
        "js/dataTables.tableTools.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'fedemotta\datatables\DataTablesAsset',
    ];
}