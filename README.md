## 提供匯率轉換的 API
##### 轉換金額將四捨五入到小數點第二位,且轉換後的金額顯示格式以逗點分隔做為千分位表示,如 123,456.78
##### 目前支援匯率：TWD、JPY、USD

[GET]  /api/currencyConverter?source={$source}&target={$target}&amount={$amount}      
      
 
驗證成功 Http Status Code = 200;       
驗證失敗 Http Status Code = 400;     


      

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

<img width="772" alt="截圖 2023-07-13 上午2 48 19" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/ff48a6a2-3086-4417-aced-5a8674d9ef69">      


       
     

#### Postman 執行失敗結果

##### source 資料錯誤

<img width="642" alt="截圖 2023-07-13 上午2 50 42" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/2e18a117-5572-4340-835f-2ff96aece378">     


##### target 資料錯誤         
<img width="712" alt="截圖 2023-07-13 上午2 57 30" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/5a51e83b-534f-4842-a282-dfdf22a5c529">    


      
##### amount 貨幣符號與 source 不符   
     
<img width="683" alt="截圖 2023-07-13 上午2 49 36" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/f1abbaaa-b46a-48fb-801a-8459970ec72e">    


     
##### amount資料錯誤
<img width="686" alt="截圖 2023-07-13 上午2 57 39" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/4b4b4b54-8272-4bf5-a500-ee558dc2db7f">     
     
##### amount資料錯誤     
<img width="672" alt="截圖 2023-07-13 上午2 57 50" src="https://github.com/rubyf2e/restful-api-10/assets/33201416/c87c5d0c-07e2-4be3-bd3a-2c3f096daf29">     


       
