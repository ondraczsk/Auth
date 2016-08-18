<?php

namespace GamaK;

use pocketmine\event\Listener as L;
use pocketmine\plugin\PluginBase as PB;

use pocketmine\command\CommandSender;
use pocketmine\command\Command

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;

class Auth extends PB implements L {

  public $prefix = C::DARK_GRAY . "[" . C::GRAY . "Auth" . C::DARK_GRAY . "] " . C::GOLD;
  public $auth;
  
  public function onEnable() {
  
    $this->getServer()->getPluginManager()->registerEvents("$this, $this");
    $this->getLogger()->info($this->prefix . "Auth enabled");
    $this->saveDefaultConfig;
    
  }
  
  public function authChanger() {
    $authtype = $this->getConfig->get("use-auth");
    
    if $authtype = "1" {
      $auth = auth;
    } elseif $authtype = "2" {
      $auth = chatlogin;
    }
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, Array $args) {
    if(!$sender instanceof Player) {
      return true;
    }
    switch($cmd->getName())
      if($args[0]=="auth") {
        if(empty($args[1])) {
          $sender->sendMessage("Auth Commands:");
          $sender->sendMessage("/login -> login command");
          $sender->sendMessage("/reg -> register command");
          $sender->sendMessage("/auth info -> info command");
        } 
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
