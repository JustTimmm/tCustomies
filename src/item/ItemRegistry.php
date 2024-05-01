<?php

namespace tcustomies\item;

use pocketmine\utils\SingletonTrait;

class ItemRegistry {
    use SingletonTrait;

    public function register(
        string $class,
        string $identifier,
        string $name
    ): void {
        CustomiesItemFactory::getInstance()->registerItem(
            $class,
            $identifier,
            $name
        );
    }
}