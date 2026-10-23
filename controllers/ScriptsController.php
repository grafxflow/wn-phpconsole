<?php

namespace Grafxflow\PhpConsole\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Input;

class ScriptsController extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'grafxflow-phpconsole-usage'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Grafxflow.PhpConsole', 'grafxflow-phpconsole-menu');

        $this->addCss('/plugins/grafxflow/phpconsole/assets/css/style.css');
    }

    public function onExecute()
    {
        $data = Input::all();
        $code = $data['Script']['code'];
        $code = preg_replace('/^ *(<\?php|<\?)/mi', '', $code);
        $output = $this->execute($code);
        $this->vars['output'] = $output;
    }

    protected function execute($code)
    {
        ob_start();
        eval($code);
        return ob_get_clean();
    }
}
