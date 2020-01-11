<?php  

  $amount = 10000;
  $currency = "USD";

  $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;

  $json = file_get_contents($url);
  $data = json_decode($json, TRUE);


//using functions
    // public function btcprice()
    // {
        
    //       $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;
        
    //       $json = file_get_contents($url);
    //       $data = json_decode($json, TRUE);
          
    //       return $data;
    // } 

 
?>

<ul>
   <li>Price: <?=$data ?> BTC
</ul>