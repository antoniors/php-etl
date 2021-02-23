<?php

namespace Marquine\Etl;

class Tap extends Step
{

    /**
     * The callback for the transformation.
     *
     * @var callable
     */
    public $callback;

    /**
     * Load the given row.
     *
     * @param  \Marquine\Etl\Row  $row
     * @return void
     */
    public function tap(Row $row)
    {
        if (is_callable($this->callback)) {
            call_user_func($this->callback, $row);
        }
    }
}
