<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Kafedralar;
use App\UserRole;
use App\Role;
use App\ArticleCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->orderBy("created_at")->paginate(10);

        $articleStat = Article::get();
        //dd($users->getRoleNames());
        //$user = $request->user();
       

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');
       


        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $articleStatApproval = Article::where('tasdiq', '=', '1');
        $articleStatNotApproval = Article::where('tasdiq', '=', '0');
   



    return view('institut.backend.crud.yangiliklar-crud.articles-list', compact(
        'articleStat',
        'articles',        
        'articleStatActive',
        'articleStatNotActive',
        'articleStatNotApproval',
        'articleStatApproval'
        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$role = UserRole::get();
        $user = Auth::user();
        $category = ArticleCategory::get();
        $kafedralar = Kafedralar::get();
       
        $users = DB::table('users')
        //->join('users_roles', 'users.id', '=', 'users_roles.user_id')
       ->join('roles', 'users.id', '=', 'roles.id')            
        ->select('users.*', 'roles.*')
        ->where('users.id', '=',  $user->id )
        ->get();
        //dd($users);  


        return view('institut.backend.crud.yangiliklar-crud.articles-create', compact( 'users','category', 'kafedralar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
       //dd($request);
        $request->validate([
            'title' => 'required|unique:articles,title',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:articles,slug',
            'user_id' => 'required',
           // 'kafedra_id' => 'required',
            //'tasdiq' => 'required',
            'active' => 'required',
            

        ],
    
         [
            'title.required' => 'Yangilik nomini yozishingiz shart.',
            'slug.required'  => 'Yangilik slug (saytdagi manzilini) yozishingiz shart.',
            'image.required'  => 'Yangilik asosiy suratini yuklang.',
            'category_id.required'  => "Yangilik bo'limini tanlang.",
            'description.required'  => "Asosiy yangilik contentini yozing.",
            'title.unique'  => "Bu nomlanishdagi yangilik, saytda mavjud. Iltimos nomlanishi o'zgartiring.",
            'slug.unique'  => "Bu nomlanishdagi yangilik manzili, saytda mavjud.",

        ]
    
    );
       
       
        

            // Suratni yuklash kodi
            $image = $request->file('image');

            $new_name =  rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('yangiliklar'), $new_name);
        
            $new_name = 'yangiliklar/'.$new_name;

            // tugadi

        //dd($new_name);
      $yangilik = new Article([
        
        'title' => $request->get('title'),
        'slug' => $request->get('slug'),
        'image' => $new_name ,
        'description' => $request->get('description'),
        'category_id' => $request->get('category_id'),
        'user_id' => $request->get('user_id'),
        'kafedra_id' => $request->get('kafedra_id'),
        'active' => $request->get('active')

    ]);

    //dd($yangilik);
    $yangilik->save();
      
         return redirect()->route('yangiliklar')->with('success', "Siz yozgan yangilik bazaga kiritildi.");
         
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    

    public function approw()
    {
        $articles = Article::latest()->where('tasdiq', '=', '0')->orderBy("tasdiq")->paginate(10);

        $articleStat = Article::get();
        
        // * yangiliklarni statistik activligi bo'yicha

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');
       


        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $articleStatApproval = Article::where('tasdiq', '=', '1');
        $articleStatNotApproval = Article::where('tasdiq', '=', '0');

       

    return view('institut.backend.crud.yangiliklar-crud.articles-list', compact(
        'articleStat',
        'articles',
        'articleStatActive',
        'articleStatNotActive',
        'articleStatNotApproval',
        'articleStatApproval'
        
        ))->with('i',(request()->input('page', 1) -1) *5);
    }


    public function yesapprow()
    {
        $articles = Article::latest()->where('tasdiq', '=', '1')->orderBy("tasdiq")->paginate(10);

        $articleStat = Article::get();       

      // * yangiliklarni statistik activligi bo'yicha

      $articleStatActive = Article::where('active', '=', '1');
      $articleStatNotActive = Article::where('active', '=', '0');
           // * yangiliklarni statistik tasdiqlanganligi bo'yicha

      $articleStatApproval = Article::where('tasdiq', '=', '1');
      $articleStatNotApproval = Article::where('tasdiq', '=', '0');
     

  return view('institut.backend.crud.yangiliklar-crud.articles-list', compact(
      'articleStat',
      'articles',
      'articleStatActive',
      'articleStatNotActive',
      'articleStatNotApproval',
      'articleStatApproval'
      
      ))->with('i',(request()->input('page', 1) -1) *5);
  
    }



    public function activmas()
    {
        $articles = Article::latest()->where('active', '=', '0')->orderBy("tasdiq")->paginate(10);

        $articleStat = Article::get();
    
        // * yangiliklarni statistik activligi bo'yicha

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');

        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $articleStatApproval = Article::where('tasdiq', '=', '1');
        $articleStatNotApproval = Article::where('tasdiq', '=', '0');

        return view('institut.backend.crud.yangiliklar-crud.articles-list', compact(
        'articleStat',
        'articles',       
        'articleStatActive',
        'articleStatNotActive',
        'articleStatNotApproval',
        'articleStatApproval'

        ))->with('i',(request()->input('page', 1) -1) *5);
}
    


    
    public function active()
    {
        $articles = Article::latest()->where('active', '=', '1')->orderBy("tasdiq")->paginate(10);

        $articleStat = Article::get();
              
        // * yangiliklarni statistik activligi bo'yicha

        $articleStatActive = Article::where('active', '=', '1');
        $articleStatNotActive = Article::where('active', '=', '0');

        // * yangiliklarni statistik tasdiqlanganligi bo'yicha

        $articleStatApproval = Article::where('tasdiq', '=', '1');
        $articleStatNotApproval = Article::where('tasdiq', '=', '0');

        return view('institut.backend.crud.yangiliklar-crud.articles-list', compact(
        'articleStat',
        'articles',       
        'articleStatActive',
        'articleStatNotActive',
        'articleStatNotApproval',
        'articleStatApproval'

        ))->with('i',(request()->input('page', 1) -1) *5);

    }
}
