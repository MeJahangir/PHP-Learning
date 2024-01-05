
    <?php
      $variable1 = 10;
      $variable2 = 20;
      $variable3 = 30;
      
      echo "{$variable1}, {$variable2}, {$variable3}\n";
      echo "{$variable1}, {$variable2}, {$variable3}\n";
     
    
      $variable1 = "fast";
      $variable2 = "medele";
      $variable3 = "last";

      $sum = $variable1 . " " . $variable2 . $variable3;
      echo "The sum is: " . $sum;

      $a = 4;
      while ($a <= 10) {
        echo "hello bangladesh $a<br>";
        $a++;
      }
      $counter = 1;

      while ($counter <= 5) {
          echo "Count: $counter<br>";
          $counter++;
      }
      for ($i=0; $i <= 100; $i++) { 
        echo $i;
      }

      $test = array('jahangir', 'alam', 'joy', 'rakib');
      echo $test[1];