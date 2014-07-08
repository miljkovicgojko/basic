<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author stevan
 */
class UserController extends BaseController {

   public function showProfile($id) 
    {
        if (Auth::check()) {
            $user = User::find($id);
            $this->layout->content = View::make('profile', array('user' => $user));
        } else {
            return Redirect::to('login');
        }
    }
    
    public function signup() 
    {
        $today = date("Y-m-d H:i:s");
        
        $userdata = array(
            'first_name' => Input::get('first_name'),
            'last_name' => Input::get('last_name'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
        );
       $rules = array(
         'first_name'=>'alpha_num|max:50',
         'last_name'=>'alpha_num|max:50',
         'email'=>'required|unique:users,email|email',
         'password'=>'required|alpha_num|between:6,15|confirmed',
         'password_confirmation'=>'required|alpha_num|between:6,15',
       );
       $validator = Validator::make($userdata, $rules);
       
       if($validator->fails())
       {
           return Redirect::back()->withInput()->withErrors($validator);
       }
       else
       {
           $user = new User;
           $user->first_name = Input::get('first_name');
           $user->last_name = Input::get('last_name');
           $user->email = Input::get('email');
           $user->password = Hash::make(Input::get('password'));
          
           $user->save();
       }
       return Redirect::to('login');
    }
    
}
