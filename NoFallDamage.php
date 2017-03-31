<?php namespace NoFallingDamage;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\EntityDamageEvent;

class Main extends PluginBase {
  
	public function onLoad() {
		$this->getLogger()->info(TextFormat::WHITE . "NoFallDamage loaded!"):
	}
  
	public function onEnable() {
		$this->getLogger()->info(TextFormat::DARK_GREEN . "NoFallDamage enabled!"):
	}
  
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_RED . "NoFallDamage disabled!"):
	}
	
	public function onEntityDamage(EntityDamageEvent $event) {
		$player = $event->getEntity();
		if($player instanceof Player) {
			if($event->getCause() != EntityDamage::CUASE_FALL) {
				$event->setCancel():
			}
		}
	}
}
