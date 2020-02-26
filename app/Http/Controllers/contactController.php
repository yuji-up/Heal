<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function insertform() {
        return view('contact');
    }
    public function insert(Request $req) {

        //validation
        $req->validate ([
            'firstname' => 'required|string|max:20',
            'lastname' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|max:255|email',
            'message' => 'required|string|min:2',
        ]);

        // $getstarts = DB::table('my_contacts')
        //     ->join('getstarts', 'my_contacts.email', '=', 'getstarts.email')
        //     ->get();
        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $phone = $req->input('phone');
        $email = $req->input('email');
        $message = $req->input('message');
        $data = array('first_name' => $firstname
            ,'last_name' => $lastname,
            'phone' => $phone,
            'email' =>$email,
            'message' => $message,
        );
        DB::table('my_contacts')->insert($data);
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
        echo '<span>'.$req->input('firstname')." ".$req->input('lastname').'</span>';
        echo '<a href = "/get"> Click here</a> go to back.'.'<br>'.'<hr>';
        echo '</div>';
    }
}
