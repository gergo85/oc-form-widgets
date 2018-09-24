<?php namespace Indikator\Form;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.form::lang.plugin.name',
            'description' => 'indikator.form::lang.plugin.description',
            'author'      => 'indikator.form::lang.plugin.author',
            'icon'        => 'icon-check-square-o',
            'homepage'    => 'https://github.com/gergo85/oc-form-widgets'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Indikator\Form\FormWidgets\Pickadate' => [
                'label' => 'Pickadate',
                'code'  => 'pickadate'
            ],
            'Indikator\Form\FormWidgets\TimePicki' => [
                'label' => 'TimePicki',
                'code'  => 'timepicki'
            ],
            'Indikator\Form\FormWidgets\MiniColors' => [
                'label' => 'MiniColors',
                'code'  => 'minicolors'
            ]
        ];
    }
}
