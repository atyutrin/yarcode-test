<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 19:16
 */

namespace common\widgets;

use yii\bootstrap\NavBar;
use yii\bootstrap\Html;

class NavBarAgency extends NavBar
{
    protected function renderToggleButton()
    {
        $bar = Html::tag('i', '', ['class' => 'fa fa-bars']);
        $screenReader = "<span class=\"sr-only\">{$this->screenReaderToggleText}</span> Menu ";

        return Html::button("{$screenReader}\n{$bar}", [
            'class' => 'navbar-toggle',
            'data-toggle' => 'collapse',
            'data-target' => "#{$this->containerOptions['id']}",
        ]);
    }
}