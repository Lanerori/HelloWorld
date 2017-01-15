<?php
namespace HelloWorld

use pocketmine\plugin\PluginBase;
use pocketmine\Event\BlockPlaceEvent;
use pocketmine\event\Listener;

class HelloWorld extends PluginBase implements Listner{
public function 
onEnable(){$this->getServer()->getPluginManager()->registerEvents($this,$this);
}
public function onPlace(BlockPlaceEvent $event){
	$Player=$event->$getPlayer():
	$Player->sendMessage($Player->getName()."님의 블럭설치감지!!");
  }
}

?>
