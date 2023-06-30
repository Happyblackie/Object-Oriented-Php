<?php 

    class User 
    {
        //properties 
        private $username;
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

        //instantiating a class....these are objects
    $userOne = new User('faith','faith@mistress.co.ke');
    $userTwo = new User('happy','happy@blackie.co.ke');

    //setter
    $userOne->setEmail('mueni@businesswoman.co.ke');

    echo $userOne->getEmail(). '<br>';
    echo $userTwo->getEmail();






  

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials-Getters and Setters</title>
</head>
<body>
    
</body>
</html>