<?php

/* 
 * CaptainKenji productions
 */

namespace Arrowhit;


use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\Player;
use pocketmine\level\sound\ClickSound;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase Implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    /* Main Code */
    
    public function onHit(EntityDamageEvent $event){
        if($event instanceof EntityDamageByChildEntityEvent){
            $target = $event->getEntity();
            $player = $event->getDamager();
            $event->getDamager()->sendTip("§3you damage ! §e".$target->getName()." §3with §e".$target->getHealth());
            $player->getLevel()->addSound(new ClickSound($player), [$player]);
                }
        }
}

