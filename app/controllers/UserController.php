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

    public function showProfile($id) {
        if (Auth::check()) {
            $user = User::find($id);
            $this->layout->content = View::make('profile', array('user' => $user));
        } else {
            return Redirect::to('login');
        }
    }

}
