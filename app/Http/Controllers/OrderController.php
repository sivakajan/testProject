<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\MyTestMail;

use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function save(Request $request)
    {
        $this->validate($request,[
             'username'=>'required|min:6',
             'email'=>'required|email',
             'password'  => 'required | min:8|regex:/[A-Z]/| regex:/[@$!%*#?&]/',
             'password_confirm' => 'required|same:password',
             'nicno' => 'required|min:10 | regex:/^[0-9]{9}[A-Za-z]$/ ',
             'checkbox' =>'required',
             'telephone'=>'required| min:10  ',
             'address'=>'required'
            //  'phone'=>'regex:"^(?:0|94|\\+94)?(?:(11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|912)(0|2|3|4|5|7|9)|7(0|1|2|5|6|7|8)\\d)\\d{6}$'

         ]);

         $order=new order();
         $order->Fname=$request->Fname;
         $order->Lname=$request->Lname;
         $order->username=$request->username;
         $order->email=$request->email;
         $order->password=Hash::make($request->password);
         $order->nicno=$request->nicno;
         $order->telephone=$request->telephone;

         if($order->save()){

            $list=$request->pack;

            if (in_array("package1", $list)) {
                $pack=new package();
                $pack->name='package1';
                $pack->count=$request->pack1;
                $pack->use_id=$order->id;
                $pack->save();
            }
            if (in_array("package2", $list)) {
                $pack=new package();
                $pack->name='package2';
                $pack->count=$request->pack2;
                $pack->use_id=$order->id;
                $pack->save();
            }
            if (in_array("package3", $list)) {
                $pack=new package();
                $pack->name='package3';
                $pack->count=$request->pack3;
                $pack->use_id=$order->id;
                $pack->save();
            }

            // return "saved";
             $this->emails($request->email,$order->id);
             return redirect()->back()->with('status', 'save successfully and mail also sent.');


         }

         return "not saved";



    }


    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',



        ]);

            // $data= User::get();
             $data= order::where(['email'=>$request->email])->first();
             if(!$data ||!Hash::check($request->password, $data->password))
             {
               return redirect('log');
             }

            else{

                // Session(['key' => $request->email]);
                Session::put('user',$data);
                // $user=Session::get('user');
                return redirect('dash');

                // return $request->email;
            }

    }


    public function dashboard(Request $request){

        $data = $request->Session()->get('user')['id'];
        $user=$request->Session()->get('user');
        $value=package::where('use_id',$data)->get();

        return view('dashboard',['value'=>$value,'user'=>$user]);
    }


    public function emails($email,$id) {

        $user=order::where('id',$id)->first();
        $orders=package::where('use_id',$id)->get();

        $details = [
            'title' => 'Your Order Details From Shoing Site',
            'body' =>$user->username,
            'nicno'=>$user->nicno,
            'telephone'=>$user->telephone,
            'order'=>$orders

        ];

        \Mail::to($email)->send(new MyTestMail($details));
        return "ok send";
     }



}
