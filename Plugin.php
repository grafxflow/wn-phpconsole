<?php

namespace RV\PhpConsole;

use System\Classes\PluginBase;
use Backend\Facades\Backend;
use Backend\Models\UserRole;

class Plugin extends PluginBase
{
    public function registerComponents(): void
    {
    }

    public function registerSettings(): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function pluginDetails()
    {
        return [
            'name' => 'rv.phpconsole::lang.plugin.name',
            'description' => 'rv.phpconsole::lang.plugin.description',
            'author' => 'RV',
            'icon' => 'oc-icon-terminal',
            'homepage' => 'https://github.com/grafxflow/wn-phpconsole',
        ];
    }

    /**
     * Register the permissions provided by this plugin
     */
    public function registerPermissions(): array
    {
        return [
            'rv.phpconsole.usage'  => [
                'tab' => 'rv.phpconsole::lang.permissions.usage',
                'label' => 'rv.phpconsole::lang.permissions.usage',
                'roles' => [UserRole::CODE_DEVELOPER],
            ],
        ];
    }

    /**
     * Register the backend navigation items provided by this plugin
     */
    public function registerNavigation(): array
    {
        return [
            'pages' => [
                'label' => 'rv.phpconsole::lang.plugin.name',
                'url' => Backend::url('rv/phpconsole/scriptscontroller'),
                'icon' => 'icon-terminal',
                'iconSvg' => 'plugins/rv/phpconsole/assets/images/php-file.svg',
                'permissions' => ['rv.phpconsole.usage'],
                'order' => 200,
            ],
        ];
    }
}
