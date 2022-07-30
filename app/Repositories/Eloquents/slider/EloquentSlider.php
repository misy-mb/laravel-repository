<?php

namespace App\Repositories\Eloquents\slider;

use App\Models\Slider;
use App\Repositories\Interfaces\slider\SliderInterface;

class EloquentSlider implements SliderInterface
{
    /**
     * @var Slider
     */
    private $model;

    /**
     * EloquentTodo constructor.
     * @param Slider $model
     */
    public function __construct(Slider $model)
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
        $slider = $this->getById($id);

        $slider->update($attributes);

        return $slider;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();

        return true;
    }
}
