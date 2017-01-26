<?php

namespace App\Http\Controllers\User;
use Session;
use Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
 
  class CategoriesController extends Controller
  {
 	
 	public function __construct()
     {
         // Middleware
         $this->middleware('sentinel.auth');
         $this->middleware('sentinel.access:categories.create', ['only' => ['create', 'store']]);
         $this->middleware('sentinel.access:categories.view', ['only' => ['index', 'show']]);
         $this->middleware('sentinel.access:categories.update', ['only' => ['edit', 'update']]);
         $this->middleware('sentinel.access:categories.destroy', ['only' => ['destroy']]);
     }
      /**
       * Display a listing of the resource.
       *
=======
use App\Models\Sections;
use App\Models\Categories;
use App\Models\Users;
use App\Models\CategorieUser;



class CategoriesController extends Controller
{
	
	
	public function __construct()
    {
        // Middleware
        $this->middleware('sentinel.auth');

    }
    /**
     * Display a listing of the resource.
     *
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
     * @return \Illuminate\Http\Response
     */
    public function index()
	
    {
<<<<<<< HEAD
        $user_categories=category::orderBy('name','desc'->get()
        return view('user.categories.index', 'user_categories'=>$user_categories);
=======
		
		$categories = Categories::all();
		
		
        return view('user.categories.index', ['categories' => $categories]);
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
    	$sections = sections::all();
		
        return view('user.categories.create', ['sections' => $sections]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		
		
		
		
		 // Unos u tablicu categories
        $categories = new Categories();
        $categories->name = $request->name;
		$categories->sections_id = $request->sections_id;
        $categories->save();
		
		// Unos u pivot tablicu users_categories
		
	    $user = Sentinel::getUser()->id;
		
		$users_categories = new CategorieUser();
		$users_categories->user_id = $user;
		$users_categories->categorie_id = $categories->id;
		$users_categories->save();
		
		
		// return na list
		
      
       return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
