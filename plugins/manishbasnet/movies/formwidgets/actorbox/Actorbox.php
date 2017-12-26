 <?php namespance ManishBasnet\Movies\FormWidgets;

use Backend\Classes\FormWidgetbase;

use Config;

class ActorBox extends FormWidgetbase
{
	public function widgetDetails()
	{
		return [

			'name' => 'Actorbox',
			'description' => 'Field for adding actors'
		];
	}

	public function render(){

		return $this->makePartial('widget');
	}

	public function loadAssets()

	{
		$this->addCss('css/select2.css');

		$this->addJs('js/select2.js');
	}

}