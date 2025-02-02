<?php

namespace App;

class GildedRoseFactory
{
    public static function create(string $version = GildedRose::VERSION): GildedRoseInterface
    {
        return match ($version) {
            GildedRoseLegacy::VERSION => new GildedRoseLegacy(),
            default => new GildedRose(),
        };
    }
}