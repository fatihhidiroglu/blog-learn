<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\KayitRequest;

class Validation extends Controller
{
    public function get() {
      return view('kayit');
    }
    public function post(KayitRequest $request) {
      $isValidate=$request->validated();
      if ($isValidate) {
        foreach ($request->all() as $key => $value) {
          if ($value != $request->_token) {
            echo $key .': '. $value . '<br>';
          }
        }
      } else {
        return 'hatalı';
      }
      // $validationRules=[
      //     'ad'=>'required | min:3',
      //     'email'=>'required | email',
      //     'sifre'=>'required | min:3 | confirmed'
      // ];
      // // $request->validate([
      // //   'ad'=>'required | min:3',
      // //   'email'=>'required | email',
      // //   'sifre'=>'required | min:3 | confirmed'
      // // ]);
      // $rules=Validator::make($request->all(),$validationRules, [
      //   'min'=>':attribute minimum :min karakter olmalıdır'
      // ]);
      // if ($rules->fails()) {
      //     return redirect()->back()->withErrors($rules)->withInput();
      // } else {
      //   return "kuralları geçti";
      // }

    }
}
