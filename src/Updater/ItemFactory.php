<?php

namespace App\Updater;

use App\Item;

class ItemFactory
{
    public static function create(Item $item): ItemInterface
    {
        return match ($item->name) {
            AgedBrie::NAME => new AgedBrie(),
            Sulfuras::NAME => new Sulfuras(),
            BackstagePasses::NAME => new BackstagePasses(),
            default => new NormalItem(),
        };
    }
}