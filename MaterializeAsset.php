<?php
namespace kuakling\materialize;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Materialize css files.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class MaterializeAsset extends AssetBundle
{
    public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
    ];
    public $cssOptions = ['media' => 'screen,projection'];
}
