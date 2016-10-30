<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

namespace pocketmine\level\particle;

use pocketmine\math\Vector3;
use pocketmine\network\protocol\DataPacket;

abstract class Particle extends Vector3{

	const TYPE_BUBBLE = 1;
	const TYPE_CRITICAL = 2;
	const TYPE_BLOCK_FORCE_FIELD = 3;
	const TYPE_SMOKE = 4; //TODO: verify
	const TYPE_EXPLODE = 5; //TODO: verify
	const TYPE_WHITE_SMOKE = 6; //TODO: verify
	const TYPE_FLAME = 7;
	const TYPE_LAVA = 8;
	const TYPE_LARGE_SMOKE = 9; //TODO: verify
	const TYPE_REDSTONE = 10; //TODO: verify
	const TYPE_ITEM_BREAK = 11; //TODO: verify
	//12 unknown
	const TYPE_SNOWBALL_POOF = 13;
	const TYPE_HUGE_EXPLODE = 14, TYPE_LARGE_EXPLODE = 14; //TODO: fix this properly
	const TYPE_HUGE_EXPLODE_SEED = 15;
	const TYPE_MOB_FLAME = 16;
	const TYPE_HEART = 17;
	const TYPE_TERRAIN = 18;
	const TYPE_SUSPENDED_TOWN = 19, TYPE_TOWN_AURA = 19;
	const TYPE_PORTAL = 20;
	const TYPE_SPLASH = 21, TYPE_WATER_SPLASH = 21;
	const TYPE_WATER_WAKE = 22;
	const TYPE_DRIP_WATER = 23; //TODO: verify
	const TYPE_DRIP_LAVA = 24; //TODO: verify
	const TYPE_DUST = 25; //TODO: verify
	const TYPE_MOB_SPELL = 26; //TODO: verify
	const TYPE_MOB_SPELL_AMBIENT = 27; //TODO: verify
	const TYPE_MOB_SPELL_INSTANTANEOUS = 28; //TODO: verify
	const TYPE_INK = 29; //TODO: verify
	const TYPE_SLIME = 30;
	const TYPE_RAIN_SPLASH = 31;
	const TYPE_VILLAGER_ANGRY = 32;
	const TYPE_VILLAGER_HAPPY = 33;
	const TYPE_ENCHANTMENT_TABLE = 34;
	const TYPE_TRACKING_EMITTER = 35; //???
	const TYPE_NOTE = 36; //for note blocks
	//37 yet another SpellParticle of some description
	const TYPE_CARROT = 38; //?????

	/**
	 * @return DataPacket|DataPacket[]
	 */
	abstract public function encode();

}
