<?php

function bottle($input){

    // Total Khali Bottle
    echo 'Total Khali Bottle : ' . $input . '<br>';


    // Ferot diye notun vora bottle
    $notun = floor($input/3); // 3
    echo '<br>Ferot Diye Notun Vora Bottle : ' . $notun;
    

    // Ferot Deyar Por Khali Bottle
    if(ceil($input/3)>0){
        
        function ferot_deyar_por_khali_ache($input, $notun){

            $cel = ceil($input/3); // 4
            $ferot_deyar_por_khali_ache = $cel-$notun; // 1

            return $ferot_deyar_por_khali_ache;
        }
        
        echo '<br><br>Ferot Deyar Por Khali Bottle : ' . ferot_deyar_por_khali_ache($input, $notun);
    }

  

    if()

    // 
    // 

    // // Output
    // 
    
    // if($notun>0){
    //     // function 
    // }









    echo '<br/><br/><br/><br/>';


//     if($notun != 0){
//         echo '<br/> Hatee : ' . $hatee;


//         $again_Purchase = floor($notun/3);

//         $new_Cel = ceil($notun/3);

//         $new_Hatee = $new_Cel-$again_Purchase;
        
        
//         // Example
//         echo 'new Hatee : ' . $new_Hatee . '<br/>';
//         echo 'new purchase : ' . $again_Purchase;

//         if($new_hate>0 && $again_Purchase>0){
//             $new_new_hate = $again_Purchase+$new_hate+1;

//             echo $new_new_hate;
//         }


        



//         if($again_Purchase>0 && $hatee>0){
//             $myHatee = $again_Purchase+$hatee;

//             echo '</br> Ekhon Last Hatee :' . $myHatee;


//             if($myHatee == 2){
//                 $myHatee += 1;

//                 echo '<br/>Purchasable : ' . $myHatee;
//             }

//         }



//     }


//     //if ()




}

bottle(10);

?>