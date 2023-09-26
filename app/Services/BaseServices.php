<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class BaseServices {
    private Model $_model;

    public function __construct(Model $model = null) {
        self::setModel($model);
    }

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

    public function update(array $data, array $where): bool {
        return $this->_model->where($where)->update($data);
    }

    public function delete(int $id) {
        return $this->_model->where(['id' => $id])->delete();
    }


}
