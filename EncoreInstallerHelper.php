<?php

namespace zikwall\EncoreInstaller;

use Composer\Installers\BaseInstaller;

class EncoreInstallerHelper extends BaseInstaller
{
    /*protected $locations = [
        'module'    => 'vendor/zikwall/en-core/modules/{$name}/',
        'theme'     => 'vendor/zikwall/en-core/themes/{$name}//',
        'custom-theme' => 'themes/{$name}/',
        'custom-module' => 'modules/{$name}/',
    ];*/

    public function getLocations()
    {
        // it will be looking for a key of FALSE, which evaluates to 0, i.e. the first element
        // that element value being false signals the installer to use the default path
        return array(false);
    }

}
