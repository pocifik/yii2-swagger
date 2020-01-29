<?php

namespace yii2mod\swagger;

use yii\web\AssetBundle;

/**
 * Class SwaggerAsset
 *
 * @package yii2mod\swagger
 */
class SwaggerAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle
     */
    public $sourcePath = '@bower/swagger-ui/dist';

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $js = [
        'swagger-ui.js', // v2
        //'swagger-ui-bundle.js', v3
        //'swagger-ui-standalone-preset.js', v3
    ];

    /**
     * @var array list of CSS files that this bundle contains
     */
    public $css = [
        //'swagger-ui.css', v3
    ];
}
