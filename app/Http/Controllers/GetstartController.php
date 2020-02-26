<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Getstart;

class GetstartController extends Controller
{
    public function get ()
    {
        return view('get-start');
    }
    public function start(Request $request)
    {

        $request->validate ([
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
            'date' => 'required|max:30',
            'email' => 'required|string|max:191|unique:getstarts,email',
            'phone' => 'required|string|max:191|min:9|unique:getstarts',
            'password' => 'required|string|min:8',
            're_password' => 'required','string|min:8',
        ]);

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $date = $request->input('date');
        $gender = $request->input('gender');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $re_password = $request->input('re_password');

        if ($password==$re_password)
        {
            $data = array('first_name' => $fname,
                'last_name' => $lname,
                'date_of_birth' => $date,
                'gender' => $gender,
                'phone' => $phone,
                'email' =>$email,
                'password' => bcrypt($password),
                're_password' => bcrypt($re_password)
            );
            DB::table('getstarts')->insert($data);
            echo "<style>
                * {
                    margin: 0;
                    padding: 0;
                }
                .user {
                    text-align: center;
                }
                a {
                    text-decoration: none;
                    list-style: none;
                }
                hr {
                    margin-top: 25px;
                }
            </style>";
            echo '<div class="user">';
            echo '<h1>Welcome</h1>';
            echo '<span>'.$request->input('fname')." ".$request->input('lname').'</span>';
            echo '<a href = "/get"> Click here</a> go to back.'.'<br>'.'<hr>';
            echo view('logout');
            echo '</div>';
        }
        else {
            echo '<style>
                div {
                    text-align: center;
                    width: 100%;
                    height: 65px;
                    background: pink;
                }
                p {
                    padding-top: 20px;
                    color: red;
                }
            </style>';
            echo '<div>';
            echo '<p>! Password Error</p>';
            echo '</div>';
        }
        // $getstart = new Getstart;
        // $getstart= Input::all();

        // $getstart->phone = Input::get('phone');
        // $getstart->email = Input::get('email');
        // $getstart->password = Hash::make(Input::get('password'));
        // $getstart->save();
        // return Redirect::back();
    }
    public function logout()
    {
        DB::table('getstarts')->select('id')->delete();
        return redirect('home-page')->with('info', 'User logged out 
        successfully');
    }
}
