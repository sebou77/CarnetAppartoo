<?php

namespace Sebou\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SebouUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
