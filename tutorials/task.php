        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
        <body>
                                                                                                                                                                                                                                                             
        <?php
       

        $info[] = [ 'Name' => 'Ibrahim', 'Age' => '21', 'Dev' => 'PHP', 'Class' => 'Junior'  ];

        $info[] = [ 'Name' => 'Muzammil', 'Age' => '25', 'Dev' => 'Laravel', 'Class' => 'Senior '];

        $info[] = [ 'Name' => 'Moooezz ', 'Age' => '30', 'Dev' => 'Python','Class' => 'Senior '];

        $info[] = [ 'Name' => 'Affan Bhai ', 'Age' => '32', 'Dev' => 'SQL','Class' => 'Senior '];

         ?>

        <table>

        <tr>
        <td>Name</td>
        <td>Age</td>                                           
        <td>Programming</td>
        <td>Designation</td>
        </tr>

        <?php


        foreach ($info as $value){
            echo $value['Name'];
            
            
        };


       
// list("Name" => $Name, "Age" => $Age,"Dev" => $Dev, "Class" => $Class )

     
        // $one[2]
    // echo "<pre>";
    //     print_r($info[2]['Name']);


        
   







           ?>
</table>

          </body>
                                                                                                                                                                                                                                                                                                                                                                                                                                        