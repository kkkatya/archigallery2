<?php namespace Kkkatya\Gallery;

use System\Classes\PluginBase;

/**
 * gallery Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'gallery',
            'description' => 'No description provided yet...',
            'author'      => 'kkkatya',
            'icon'        => 'icon-picture-o'
        ];
    }

    public function registerNavigation()
{
    return [
        'gallery' => [
            'label'       => 'Галерея',
            'url'         => \Backend::url('kkkatya/gallery/pictures'),
            'icon'        => 'icon-picture-o',
            'order'       => 500,
            'sideMenu' => [
                'pictures' => [
                    'label'       => 'Изображения',
                    'icon'        => 'icon-list-alt',
                    'url'         => \Backend::url('kkkatya/gallery/pictures'),
                ],           
            ]

        ]
    ];
}

}
