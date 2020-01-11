# Blockchain-Api-exchange-rate-Php
Simple Blockchain Api for exchange rate in different currency.

Convert Fiat Amount to Bitcoin
------------------------------

Get the amount of Bitcoin that could be purchased for a given fiat amount. Returns a float.
```php
  $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;
```

Complete code
------------------------------

```php
  $amount = 10000;
  $currency = "USD";

  $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;

  $json = file_get_contents($url);
  $data = json_decode($json, TRUE); 


<ul>
   <li>Price: <?=$data ?> BTC
</ul>
```
Using a function
------------------------------
you can tweak the function below to your taste
```php

     public function btcprice()
       {
        
          $url = "https://blockchain.info/tobtc?currency=".$currency."&value=".$amount;
        
          $json = file_get_contents($url);
          $data = json_decode($json, TRUE);
          
          return $data;
       }
 ```
