<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;
use App\Jan;
use App\Feb;
use App\Mar;
use App\apr;
use App\May;
use App\Jun;
use App\Jul;
use App\Aug;
use App\Sep;
use App\Oct;
use App\Nov;
use App\Dec;
use App\User;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
	public function inf()
	{
		return view('home');
	}

	/*public function viewinfo()
	{
		$infos = DB::table('decs')
                 ->sum('cost');
        $alls = Cost::all();
		return view('viewinfo', compact('infos', 'alls'));
	}*/

    public function viewinfo1()
    {
        $id = Auth::user()->id;
        $mon = 1;
        $year = date("Y");
        $alls = Users::find($id)->jan->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo2()
    {
        $id = Auth::user()->id;
        $mon = 2;
        $year = date("Y");
        $alls = Users::find($id)->feb->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo3()
    {
        $id = Auth::user()->id;
        $mon = 3;
        $year = date("Y");
        $alls = Users::find($id)->mar->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo4()
    {
        $id = Auth::user()->id;
        $mon = 4;
        $year = date("Y");
        $alls = Users::find($id)->apr->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo5()
    {
        $id = Auth::user()->id;
        $mon = 5;
        $year = date("Y");
        $alls = Users::find($id)->may->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo6()
    {
        $id = Auth::user()->id;
        $mon = 6;
        $year = date("Y");
        $alls = Users::find($id)->jun->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo7()
    {
        $id = Auth::user()->id;
        $mon = 7;
        $year = date("Y");
        $alls = Users::find($id)->jul->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo8()
    {
        $id = Auth::user()->id;
        $mon = 8;
        $year = date("Y");
        $alls = Users::find($id)->aug->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo9()
    {
        $id = Auth::user()->id;
        $mon = 9;
        $year = date("Y");
        $alls = Users::find($id)->sep->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo10()
    {
        $id = Auth::user()->id;
        $mon = 10;
        $year = date("Y");
        $alls = Users::find($id)->oct->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo11()
    {
        $id = Auth::user()->id;
        $mon = 11;
        $year = date("Y");
        $alls = Users::find($id)->nov->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }

    public function viewinfo12()
    {
        $id = Auth::user()->id;
        $mon = 12;
        $year = date("Y");
        $alls = Users::find($id)->dec->where("year", $year);
        return view('viewinfo', compact('alls', 'mon'));
    }



    public function info(Request $request)
    {
        if($request["month"] == 1)
        {
            $info = new Jan;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 2)
        {
            $info = new Feb;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 3)
        {
            $info = new Mar;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 4)
        {
            $info = new Apr;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 5)
        {
            $info = new May;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 6)
        {
            $info = new Jun;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 7)
        {
            $info = new Jul;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 8)
        {
            $info = new Aug;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 9)
        {
            $info = new Sep;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 10)
        {
            $info = new Oct;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else if($request["month"] == 11)
        {
            $info = new Nov;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');
        }
        else
        {
            $info = new Dec;
            $id = Auth::user()->id;
            $info->day = $request["day"];
            $info->month = $request["month"];
            $time = date("Y");
            $time = strtotime($time);
            $year = date("Y", $time);
            $info->year = $year;
            $info->item = $request["item"];
            $info->cost = $request["cost"];
            $info->users_id = $id;
            $info->save();
            $request->session()->flash('success', 'You have successfully added data...');
            return redirect('/home');

        }
    }
}
