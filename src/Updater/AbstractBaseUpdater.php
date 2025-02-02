<?php

namespace App\Updater;

use App\Item;

abstract class AbstractBaseUpdater implements ItemUpdaterInterface
{
    abstract public function update(Item $item): void;

    protected function decreaseQuality(Item $item, int $amount = 1): void
    {
        $item->quality = max(0, $item->quality - $amount);
    }

    protected function increaseQuality(Item $item, int $amount = 1): void
    {
        $item->quality = min(50, $item->quality + $amount);
    }

    protected function decreaseSellIn(Item $item): void
    {
        $item->sellIn--;
    }
}