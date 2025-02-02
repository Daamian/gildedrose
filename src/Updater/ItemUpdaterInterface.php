<?php

namespace App\Updater;

use App\Item;

interface ItemUpdaterInterface
{
    public function update(Item $item): void;
}