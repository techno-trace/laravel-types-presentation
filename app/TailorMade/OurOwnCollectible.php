<?php

namespace App\TailorMade;

/**
 * @template YKey of array-key
 * @template YValue
 */

class OurOwnCollectible {

    /** @var array<YKey, YValue> */
    protected array $items = [];

    /**
     * @param array<YKey, YValue> $items
     */
    public function __construct($items) {
        
        $this->items = $items;
    }

    /**
     * @return self<YKey, YValue>
     */
    public function map(): self
    {
        $keys = array_keys($this->items);

        $items = array_map(fn ($key) => $this->items[$key], $keys);

        return new self(array_combine($keys, $items));   
    }

    /**
     * @return array<YKey, YValue>
     */
    public function all()
    {
        return $this->items;
    }
}