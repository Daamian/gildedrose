<?php

namespace App\Updater;

use App\Item;

interface ItemInterface
{
    public function update(Item $item): void;
}