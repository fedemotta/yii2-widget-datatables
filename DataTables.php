<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */
namespace fedemotta\datatables;

use yii\helpers\Json;

/**
 * Datatables Yii2 widget
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTables extends \yii\grid\GridView
{
    /**
     * @var array the HTML attributes for the widget main container tag.
     */
    public $options = [];
    
    /**
     * @var array the options for the DataTables widget.
     */
    public $clientOptions = [];
    
    
    /**
     * Initializes the widget.
     * This method will register the bootstrap asset bundle. If you override this method,
     * make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }
    /**
     * Runs the widget.
     * This registers the necessary javascript code and renders the datatables
     */
    public function run()
    {
        parent::run();
        $id = $this->options['id'];
        $view = $this->getView();
        $options = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : Json::encode([]);
        DataTablesAsset::register($view);
        $view->registerJs("jQuery('#$id').Datatable($options);");
    }
}
