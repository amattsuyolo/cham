<?php

namespace App\Repositories;

use App\User;

class UserRepository
{

    private $user;

    public function __construct(User $user)
    {
        $this->user=$user;
    }
    public function updateSingleContent($user_id,$col,$value){
        User::where('id', $user_id)
        ->update([$col =>$value]);
    }


}



