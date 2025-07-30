<?php

namespace App\Filters;

class ProjectFilter extends QueryFilter {

    public function wall_material($wall_material) {
        if  (!empty($wall_material) && $wall_material !== "%")
            $this->builder->where("wall_material", "=", $wall_material);
    }

    public function floors($floors) {
        if  (!empty($floors) && $floors !== "%")
            $this->builder->where("floors", "=", $floors);
    }

    public function amperage($amperage) {
        if  (!empty($amperage))
            $this->builder->where("amperage", ">", $amperage - procent_calc($amperage, config('select_range.amperage_percent')) )->Where("amperage", "<", $amperage + procent_calc($amperage, config('select_range.amperage_percent')) );
    }

    public function clem_location($clem_location) {
        if  ( empty($clem_location) ) return;
        if  ( $clem_location === "%" ) return;

        $q_list = [];

        if ($clem_location === "Прямая") $q_list = [1, 4];
        if ($clem_location === "Обратная") $q_list = [0, 3];

        $this->builder->whereIn("clem_location", $q_list);
    }

    public function width($width) {

        if  (!empty($width) && $width !== "%")
            $this->builder->where("width", ">", $width-config('select_range.size_minus'))->Where("width", "<", $width+config('select_range.size_plus'));
    }

    public function height($height) {

        if  (!empty($height) && $height !== "%")
            $this->builder->where("height", ">", $height-config('select_range.size_minus'))->Where("height", "<", $height+config('select_range.size_plus'));
    }

    public function length($length) {
        if  (!empty($length) && $length !== "%")
            $this->builder->where("length", ">", $length-config('select_range.size_minus'))->Where("length", "<", $length+config('select_range.size_plus'));
    }

    public function order($order) {
        if  (empty($order) || $order === "%") return;

        if ($order == "Сначала дорогие")
            $this->builder->orderBy('price', "DESC");

        if ($order == "Сначала дешевые")
            $this->builder->orderBy('price', "ASC");

        if ($order == "Сначала большей ёмкости")
            $this->builder->orderBy('volume', "DESC");

        if ($order == "Сначала меньшей ёмкости")
            $this->builder->orderBy('volume', "ASC");

    }

}
