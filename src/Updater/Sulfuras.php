<?php

namespace App\Updater;

use App\Item;

class Sulfuras extends AbstractBaseItem
{
    const NAME = 'Sulfuras, Hand of Ragnaros';

    public function update(Item $item): void
    {
        $item->quality = 80;
    }
}