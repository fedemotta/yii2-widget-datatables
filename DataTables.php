<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */
namespace fedemotta\datatables;

use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;


/**
 * Datatables Yii2 widget
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTables extends \yii\grid\GridView
{
    /**
     * Runs the widget.
     */
    public function run()
    {
        $id = $this->tableOptions['id'];
        $options = Json::encode($this->getClientOptions());
        $view = $this->getView();
        DataTablesAsset::register($view);
        $view->registerJs("jQuery('#$id').DataTable($options);");
        
        //base list view run
        if ($this->showOnEmpty || $this->dataProvider->getCount() > 0) {
            $content = preg_replace_callback("/{\\w+}/", function ($matches) {
                $content = $this->renderSection($matches[0]);

                return $content === false ? $matches[0] : $content;
            }, $this->layout);
        } else {
            $content = $this->renderEmpty();
        }
        $tag = ArrayHelper::remove($this->options, 'tag', 'div');
        echo Html::tag($tag, $content, $this->options);
    }
}
