<?php

namespace App\Updater;

use App\Item;

class Sulfuras extends AbstractBaseItem
{
    public function update(Item $item): void
    {
        $item->quality = 80;
    }
}