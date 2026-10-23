<?php

namespace Grafxflow\PhpConsole;

use Backend\Facades\Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

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
            'name' => 'grafxflow.phpconsole::lang.plugin.name',
            'description' => 'grafxflow.phpconsole::lang.plugin.description',
            'author' => 'Grafxflow',
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
            'grafxflow.phpconsole.usage'  => [
                'tab' => 'grafxflow.phpconsole::lang.permissions.usage',
                'label' => 'grafxflow.phpconsole::lang.permissions.usage',
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
                'label' => 'grafxflow.phpconsole::lang.plugin.name',
                'url' => Backend::url('grafxflow/phpconsole/scriptscontroller'),
                'icon' => 'icon-terminal',
                'iconSvg' => 'plugins/grafxflow/phpconsole/assets/images/php-file.svg',
                'permissions' => ['grafxflow.phpconsole.usage'],
                'order' => 200,
            ],
        ];
    }
}
