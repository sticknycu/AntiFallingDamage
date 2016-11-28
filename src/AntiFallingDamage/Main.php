<?php
namespace AntiFallingDamage;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\EntityDamageEvent;
class Main extends PluginBase {
  
	public function onLoad() {
		$this->getLogger()->info(TextFormat::WHITE . "AntiFallingDamage loaded!");
	}
  
	public function onEnable() {
		$this->getLogger()->info(TextFormat::DARK_GREEN . "AntiFallingDamage enabled!");
	}
  
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_RED . "AntiFallingDamage disabled!");
	}
	
	public function isDeathCustom(EntityDamageEvent $event) {
		if($cause instanceof EntityDamageEvent) {
			if($cause->getCause() == EntityDamageEvent::CAUSE_FALL){
					$event->setCancelled($world->getDamage());
			}
		}
	}
}
