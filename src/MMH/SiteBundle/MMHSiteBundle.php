<?php

namespace MMH\SiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MMHSiteBundle extends Bundle
{
  public function getParent(){
    return 'FOSUserBundle';
  }
}
