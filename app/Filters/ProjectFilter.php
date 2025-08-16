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

    public function extension($extension) {
        if  (!empty($extension) && $extension !== "%" && $extension !== "no")
            $this->builder->whereNotNull("extension");
    }


    public function area_from($area_from) {
        if  (!empty($area_from))
            $this->builder->where("total_area", ">=", $area_from);
    }

    public function area_to($area_to) {
        if  (!empty($area_to))
            $this->builder->where("total_area", "<=", $area_to);
    }

    public function size($size) {
        if  (!empty($size))
            $this->builder->where("plan_dimensions", $size);
    }

}
