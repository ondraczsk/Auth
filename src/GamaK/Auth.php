<?php

namespace GamaK;

use pocketmine\event\Listener as L;
use pocketmine\plugin\PluginBase as PB;
use pocketmine\command\CommandSender;
use pocketmine\command\Command
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;

class Auth extends PB implements L {

  public $prefix = $this->getConfig()->get("prefix");
  public $auth;
  public $config = new Config($this->getDataFolder(."config.yml", Config::YAML));
  
  public function onEnable() {
  
    $this->getServer()->getPluginManager()->registerEvents("$this, $this");
    $this->getLogger()->info($this->prefix . "Auth enabled");
    $this->saveDefaultConfig;
    
  }
  
  public function authChanger() {
    
    $authtype = $this->getConfig()->get("use-auth");
    
    if $authtype = "1" {
      $auth = auth;
    } elseif $authtype = "2" {
      $auth = chatlogin;
    } elseif $authtype = "3" {
      $auth = bug;
    }
  }
  
  public function join() {
    
    $player = $event->getName();
    
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
  }
  
  public function onDisable() {
    $this->getLogger()->info("Auth disabled");
  }
}
