<?php

declare(strict_types=1);

namespace muqsit\playervaults\libs\muqsit\invmenu\type\util;

use muqsit\playervaults\libs\muqsit\invmenu\type\util\builder\BlockActorFixedInvMenuTypeBuilder;
use muqsit\playervaults\libs\muqsit\invmenu\type\util\builder\BlockFixedInvMenuTypeBuilder;
use muqsit\playervaults\libs\muqsit\invmenu\type\util\builder\DoublePairableBlockActorFixedInvMenuTypeBuilder;

final class InvMenuTypeBuilders{

	public static function BLOCK_ACTOR_FIXED() : BlockActorFixedInvMenuTypeBuilder{
		return new BlockActorFixedInvMenuTypeBuilder();
	}

	public static function BLOCK_FIXED() : BlockFixedInvMenuTypeBuilder{
		return new BlockFixedInvMenuTypeBuilder();
	}

	public static function DOUBLE_PAIRABLE_BLOCK_ACTOR_FIXED() : DoublePairableBlockActorFixedInvMenuTypeBuilder{
		return new DoublePairableBlockActorFixedInvMenuTypeBuilder();
	}
}