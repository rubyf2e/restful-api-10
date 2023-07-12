## 提供匯率轉換的 API

[GET]  /api/currencyConverter?source={$source}&target={$target}&amount={$amount} 
      

### 匯率資料
```
{
    "currencies": {
        "TWD": {
            "TWD": 1,
            "JPY": 3.669,
            "USD": 0.03281
            },
        "JPY": {
            "TWD": 0.26956,
            "JPY": 1,
            "USD": 0.00885
            },
        "USD": {
            "TWD": 30.444,
            "JPY": 111.801,
            "USD": 1
        }
    }
}
```


##### 輸入範例:
```
?source=USD&target=JPY&amount=$1,525
```

##### 輸出範例:
```
{
    "msg": "success",
    "amount": "¥170,496.53"
}
```

#### Postman 執行成功結果

<img width="772" alt="截圖 2023-07-13 上午2 48 19" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/e42bc621-5bb2-4b61-9fca-b75e1e022eaa">      
       
     

#### Postman 執行失敗結果

##### source 資料錯誤
<img width="642" alt="截圖 2023-07-13 上午2 50 42" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/1261aa0a-148a-41f7-8e89-7736232a1328">       
        
     
##### target 資料錯誤
<img width="712" alt="截圖 2023-07-13 上午2 57 30" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/3b52572b-f754-48f3-bd26-3d7e58007fb8">         

      
##### amount 貨幣符號與 source 不符
<img width="683" alt="截圖 2023-07-13 上午2 49 36" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/e6ba2500-f543-4c8b-9309-71108c4d886b">        
     

     
##### amount資料錯誤
<img width="686" alt="截圖 2023-07-13 上午2 57 39" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/0ca2be69-c657-426f-9790-2f0088f24be5">        
       

     
##### amount資料錯誤
<img width="672" alt="截圖 2023-07-13 上午2 57 50" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/cfaed585-8669-4200-a467-314f4330b141">       
        
  
       
