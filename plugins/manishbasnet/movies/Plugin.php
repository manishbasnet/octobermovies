<?php namespace ManishBasnet\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }


    public function registerFormWidgets()
    {
    	return [

    		'ManishBasnet\Movies\FormWidgets\Actorbox' => [

    			'lable' => 'Actorbox field',
    			'code' 	=>	'actorbox'
    		]
    	];
    }

    public function registerSettings()
    {

    }
}
