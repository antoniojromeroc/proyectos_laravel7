<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        /*$portafolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];*/
        /*$portafolio = Project::get();*/
        $portafolio = Project::paginate(3);
        return view('portafolio', compact('portafolio'));
    }

    /*public function index(Request $request)*/
    public function index()
    {
        //
        $portafolio = Project::paginate(8);
        return view('projects.index', compact('portafolio'));
    }

    //  Este es el modo de cargar datos de manera rudimentaria
    /*public function show($id)
    {
        //
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }*/
    //  Este es el modo de cargar datos usando el ROUTE MODEL BINDING
    public function show(Project $project)
    {
        //
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        //
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        //
        /*$fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);*/
        /*Project::create($fields);*/
        Project::create($request->validated());

        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito.');
    }

    public function edit(Project $project)
    {
        //
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        //
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    public function destroy(Project $project)
    {
        //
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}
