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
	
	public function onEntityDamage(EntityDamageEvent $event) {
		$player = $event->getEntity();
		if($player instanceof Player) {
			if($event->getCause() != EntityDamageEvent::CAUSE_VOID) {
				$event->setCancelled();
		}
	}
}
