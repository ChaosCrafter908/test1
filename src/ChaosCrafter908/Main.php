<?php

namespace ChaosCrafter908;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {

public function onEnable() {

this->getServer()->getPluginManager()->registerEvents(this, this);

}
public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args){}
}
