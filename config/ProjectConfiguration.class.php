<?php

require_once '/home/antares/Desarrollo/Symfony/recursos/symfony-1.4.16/symfony-1.4.16/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
