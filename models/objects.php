<?php

class Store extends Model {
    public $days;

    /**
     * @return Schedule[]
     */
    public function schedules()
    {
        if (!isset($this->days)) {
            $this->days = $this->has_many('Schedule', 'store_id')->find_many();
        }
        return $this->days;
    }
}

class Schedule extends Model {
    public function dayc() {
        $lib = explode(',', ',日,月,火,水,木,金,土');
        return $lib[$this->day];
    }
}
