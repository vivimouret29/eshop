<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Evenement $evenement)
    {
        $res = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'text' => 'required',
            'tags' => 'required',
            'file' => 'required',
        ])->validate();
        $request->file('mp3')->storeAs(
            '',
            $request->file('mp3')->getClientOriginalName()
        );

        Auth::user()->evenements()->create($res);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $Evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        $name_orga = User::where('id', $evenement->user_id)->get()->first();
        return view('evenements.show', [
            'name_orga' => $name_orga,
            'evenement' => $evenement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit', [
            'evenement' => $evenement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        Validator::make($request->all(), [
            'title' => 'required|max:255',
            'text' => 'required',
            'tags' => 'required',
            'file' => 'required',
        ])->validate();

        $evenement->title = $request->title;
        $evenement->date = $request->date;
        $evenement->text = $request->text;
        $evenement->tags = $request->tags;
        $evenement->file = $request->file;
        $evenement->url_image = $request->url_image;
        $evenement->save();

        return redirect()->route('home')->with('success', 'Evenement Modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evenement::where('id', $id)->delete();

        return redirect()->route('home');
    }
}
