<?php
namespace App\Modules\Category\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Request\CategoryRequest;

class CategoryController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function index(Request $request){
        $category = Category::all();
        return view('Category::index',[
            'category' => $category,
        ]);
    }

    public function create(){
        return view('Category::create');
    }

    public function store(CategoryRequest $request){
            dd($request);
    }
}