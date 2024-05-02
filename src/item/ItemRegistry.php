<?php

namespace tCustomies\item;

use pocketmine\item\Item;
use pocketmine\utils\SingletonTrait;

class ItemRegistry {
    use SingletonTrait;

    public function register(
        Item $class,
        string $identifier
    ): void {
        CustomiesItemFactory::getInstance()->registerItem(
            $class,
            $identifier
        );
    }
}