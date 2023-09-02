<?php

class BaseServices {

    public function __contruct(Model $model) {}

    public function get(): Colletion {
        return $this->model->get();
    }

    public function store($data)
    {
        return $this->model->save($data);
    }
}
