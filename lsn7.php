<?php

use User as GlobalUser;

    class User 
    {
        //properties 
        public $username;
        private $email;

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

        public function __construct($username, $email, $level)
        {
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }

        //instantiating a class....these are objects
    // $userOne = new User('faith','faith@mistress.co.ke');
    // $userTwo = new User('happy','happy@blackie.co.ke');

    $userThree = new AdminUser('otieno','otieno@blackie.co.ke', 5);
    
    //setter
    // $userOne->setEmail('mueni@businesswoman.co.ke');

    // echo $userOne->getEmail(). '<br>';
    // echo $userTwo->getEmail();

    echo $userThree->username . '<br>';
    echo $userThree->getEmail() .'<br>';
    echo $userThree->level .'<br>';

    






  

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials-Inheritance</title>
</head>
<body>
    
</body>
</html>