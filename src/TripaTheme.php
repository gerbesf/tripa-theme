<?php

namespace Gerbesf\TripaTheme;

class TripaTheme
{

    public $user_id = null;
    public $user_name;
    public $email;

    public function readToken( $token ){
        $this->user_id = $token->user_id ;
        $this->user_name = $token->name ;
        $this->email = $token->email;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getUserName(){
        return $this->user_name;
    }

    public function getUserEmail(){
        return $this->email;
    }

}
