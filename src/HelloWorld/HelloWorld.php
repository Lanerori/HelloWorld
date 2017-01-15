<?php
namespace HelloWorld
use PocketMine/Plugins/PluginBase
use PocketMine/Event/BlockPlaceEvent;
use PocketMine/Event/Lister;
class HelloWorld extends PluginBase inplemented Listner{public function 
onEnable(){$this->getServer()->getPluginManager()->registerEvents($this,$this);
}
public function onPlace(BlockPlaceEvent $event){
	$Player=$event->$getPlayer():
	$Player->sendMessage($Player->getName()."님의 블럭설치감지!!");
  }
}

?>
