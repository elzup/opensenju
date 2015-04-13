<?php

class Store extends Model
{
    public $days;
    public $today;

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

    /**
     * @return Schedule
     */
    public function schedule_today()
    {
        if (!isset($this->today)) {
            $d = date('w');
            $res = array_filter($this->schedules(), function ($v) use ($d) {
                return $v->day == $d;
            });
            $this->today = !empty($res) ? array_pop($res) : NULL;
        }
        return $this->today;
    }

    public function category_i()
    {
        return Store::category_to_i($this->category);
    }

    public static function category_to_i($category_id)
    {
        $lib = explode(',', ',cutlery,shopping-cart');
        return $lib[$category_id];
    }

    public function is_active(&$least = NULL)
    {
        $t = date('Hi');
        $today = $this->schedule_today();
        if (empty($today)) {
            return false;
        }
        if ($today->end_time > 2400 && $t + 2400 < $today->end_time) {
            $t += 2400;
        }
        if ($today->start_time < $t && $t < $today->end_time) {
            $least = time_diff($t, $today->end_time);
            return true;
        }
        $least = time_diff($t, $today->start_time);
        return false;
    }
}

class Schedule extends Model
{
    public function day_c()
    {
        return $this::day_to_c($this->day);
    }

    public static function day_to_c($day_id)
    {
        $lib = explode(',', '日,月,火,水,木,金,土');
        return $lib[$day_id];
    }

    public function start_time_str()
    {
        $ts = split_time($this->start_time);
        return sprintf("%02d:%02d", $ts[0], $ts[1]);
    }

    public function end_time_str()
    {
        $ts = split_time($this->end_time);
        return sprintf("%02d:%02d", $ts[0], $ts[1]);
    }
}
