<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Illuminate\Support\Str;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Proyect::all();
        return view('dashboard.projects.projects', ['projects' => $projects]);
    }

    public function indexWeb()
    {
        $projects = Proyect::all();
        return view('web.proyects', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.projects.projectsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Proyect();
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->img = $request->file('img')->store('/');
        $project->description = $request->description;
        $project->content = $request->content;
        $project->status = $request->status;

        $project->user_id = 1;

        if($request->hasFile('img')){
            $request->file('img')->store('proyects','public');
        }

        // return $request;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Proyect::where('slug','=', $slug)->firstOrFail();
        
        return view('web.proyect',['project' => $project]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Proyect::find($id);
        return view('dashboard.projects.projectsEdit', ['project' => $project]);
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
        $project = Proyect::find($id);
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->img = $request->file('img')->store('/');
        $project->description = $request->description;
        $project->content = $request->content;
        $project->status = $request->status;

        $project->user_id = 1;

        if($request->hasFile('img')){
            $request->file('img')->store('proyects','public');
        }

        // return $request;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Proyect::destroy($id);

        return redirect()->route('projects.index');
    }
}
