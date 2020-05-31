<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Food;
use App\History;
use App\Restaurant;
use App\Restaurant_By_Area;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index ()
    {
    	$area = Area::all();
    	$food = Food::select('food_name')->distinct()->get();
    	
    	return view('search.index')->with('area', $area)
		                                ->with('food', $food);
    }
    
    public function result (Request $request)
    {
    	$result = null;
    	//DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );
	    if($request->area == "Dhaka")
	    {
		    $result = DB::select("select * from restaurants, foods where restaurants.rid = foods.rid and foods.category LIKE ? and foods.price <= ?", [$request->food, $request->price]);
	    }
		else
	    {
		    $result = DB::select("select * from restaurants, foods, restaurant_by_areas, areas where restaurant_by_areas.AID = areas.AID and restaurant_by_areas.RID = restaurants.RID and restaurants.RID = foods.RID and foods.category like ? and foods.price <= ? and areas.area_name = ?", [$request->food, $request->price, $request->area]);
	    }
	    
	    $history = new History();
	    $history->area = $request->area;
	    $history->foodName = $request->food;
	    $history->price = $request->price;
	    
	    $history->save();
	    
	    return view('search.result')->with('result', $result);
    }
}
