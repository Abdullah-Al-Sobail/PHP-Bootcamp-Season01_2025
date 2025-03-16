<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="./formdata.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        <label for="">email</label>
        <input type="text" name="email" class="form-control">
        <input type="submit" value="submit" class="btn btn-primary mt-2 w-100">
    </form>
</body>
</html>

<?php

//     $cars = [];
//     $cars[5] = "Volvo";
//     $cars[15] = "Toyota";
//     $cars[16] = "BMW";
//     // $cars[1] = "Ford";
// //      echo "<pre>";
// //     // //print_r($cars[2]);
// //    print_r($cars);
// //      echo "</pre>";

//     // for($i = 0; $i<count($cars); $i++){
//     //     echo $cars[$i]."<br>";
//     // }
//     // foreach($cars as $item ){
//     //     echo "$item <br>";
//     // }
//     array_push($cars,"New Item");

//     var_dump($cars);

//  $cars = [];
//  $cars['brand'] = 'Ford';
//  $cars['Year'] = 2025;
//  echo "<pre>";
//  //print_r($cars['Model']);
//  print_r($cars);
//  echo "</pre>";
// foreach($cars as $name=>$item){
//     echo "$name : $item <br>";
// }

// $student_info = ["name"=>"Sakib","Gender"=>"Male","language"=>[
//     "Bangla","English"
// ],['Good Student']
    
// ];

// $cars = ["volvo","BMW",
//     "Ford1",[1964,2025,["new Model"=>'regular',"old Model"=>"Customaized"]],
//     ["old",'new'],"New Car"];
// echo "<pre>";
// print_r($cars);
// print_r($cars[3][2]['old Model']);
// echo "</pre>";
// $array=["name"=>"xyz","age"=>20,"Gender"=>"male"];
// ;
// var_dump(array_diff($array,['xyz']));
//  $cars = ["Volvo","BMW","Honda","Toyota"];
// // //array_splice($cars,1,1);
// // unset($cars[1]);
// //array_pop($cars);
// array_shift($cars);
// var_dump($cars);
// $text = "This is just a simple text";
// function test(){
//     $x = "This is inside function";
//     echo $GLOBALS['text'];
// }
// $y = "This is variable y";
// //test();
//var_dump($GLOBALS);




?>