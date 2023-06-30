<?php 

    // class Weather {
    //     public $tempConditions = ['cold','mild','warm'];
    //     public function celciusToFrenheit($c)
    //     {
    //         return $c * 9/5 + 32;
    //     }
    //     public function determineTempCondition($f)
    //     {

    //     }
    // }

    // // $weatherinstance = new Weather();
    // // print_r($weatherinstance->tempConditions);



    class Weather {
        public static $tempConditions = ['cold','mild','warm'];

        public static function celciusToFrenheit($c)
        {
            return $c * 9/5 + 32;
        }
        public static function determineTempCondition($f)
        {
            if($f < 40)
            {
                return self::$tempConditions[0];
            }elseif($f < 70)
            {
                return self::$tempConditions[1];
            }else{
                return self::$tempConditions[2];
            }
        }
    }

    print_r(Weather::$tempConditions);
    echo '<br>';
    echo Weather::celciusToFrenheit(30) .'<br>';
    echo Weather::determineTempCondition(120);

    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static property</title>
</head>
<body>
    
</body>
</html>