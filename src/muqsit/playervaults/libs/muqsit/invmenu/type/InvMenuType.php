<?php

declare(strict_types=1);

namespace muqsit\playervaults\libs\muqsit\invmenu\type;

use muqsit\playervaults\libs\muqsit\invmenu\InvMenu;
use muqsit\playervaults\libs\muqsit\invmenu\type\graphic\InvMenuGraphic;
use pocketmine\inventory\Inventory;
use pocketmine\player\Player;

interface InvMenuType{

	public function createGraphic(InvMenu $menu, Player $player) : ?InvMenuGraphic;

	public function createInventory() : Inventory;
}