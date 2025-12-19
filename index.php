
   
<!DOCTYPE html>
<html>
   <body>
        <h2>User Registeration</h2>
        <form method="POST" action="submit.php" enctype="multipart/form-data">
            Name : <input type="text" name="name" placeholder="Enter Name..." required/><br><br>
            Email : <input type="email" name="email" placeholder="Enter Email..." required/> <br><br>
            Password : <input type="password" name="password" placeholder="Enter Password..." required/><br><br>
            Image : <input type="file" name="fileToUpload" /><br><br>
            <button type="submit"><h3>Submit</h3></button>
        </form>
   </body>
</html>

    <!-- Star Pattern
    for($i=1;$i<=10;$i++){

        for($k=1;$k<=$i;$k++){
            echo " ";
        }
        for($j=10;$j>=$i;$j--){
            
            echo " *";
        }
        
        echo "\n";
    }
    for($z=1;$z<=10;$z++){

        for($m=10;$m>=$z;$m--){
            echo " ";
        }
        for($l=1;$l<=$z;$l++){  
            
            if($z==1 && $z==10){
                for($x=1;$x=(2 * $z -1);$x++){
                    echo " *";
                }
            }else {
                echo " ";
            }
        }
        echo "\n";
    }


    
    String Reverse
    $string ="Hello World!";
    $reversed = strrev($string);
    echo $reversed;
    Array reverse
    $array =array(1,2,3,4,5);
    $arrRev= array_reverse($array);
    print_r($arrRev);

    Validate email
    $email = 'seemanoj1980@gmail.com';
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email Valid";
    }else{
        echo "Invalid!";
    }
    echo "\n";

    Validate Number
    $number = 7018537763;
    if(preg_match('/^[6-9]\d{9}$/',$number)){
        echo "Valid Number";
    }else{
        echo "Invalid";
    }

    Duplicate in array
    $dup = array(1,1,2,3,4,4,5,6,6);
    $dupArray = array_diff_key($dup , array_unique($dup));
    print_r($dupArray);

    Prime number
    
    echo "Enter a number to know is it Prime:";
    $num = (int)readline();
    if($num <= 1 ){
        echo "$num is not prime.";
    }
    $isPrime = true;
    for($i=2;$i<=sqrt($num);$i++){
        if($i % $num == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime){
        echo "$num is a prime number.";
    }else{
        echo "$num not a prime";
    }

    $arr = array(12,20,1,50,2);
    print_r($arr);
    $sorted = array();
    for($i=0;$i<count($arr);$i++){
        for($j=$i+1;$j<count($arr);$j++){
            $temp = $arr[$i] ;
            if($arr[$i]>$arr[$j]){
                $arr[$i] = $arr[$j];
                $arr[$j] =$temp;
                // $sorted = 
            }
        }

    }
    print_r($arr);

    
    $num = 3;
    $isPrime = false;
    for($i=2;$i<=$num;$i++){
        
        if($num % $i == 0){
            $isPrime = true;
            // print_r($i);
            break;
        }

    }

    if($isPrime){
        print_r("Not a Prime Number");
    }
    else{
        print_r("Prime Number");
    } -->

    

