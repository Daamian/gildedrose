<?php

namespace App;

interface GildedRoseInterface
{
    public function updateQuality(Item $item): void;
}