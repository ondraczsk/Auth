<?php

namespace GamaK;

use pocketmine\event\Listener as L;
use pocketmine\plugin\PluginBase as PB;

use pocketmine\command\CommandSender;
use pocketmine\command\Command

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;

class Auth extends PB implements L {

  public $prefix = C::DARK_GRAY . "[" . C::GRAY . "Auth" . C::DARK_GRAY . "]" . C::GOLD;
  public $atype = $this->getConfig()->get("use.auth");
  
  public function onEnable() {
  
    $this->getServer()->getPluginManager()->registerEvents("$this, $this");
    $this->getLogger()->info($this->prefix . "Auth enabled");
    $this->saveDefaultConfig;
    
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, Array $args) {
    if(!$sender instanceof Player) {
      return true;
    }
    if($args[0]=="auth") {
      if(empty($args[1])) {
        $sender->sendMessage("Auth Commands:");
        $sender->sendMessage("/login -> login command");
        $sender->sendMessage("/reg -> register command");
        $sender->sendMessage("/auth info -> info command");
      }
      if($args[2]=="info") {
        $sender->sendMessage("*** Info about auth ***");
        $sender->sendMessage("- Created by GamaK");
        $sender->sendMessage("- website: bit.do/gamcz");
        $sender->sendMessage("- for server SwagCraft");
        $sender->sendMessage("- bit.do/swagcraft");
      }
    }
    
    
      if($atype=="2") {
        return false;
        }
      if($atype=="1") {
        return true;
        }
    
  }
  
  public function onDisable() {
    
    $this->getLogger()->info("Auth disabled");
  }
}
