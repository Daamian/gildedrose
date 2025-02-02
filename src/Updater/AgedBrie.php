<?php

namespace App\Updater;

use App\Item;

class AgedBrie extends AbstractBaseItem
{
    const NAME = 'Aged Brie';

    public function update(Item $item): void
    {
        $this->decreaseSellIn($item);
        $this->increaseQuality($item, $item->sellIn < 0 ? 2 : 1);
    }
}