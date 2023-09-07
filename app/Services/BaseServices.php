<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class BaseServices {
    private Model $_model;

    public function setModel(Model $model) {
        $this->_model = $model;
    }

    public function get(array $where = []): Colletion {
        return $this->_model->where($where)->get();
    }

    public function insert(array $data): bool
    {
        return $this->_model->save($data);
    }


}
