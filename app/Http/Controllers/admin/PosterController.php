<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\User;
use App\Poster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posters = Poster::latest()->paginate(10);

        //$users = User::leftJoin('posters', 'users.id', '=', 'posters.user_id')->take(5)->get();

        $posterStat = Poster::get();
              

        // * yangiliklarni statistik activligi bo'yicha

        $posterStatActive = Poster::where('active', '=', '1');
        $posterStatNotActive = Poster::where('active', '=', '0');
        //dd($PosterStatActive->count());


        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        //dd($posters->category->name);
       
        $posterStatApproval = Poster::where('tasdiq', '=', '1');
        $posterStatNotApproval = Poster::where('tasdiq', '=', '0');

        return view('institut.backend.crud.elonlar.elonlar-list', compact(
            'posters',
            //'users',
            'posterStat',
            'posterStatActive',
            'posterStatNotActive',
            'posterStatApproval',
            'posterStatNotApproval'


        ))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        //
    }




    public function approw()
    {
        $posters = Poster::latest()->where('tasdiq', '=', '0')->orderBy("tasdiq")->paginate(10);

        $posterStat = Poster::get();
        
        // * yangiliklarni statistik activligi bo'yicha

        $posterStatActive = Poster::where('active', '=', '1');
        $posterStatNotActive = Poster::where('active', '=', '0');
       


        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $posterStatApproval = Poster::where('tasdiq', '=', '1');
        $posterStatNotApproval = Poster::where('tasdiq', '=', '0');

       

    return view('institut.backend.crud.elonlar.elonlar-list', compact(
        'posterStat',
        'posters',
        'posterStatActive',
        'posterStatNotActive',
        'posterStatNotApproval',
        'posterStatApproval'
        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }


    public function yesapprow()
    {
        $posters = Poster::latest()->where('tasdiq', '=', '1')->orderBy("tasdiq")->paginate(10);

        $posterStat = Poster::get();       

      // * yangiliklarni statistik activligi bo'yicha

      $posterStatActive = Poster::where('active', '=', '1');
      $posterStatNotActive = Poster::where('active', '=', '0');
           // * yangiliklarni statistik tasdiqlanganligi bo'yicha

      $posterStatApproval = Poster::where('tasdiq', '=', '1');
      $posterStatNotApproval = Poster::where('tasdiq', '=', '0');
     

  return view('institut.backend.crud.elonlar.elonlar-list', compact(
      'posterStat',
      'posters',
      'posterStatActive',
      'posterStatNotActive',
      'posterStatNotApproval',
      'posterStatApproval'
      
      ))->with('i',(request()->input('page', 1) -1) *5);
  
    }



    public function activmas()
    {
        $posters = Poster::latest()->where('active', '=', '0')->orderBy("tasdiq")->paginate(10);

        $posterStat = Poster::get();
    
        // * yangiliklarni statistik activligi bo'yicha

        $posterStatActive = Poster::where('active', '=', '1');
        $posterStatNotActive = Poster::where('active', '=', '0');

        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $posterStatApproval = Poster::where('tasdiq', '=', '1');
        $posterStatNotApproval = Poster::where('tasdiq', '=', '0');

        return view('institut.backend.crud.elonlar.elonlar-list', compact(
        'posterStat',
        'posters',       
        'posterStatActive',
        'posterStatNotActive',
        'posterStatNotApproval',
        'posterStatApproval'

        ))->with('i',(request()->input('page', 1) -1) *5);
}
    


    
    public function active()
    {
        $posters = Poster::latest()->where('active', '=', '1')->orderBy("tasdiq")->paginate(10);

        $posterStat = Poster::get();
              
        // * yangiliklarni statistik activligi bo'yicha

        $posterStatActive = Poster::where('active', '=', '1');
        $posterStatNotActive = Poster::where('active', '=', '0');

        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $posterStatApproval = Poster::where('tasdiq', '=', '1');
        $posterStatNotApproval = Poster::where('tasdiq', '=', '0');

        return view('institut.backend.crud.elonlar.elonlar-list', compact(
        'posterStat',
        'posters',       
        'posterStatActive',
        'posterStatNotActive',
        'posterStatNotApproval',
        'posterStatApproval'

        ))->with('i',(request()->input('page', 1) -1) *5);

    }
}