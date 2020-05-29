<?php

namespace App\Http\Controllers;

use App\Admin;
use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Charts;
use function MongoDB\BSON\toJSON;

class AdminController extends Controller
{
    public function index (Request $request)
    {
    	return view('home.index');
    }
    
    public function searchHistory ()
    {
        //$history = DB::table('history')->get();
	    $history = History::all();
        
        return view('history.index')->with('history', $history);
    }
    
    public  function adminList ()
    {
        $adminList = Admin::all();
        
        return view('home.adminList')->with('adminList', $adminList);
    }
    
    public function show (Request $request, $aid)
    {
    	$admin = Admin::find($aid);
    	
    	return view('home.profile')->with('admin', $admin);
    }
	
	public function edit (Request $request, $aid)
	{
		$admin = Admin::find($aid);
		
		return view('home.adminEdit')->with('admin', $admin);
	}
    
    public function update (Request $request, $aid)
    {
        $admin = Admin::find($aid);
        
        $admin->username    = $request->username;
        $admin->type        = $request->type;
        
        $admin->save();
        
        return redirect()->route('admin.adminList');
    }
    
    public function destroy (Request $request, $aid)
    {
    	Admin::destroy($aid);
    	
    	return redirect()->route('admin.adminList');
    }
    
    public function statistics ()
    {
        $histories = History::all();
	
	    $chart = Charts::database($histories, 'bar', 'highcharts')
		                ->title("Searches By Area")
		                ->elementLabel("Total Searches")
		                ->dimensions(1000, 500)
		                ->responsive(true)
	                    ->groupBy('area');
	
	    $chart1 = Charts::database($histories, 'bar', 'highcharts')
		                ->title("Amount Ranges")
		                ->elementLabel("Total Searches")
		                ->dimensions(100, 500)
		                ->responsive(true)
		                ->groupBy('price');
	    
	    
	    return view('home.stats')->with('chart', $chart)->with('chart1', $chart1);
    }
}
