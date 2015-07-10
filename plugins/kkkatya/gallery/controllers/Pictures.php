<?php namespace Kkkatya\Gallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Pictures Back-end Controller
 */
class Pictures extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kkkatya.Gallery', 'gallery', 'pictures');
    }
}