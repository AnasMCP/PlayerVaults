<?php

declare(strict_types=1);

namespace muqsit\playervaults\libs\muqsit\invmenu\type\graphic\network;

use muqsit\playervaults\libs\muqsit\invmenu\session\InvMenuInfo;
use muqsit\playervaults\libs\muqsit\invmenu\session\PlayerSession;
use pocketmine\network\mcpe\protocol\ContainerOpenPacket;

interface InvMenuGraphicNetworkTranslator{

	public function translate(PlayerSession $session, InvMenuInfo $current, ContainerOpenPacket $packet) : void;
}