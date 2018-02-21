<?php

class UsersController extends Controller {

    public function typography()
    {
        $result = User::query();

        if (Input::has('workText'))
        {
            $typograf = new EMTypograph();
            $typograf->set_text(Input::get('workText'));
        }

        return View::make('welcome.blade.php')
            ->with('result', $result);
    }

    

}