<?php

namespace App\Repositories\Eloquents\permission;

use App\Models\Permission;
use App\Repositories\Interfaces\permission\PermissionInterface;

class EloquentPermission implements PermissionInterface
{
    /**
     * @var Permission
     */
    private $model;

    /**
     * EloquentTodo constructor.
     * @param Permission $model
     */
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $todo = $this->getById($id);

        $todo->update($attributes);

        return $todo;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();

        return true;
    }
}
