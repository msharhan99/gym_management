<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gymregistration;
use App\admin;
use App\fee;

class registerController extends Controller
{
    public function register(Request $req)
    {
    	$x = new gymregistration();
    	$x->name = $req->input('name');
    	$x->address = $req->input('address');
    	$x->mobileno = $req->input('mobileno');
    	if($x->save())
    	{
    		echo 
    		"<script>
    			alert('Inserted');
    			window.location='/';
    		</script>
    		";
    	}
    	else
    	{
    		echo 
    		"<script>
    			alert('Error');
    			window.location='/';
    		</script>
    		";
    	}
    }

    public function login(Request $req)
    {
        $un = $req->input('name');
        $pw = $req->input('password');
        $adminx = admin::where('name','=',$un)
                        ->where('password','=',$pw)
                        ->get();
        if(count($adminx)>0)
        {
            $uname = admin::where('name','=',$un)
                        ->where('password','=',$pw)
                        ->value('name');
            session()->put('name', $uname);         
            return redirect('/admininside');  
        }
        else
        {
            echo "
            <script>
            alert('user doesn't exist);
            window.location='/admin1';
            </script>
            ";
        }
    }

    public function logout()
    {
        session()->forget('name');
        session()->flush();
        return redirect('/admin1');
    }

    
     public function fees($id,Request $req)
    {
        $x = new fee();
        $x->user_id = $id;
        $x->fees = $req->input('fees');
        if($x->save())
        {
            echo 
            "<script>
                alert('Inserted');
                window.location='/admininside';
            </script>
            ";
        }
        else
        {
            echo 
            "<script>
                alert('Error');
                window.location='/admininside';
            </script>
            ";
        }
    }
}
