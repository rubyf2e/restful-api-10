<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CurrencyConverterController extends Controller
{
    // 範例
    // ?source=USD&target=JPY&amount=$1,525
	  public function currencyConverter(Request $request)
	  {
        $currencies = json_decode('{
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
        }', true)['currencies'];
        $symbol = ['TWD' => '$','JPY' => '¥','USD' =>  '$'];

        $data = $request->collect();
        $httpStatusCode = 400;
        $msg = [
            'msg' => 'error: ',
        ];

        if (!Arr::exists($data, ['source', 'target', 'amount'])) {
            $msg['msg'] .= '資料不齊全';

            goto End;
        }

        if (!isset($currencies[$data['source']]) 
            || !isset($currencies[$data['source']][$data['target']])
            || !isset($symbol[$data['source']]) 
        ) {
            $msg['msg'] .= '查無匯率';

            goto End;
        }

        $sourceCurrencies = $currencies[$data['source']];
        $sourceCurrencySymbol = $symbol[$data['source']];
        $targetCurrency = (float) $sourceCurrencies[$data['target']];
        $data['amount'] = str_replace($sourceCurrencySymbol, '', $data['amount']);
        $data['amount'] = str_replace(',', '', $data['amount']);

        if (!is_numeric($data['amount'])) {
            $msg['msg'] .= '資料錯誤';

            goto End;
        } 

        $amount = number_format(round($data['amount'] * $targetCurrency, 2), 2);
        $httpStatusCode = 200;
        $msg = [
            'msg' => 'success',
            'amount' => $symbol[$data['target']] . $amount,
        ];

        End:
        return response()->json($msg, $httpStatusCode);
    }

}
