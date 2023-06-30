<?php

use User as GlobalUser;

    class User 
    {
        //properties 
        public $username;
        protected $email;

        //********overriding properties
        public $role = 'member';
        public function message()
        {
            return "$this->email sent a message";
        }



        //method
        public function addFriend()
        {
            //return 'added a new friend';
            return "$this->email added a new friend";
        }

         //*********constructor
         public function __construct($username, $email)
         {
             $this->username = $username;
             $this->email = $email;
         }

         //magic methods __destruct() and __clone()
         public function __destruct()
         {
            echo "$this->username was removed <br>";
         }
         public function __clone()
         {
            $this->username = $this->username. '(cloned) <br>';
         }





        //GETTER
        public function getEmail()
        {
            return $this->email;
        }

        //SETTER
        public function setEmail($email)
        {
            if(strpos($email,'@') > -1)
            {
                $this->email = $email;
            }
        }


    }

    //inheritance

    class AdminUser extends User
    {
        public $level;

         //overriding properties
         public $role = 'admin';

        public function __construct($username, $email, $level)
        {
            $this->level = $level;
            parent::__construct($username, $email);
        }

        //*******
        public function message()
        {
            return "$this->email ,an admin , sent a message";
        }

    }

        //instantiating a class....these are objects
     $userOne = new User('faith','faith@mistress.co.ke');
     $userTwo = new User('happy','happy@blackie.co.ke');

     $userThree = new AdminUser('otieno','otieno@blackie.co.ke', 5);
    
    

    echo $userOne->role . '<br>';
    echo $userThree->role . '<br>';
    echo $userOne->message() . '<br>';
    echo $userThree->message() . '<br>';

    // unset($userOne);
    $userFour = clone $userOne;
    echo $userFour->username;

    






  

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    
</body>
</html>