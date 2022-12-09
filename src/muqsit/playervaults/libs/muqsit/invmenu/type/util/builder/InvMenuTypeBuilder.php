<?php

declare(strict_types=1);

namespace muqsit\playervaults\libs\muqsit\invmenu\type\util\builder;

use muqsit\playervaults\libs\muqsit\invmenu\type\InvMenuType;

interface InvMenuTypeBuilder{

	public function build() : InvMenuType;
}