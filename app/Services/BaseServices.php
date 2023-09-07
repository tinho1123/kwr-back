<?php

use Illuminate\Database\Eloquent\Model;

class BaseServices {

    public function __contruct(Model $model) {}

    public function get(array $where = []): Colletion {
        return $this->model->where($where)->get();
    }

    public function insert(array $data): bool
    {
        return $this->model->save($data);
    }


}
