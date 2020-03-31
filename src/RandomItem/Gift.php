<?php

namespace RandomItem;

use pocketmine\event\Listener;
use pocketmine\Server;

class Gift implements Listener {
	
	public function __construct(Main $plugin) {
		$this->plugin = $plugin;
		$this->start = false;
		parent::__construct(Main $plugin);
	}
	
	public function onRun(int $currentTick) : void{
		if($this->start) {
			$this->plugin->giveAll();
		} else {
			$this->start = true;
		}
	}
}
