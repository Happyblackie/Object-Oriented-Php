<?php 

    class User 
    {
        //properties 
        public $username = 'faith';
        public $email = 'faith@mistress.co.ke';

        //method
        public function addFriend()
        {
            //return 'added a new friend';
            return "$this->email added a new friend";
        }


    }

        //instantiating a class....these are objects
    $userOne = new User();
    $userTwo = new User();

    //accessing public properties above
    echo $userOne->username .'<br>';
    echo $userOne->email .'<br>';
    //accessing public properties above
    echo $userOne->addFriend() . '<br>';

    //setting new property for user two
    $userTwo->username = 'happy';
    $userTwo->email = 'happy@blackie.co.ke';

    echo $userTwo->username .'<br>';
    echo $userTwo->email .'<br>';
    //accessing public properties above
    echo $userTwo->addFriend() . '<br>';





    //finding out whih are methods and properties
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials-Properties & Methods</title>
</head>
<body>
    
</body>
</html>