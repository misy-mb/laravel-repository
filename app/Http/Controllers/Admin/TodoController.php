<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Repositories\Interfaces\todo\TodoInterface;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * @var TodoInterface
     */
    private $todo;

    /**
     * TodoController constructor.
     */
    public function __construct(TodoInterface $todo)
    {
        $this->todo = $todo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $todo = $this->todo->getAll();
        return view('admin.pages.todo.index',[
            'todo'=> $todo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $todo = $this->todo->create($request->input());
        return redirect()->route('todo.index')->with('message','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = $this->todo->getById($id);
        return view('admin.pages.todo.show',['todo'=> $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = $this->todo->getById($id);
        return view('admin.pages.todo.edit',['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->todo->update($id,$request->input());
        return redirect()->route('todo.index')->with('message','Todo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->todo->delete($id);
        return redirect()->route('todo.index')->with('delete','Todo deleted successfully');

    }
}
