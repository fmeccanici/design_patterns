<?php

require_once 'Sub.php';

class TurkeySub extends Sub {

    protected function addPrimaryToppings()
    {
        var_dump('add some turkey');
        return $this;
    }
}
