<?php

namespace App\Repositories\Eloquents\slider;

use App\Models\Slider;
use App\Repositories\Interfaces\slider\SliderInterface;
use Illuminate\Support\Facades\File;

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
//      $this->model->create($attributes);
        $slider = new $this->model;
        $slider->title = request()->input('title');
        $slider->subtitle = request()->input('subtitle');
        $slider->description = request()->input('description');
        $slider->link = request()->input('link');
        // image
        if(request()->hasfile('thumbnail'))
        {
            $destination = 'storage/slider/'.$slider->thumbnail;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = request()->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/slider/', $filename);
            $slider->thumbnail = $filename;
        }
        $slider->save($attributes);
        return $slider;
    }

    public function update($id, array $attributes)
    {
        $slider = $this->getById($id);
        $slider->title = request()->input('title');
        $slider->subtitle = request()->input('subtitle');
        $slider->description = request()->input('description');
        $slider->link = request()->input('link');
        // image
        if(request()->hasfile('thumbnail'))
        {
            $destination = 'storage/slider/'.$slider->thumbnail;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = request()->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/slider/', $filename);
            $slider->thumbnail = $filename;
        }
        $slider->update($attributes);
        return $slider;
    }

    public function delete($id)
    {
        $slider = $this->getById($id);
        //img
        $destination = 'storage/slider/'.$slider->thumbnail;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        return true;
    }
}
