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

    public function get_category_str() {

    }

    public function get_category_icon_id() {

    }
}

class Schedule extends Model {
    public function dayc() {
        $lib = explode(',', ',日,月,火,水,木,金,土');
        return $lib[$this->day];
    }

    public function start_time_str() {
        return sprintf("%02d:%02d", floor($this->start_time / 100), $this->start_time % 100);
    }

    public function end_time_str() {
        return sprintf("%02d:%02d", floor($this->end_time / 100), $this->end_time % 100);
    }
}
