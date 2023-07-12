
## 提供匯率轉換的 API

[GET]  /api/currencyConverter?source={$source}&target={$target}&amount={$amount} 

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
