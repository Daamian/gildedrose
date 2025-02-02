<?php

namespace App\Updater;

use App\Item;

class NormalItem extends AbstractBaseItem
{
    public function update(Item $item): void
    {
        $this->decreaseSellIn($item);
        $this->decreaseQuality($item, $item->sellIn < 0 ? 2 : 1);
    }
}