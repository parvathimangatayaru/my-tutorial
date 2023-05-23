<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
            <tr style="background-color:blue;color:white;">
                <td>pavan</td>
                <td>kunnathu</td>
                <td>pavankumar@gmail.co0m</td>
            </tr>
        <?php 
        
        $list_of_students = array(
            ["usha","uday",'pavan','kirthika','divya','mohana','anusha','priti','parvathi','prtika','anitha'],
            ["u","u",'kp','k','d','m','a','p','p','p','a'],
            ["usha@gmail.com","uday@gmail.com",'pk@gmail.com','kirthika@gmail.com','divya@gmail.com','mohana@gmail.com','anusha@gmail.com','priti@gmail.com','parvathi@gmail.com','prtika@gmail.com','anitha@gmail.com'],
        
        );
        
        for($i=0;$i<count($list_of_students[0]);$i++){
            $firstname = $list_of_students[0][$i];
            $lastname = $list_of_students[1][$i];
            $email = $list_of_students[2][$i];

            if($email == "anusha@gmail.com"){
                echo "
                <tr style='background-color:pink;color:white;'>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$email</td>
                </tr>
                    ";
            }
            else{

                echo "
                <tr>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$email</td>
                </tr>
                    ";
            }
        }

        
        ?>
    
     
    </tbody>
  </table>
</div>

</body>
</html>


<?php 

// for($i=1; $i<11;$i+=1){
    
//     if($i%2 == 0){
//         echo $i." even";
//         echo "</br>";
//     }
//     elseif($i == 7  or $i ==9){
//         echo $i. "prime";
//     }
//     else{
//         echo $i.' odd';
//         echo "</br>";
//     }
// }


$list_of_students = array("usha","uday",'kirthika','divya','mohana','anusha','priti','parvathi','prtika','anitha');
$key = array_rand($list_of_students);
$name = $list_of_students[$key];

echo "<h1>$name</h1>";

$i=0;
while(true){
    if($i%2 == 0){
        echo $i." even";
        echo "</br>";
    }
    elseif($i == 7  or $i ==9){
        echo $i. "prime";
    }
    else{
        echo $i.' odd';
        echo "</br>";
    }
    if($i==10){
        break;
    }
    $i+=1;

}

for($i=0;$i<count($list_of_students);$i++){
    echo $list_of_students[$i];
    echo "</br>";
}

// foreach($list_of_students as $i){
//     echo "<h2>$i</h2></br>";
// }


$list_of_students = array("stud1" => "usha","stud22" => "uday","stud3" => "kirthika");
foreach($list_of_students as $i){
    echo "<p>$i</p></br>";
}

?>