<?php namespace Ugik\Production\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Production extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ugik.Production', 'main-menu-production');
    }
}
