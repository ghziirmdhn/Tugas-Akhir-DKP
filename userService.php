<?php
    class userService
    {
    protected $email;
    protected $password;
    protected $dataUser;
    protected $getRole;

    public function __construct($email, $password){
        $this->dataUser = [
        (object) [
        'email' => "ucup",
        'password' => "1111",
        'role' => "User"
        ],
        (object) [
        'email' => "jaki",
        'password' => "1111",
        'role' => "User"
        ]
        ];
            $this->email = $email;
            $this->password = $password;
    }

        public function login(){
        $user = $this->checkCredentials();
            if($user) {
                $this->getRole = $user->role;
                return $get_data = $user->email;} 
            else {
                return false;
            }
        }
    
        protected function checkCredentials(){
            foreach($this->dataUser as $key => $value) {
            if($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
                return false;
        }
    
        public function getRole(){
            return $this->getRole;
        }
    }
