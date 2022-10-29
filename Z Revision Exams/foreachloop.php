<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style></style>
</head>
<body>

    <?php

    $array =array(
        array("user_ID"=>1,"first_name"=>"Maryanne","last_name"=>"wanjiru","user_email"=>"mary@gmail.com","user_status"=>"active"),
        array("user_ID"=>3,"first_name"=>"James","last_name"=>"Bond","user_email"=>"bond@gmail.com","user_status"=>"active"),
        array("user_ID"=>4,"first_name"=>"Titus","last_name"=>"Peters","user_email"=>"peters@gmail.com","user_status"=>"active"),
    );
  
    print_r($array);
  
     

    
    ?>

    <table>
      <thead>
        <tr>
            <th>user id</th>
            <th>First name</th>
            <th>last Name</th>
            <th>Email</th>
            <th>Status</th>
       

        </tr>
        </thead>
        <?php
        foreach($array as $data){
         
      
 
        ?>
<tbody>
        <tr>

            <td><?php echo $data['user_ID'];?></td>
            <td><?php echo $data['first_name'];?></td>
            <td><?php echo$data['last_name'];?></td>
            <td><?php echo $data['user_email'];?></td>
            <td><?php echo $data['user_status'];?></td>
            
        </tr>
        <br>
        </tbody>
    </table>
    <?php
      } 
    ?>
</body>
</html>
