<?php

namespace App\Http\Controllers;

use App\TailorMade\OurOwnCollectible;
use Illuminate\Support\Str;

class InventoryController extends Controller
{
    /**
     *
     * @var array<int, string>
     */
    protected array $inventory = ['animes', 'books', 'movies', 'games'];

    /**
     *
     * @return array<int, string>
     */
    public function __invoke(): array
    {
        return (new OurOwnCollectible($this->inventory))->map(function ($inventoryItem) {

                $inventoryItem = 'I Love ' . Str::upper($inventoryItem);

                return rand(0, 1) ? null : $inventoryItem;

            })->all();
    }

    /**
     *
     * @return array<int, string>
     */
    public function showInventory()
    {
        return $this->inventory;
    }
}
