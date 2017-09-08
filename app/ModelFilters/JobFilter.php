<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class JobFilter extends ModelFilter {

    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relatedModel => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function title($title) {
        return $this->where('title', 'LIKE', "$title%")
                        ->where('active', '=', TRUE);
    }

    public function description($description) {
        return $this->where('description', 'LIKE', "$title%")
                        ->where('description', '=', TRUE);
    }
    
}
