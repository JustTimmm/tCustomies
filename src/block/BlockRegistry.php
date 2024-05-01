<?php

namespace tCustomies\block;

use tCustomies\item\CreativeInventoryInfo;
use pocketmine\math\Vector3;
use pocketmine\utils\SingletonTrait;

class BlockRegistry {
    use SingletonTrait;

    public function register(
        string $class,
        string $identifier,
        string $texture,
        int $solid = Model::SOLID,
        string $geometry = "geometry.block",
        $category = CreativeInventoryInfo::CATEGORY_ALL,
        $group = CreativeInventoryInfo::NONE
    ): void {
        $material = new Material(
            Material::TARGET_ALL,
            $texture,
            Material::RENDER_METHOD_ALPHA_TEST
        );
        $creative = new CreativeInventoryInfo(
            $category,
            $group
        );
        $model = new Model(
            [$material],
            $geometry,
            new Vector3(-8, 0, -8),
            new Vector3(16, 16, 16),
            $solid
        );
        CustomiesBlockFactory::getInstance()->registerBlock(
            static fn () => new $class(),
            $identifier,
            $model,
            $creative
        );
    }
}