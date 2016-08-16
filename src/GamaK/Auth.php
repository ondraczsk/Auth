<?php

namespace GamaK;

use pocketmine\event\Listener as L;
use pocketmine\plugin\PluginBase as PB;

use pocketmine\utils\TextFormat as C;

class Auth extends PB implements L {

  public $prefix = C::DARK_GRAY . "[" . C::GRAY . "Auth" . C::DARK_GRAY . "]" . C::GOLD;
  
  public function onEnable() {
  
    $this->getServer()->getPluginManager()->registerEvents("$this, $this");
    $this->getLogger()->info($this->prefix . "Auth enabled");
    
  }
}
