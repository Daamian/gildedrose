<?php

namespace App\Updater;

use App\Item;

class BackstagePasses extends AbstractBaseItem
{
    public function update(Item $item): void
    {
        $this->decreaseSellIn($item);

        if ($item->sellIn < 0) {
            $item->quality = 0;
            return;
        }

        $increment = 1;
        if ($item->sellIn < 10) $increment = 2;
        if ($item->sellIn < 5) $increment = 3;

        $this->increaseQuality($item, $increment);
    }
}