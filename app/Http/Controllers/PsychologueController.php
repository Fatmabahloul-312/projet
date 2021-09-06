<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psychologue;
use App\Http\Requests;

class PsychologueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psychologues=Psychologue::latest()->paginate(25);
        return view('psychologue.index',compact('psychologues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psychologue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    
    public function store(Request $request)
    {
        $this->validate( $request ,['nom'=>'required',
        'prenom'=>'required','email'=>'required','genre'=>'required','telephone'=>'required','detail'=>'required'
        
       
        

        ]);
        $psychologues = Psychologue::create($request->all());
        return redirect()->route('psychologue.index')
        ->with('success','psychologue added successfully');$this->validate($request ,['nom'=>'required',
        'prenom'=>'required', 'email'=>'required','genre'=>'required','telephone'=>'required','detail'=>'required'
        

        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $psychologues = Psychologue::findOrFail($id);
        return view('psychologue.show',compact('psychologues'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {if (auth()->user()->is_admin == 1){
        $infirmiers = Psychologue::findOrFail($id);
        return view('psychologue.edit',compact('psychologues'));}
        return redirect()->route('psychologue.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id){
        $psychologues = Psychologue::findOrFail($id);
        $psychologues->nom=$request->nom;
        $psychologues->prenom=$request->prenom;
        $psychologues->email=$request->email;     
        $psychologues->genre=$request->genre;
        $psychologues->telephone=$request->telephone;
        $psychologues->detail=$request->detail;
        $psychologues->save();
        return redirect()->route('psychologue.index')
        ->with('success','psychologue update successfully');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {if (auth()->user()->is_admin == 1){
        $psychologues = Psychologue::find($id);
        $psychologues->delete() ;

        return redirect()->route('psychologue.index')
        ->with('success','psychologue deleted successfully ');}
        return redirect()->route('psychologue.index');
    }
    public function search()
    {
       $search_text=$_GET['query'];
        $psychologues =  Psychologue::Where('nom' , 'LIKE' , '%' .  $search_text .'%')
                       ->orWhere('prenom' , 'LIKE' , '%' .  $search_text .'%')->get();

                     

        return view('psychologue.search',compact('psychologues'));}
}
