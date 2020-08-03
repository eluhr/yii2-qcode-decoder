<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eluhr\qcodedecoder\assets;

use yii\web\AssetBundle;

/**
 * Class QCodeDecoderAssetBundle
 * @package eluhr\qcodedecoder\assets
 * @author Elias Luhr <elias.luhr@gmail.com>
 */
class QCodeDecoderAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/bower/qcode-decoder';

    public $js = [
        'build/qcode-decoder.min.js'
    ];
}
