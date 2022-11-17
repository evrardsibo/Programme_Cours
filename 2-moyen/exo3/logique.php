<?php 
    
    $dog = [['nom' => 'Mina',
             'age' => 2,
             'type' => 'chien'],
             [
            'nom' => 'Hocket',
            'age' => 6,
            'type' => 'chien'
             ]
             ];
    $cat = [['nom' => 'Tiya',
             'age' => 7,
             'type' => 'chat'],
             [
            'nom' => 'Milo',
            'age' => 4,
            'type' => 'chat'
             ]
             ]; 
             
     $all = [$dog, $cat];
     echo '------------- <br>';
    function all()
    {
        global $all;
        foreach($all as $value)
        {
             if(is_array($value))
             {
                 foreach($value as $valu)
                 {
                     if(is_array($valu))
                     {
                         foreach($valu as $k => $v)
                         {
                             echo $k . ' : ' . $v . '<br>';
                         }
                     }
                     echo '------------- <br>';
                     
                 }
             }
        }
    }

   function type($type)
   {
     global $all;
     
      foreach($all as $value)
      {
        if(is_array($value))
        {
            foreach ($value as $valu)
            {
                if($valu['type'] === $type )
                {
                    foreach ($valu as $k => $v)
                    {
                        echo $k . ' : ' . $v . '<br>';
                    }
                    echo '------------- <br>';
                }
            }
        }
      }
   }
?>