<?php

namespace zikwall\EncoreInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class EncoreInstallerPlugin implements PluginInterface
{
	public function activate(Composer $composer, IOInterface $io)
  {
		$installer = new EncoreInstaller($io, $composer);
		$composer->getInstallationManager()->addInstaller($installer);
	}
}
