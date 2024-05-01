<?php

namespace tcustomies\item\component;

class DamageComponent implements ItemComponent {

    public function __construct(private int $value){}

    public function getName(): string {
        return 'damage';
    }

    public function getValue(): int {
        return $this->value;
    }

    public function isProperty(): bool {
        return true;
    }
}