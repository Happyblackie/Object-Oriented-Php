<?php 

    class User 
    {
        //properties 
        public $username;
        public $email;

        //*********constructor
        public function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
        }

        //method
        public function addFriend()
        {
            //return 'added a new friend';
            return "$this->email added a new friend";
        }


    }

        //instantiating a class....these are objects
    $userOne = new User('faith','faith@mistress.co.ke');
    $userTwo = new User('happy','happy@blackie.co.ke');



    //accessing public properties above
    echo $userOne->username .'<br>';
    echo $userOne->email .'<br>';
    //accessing public properties above
    echo $userOne->addFriend() . '<br>';

   
  

    echo $userTwo->username .'<br>';
    echo $userTwo->email .'<br>';
    //accessing public properties above
    echo $userTwo->addFriend() . '<br>';





  

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials-Constructors</title>
</head>
<body>
    
</body>
</html>