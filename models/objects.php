<?php

class Store extends Model {
    public function schedule()
    {
        return $this->has_many('Schedule', 'store_id');
    }
}

class Schedule extends Model {

}
