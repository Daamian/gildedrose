<?php

namespace App;

use App\Updater\ItemFactory;

final class GildedRose implements GildedRoseInterface
{
    const VERSION = 'v2';

    public function updateQuality(Item $item): void
    {
        ItemFactory::create($item)->update($item);
    }
}
