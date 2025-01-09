<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gateways')->delete();
        
        \DB::table('gateways')->insert(array (
            0 => 
            array (
                'id' => 1,
                'form_id' => 0,
                'code' => 101,
                'name' => 'Paypal',
                'alias' => 'Paypal',
                'status' => 1,
                'gateway_parameters' => '{"paypal_email":{"title":"PayPal Email","global":true,"value":"sb-58ira22618401@business.example.com"}}',
                'supported_currencies' => '{"AUD":"AUD","BRL":"BRL","CAD":"CAD","CZK":"CZK","DKK":"DKK","EUR":"EUR","HKD":"HKD","HUF":"HUF","INR":"INR","ILS":"ILS","JPY":"JPY","MYR":"MYR","MXN":"MXN","TWD":"TWD","NZD":"NZD","NOK":"NOK","PHP":"PHP","PLN":"PLN","GBP":"GBP","RUB":"RUB","SGD":"SGD","SEK":"SEK","CHF":"CHF","THB":"THB","USD":"$"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:33:45',
            ),
            1 => 
            array (
                'id' => 2,
                'form_id' => 0,
                'code' => 102,
                'name' => 'Perfect Money',
                'alias' => 'PerfectMoney',
                'status' => 1,
                'gateway_parameters' => '{"passphrase":{"title":"ALTERNATE PASSPHRASE","global":true,"value":"---------------------"},"wallet_id":{"title":"PM Wallet","global":false,"value":""}}',
                'supported_currencies' => '{"USD":"$","EUR":"\\u20ac"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:20:01',
            ),
            2 => 
            array (
                'id' => 3,
                'form_id' => 0,
                'code' => 105,
                'name' => 'PayTM',
                'alias' => 'Paytm',
                'status' => 1,
                'gateway_parameters' => '{"MID":{"title":"Merchant ID","global":true,"value":"-----------"},"merchant_key":{"title":"Merchant Key","global":true,"value":"--------------------"},"WEBSITE":{"title":"Paytm Website","global":true,"value":"example.com"},"INDUSTRY_TYPE_ID":{"title":"Industry Type","global":true,"value":"Retail"},"CHANNEL_ID":{"title":"CHANNEL ID","global":true,"value":"WEB"},"transaction_url":{"title":"Transaction URL","global":true,"value":"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction"},"transaction_status_url":{"title":"Transaction STATUS URL","global":true,"value":"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp"}}',
                'supported_currencies' => '{"AUD":"AUD","ARS":"ARS","BDT":"BDT","BRL":"BRL","BGN":"BGN","CAD":"CAD","CLP":"CLP","CNY":"CNY","COP":"COP","HRK":"HRK","CZK":"CZK","DKK":"DKK","EGP":"EGP","EUR":"EUR","GEL":"GEL","GHS":"GHS","HKD":"HKD","HUF":"HUF","INR":"INR","IDR":"IDR","ILS":"ILS","JPY":"JPY","KES":"KES","MYR":"MYR","MXN":"MXN","MAD":"MAD","NPR":"NPR","NZD":"NZD","NGN":"NGN","NOK":"NOK","PKR":"PKR","PEN":"PEN","PHP":"PHP","PLN":"PLN","RON":"RON","RUB":"RUB","SGD":"SGD","ZAR":"ZAR","KRW":"KRW","LKR":"LKR","SEK":"SEK","CHF":"CHF","THB":"THB","TRY":"TRY","UGX":"UGX","UAH":"UAH","AED":"AED","GBP":"GBP","USD":"USD","VND":"VND","XOF":"XOF"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:40:37',
            ),
            3 => 
            array (
                'id' => 4,
                'form_id' => 0,
                'code' => 107,
                'name' => 'PayStack',
                'alias' => 'Paystack',
                'status' => 1,
                'gateway_parameters' => '{"public_key":{"title":"Public key","global":true,"value":"--------"},"secret_key":{"title":"Secret key","global":true,"value":"----------------"}}',
                'supported_currencies' => '{"USD":"USD","NGN":"NGN"}',
                'crypto' => 0,
                'extra' => '{"callback":{"title": "Callback URL","value":"ipn.Paystack"},"webhook":{"title": "Webhook URL","value":"ipn.Paystack"}}
',
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:19:18',
            ),
            4 => 
            array (
                'id' => 5,
                'form_id' => 0,
                'code' => 108,
                'name' => 'VoguePay',
                'alias' => 'Voguepay',
                'status' => 1,
                'gateway_parameters' => '{"merchant_id":{"title":"MERCHANT ID","global":true,"value":"-------------------"}}',
                'supported_currencies' => '{"USD":"USD","GBP":"GBP","EUR":"EUR","GHS":"GHS","NGN":"NGN","ZAR":"ZAR"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:20:14',
            ),
            5 => 
            array (
                'id' => 6,
                'form_id' => 0,
                'code' => 109,
                'name' => 'Flutterwave',
                'alias' => 'Flutterwave',
                'status' => 1,
                'gateway_parameters' => '{"public_key":{"title":"Public Key","global":true,"value":"----------------"},"secret_key":{"title":"Secret Key","global":true,"value":"-----------------------"},"encryption_key":{"title":"Encryption Key","global":true,"value":"------------------"}}',
                'supported_currencies' => '{"BIF":"BIF","CAD":"CAD","CDF":"CDF","CVE":"CVE","EUR":"EUR","GBP":"GBP","GHS":"GHS","GMD":"GMD","GNF":"GNF","KES":"KES","LRD":"LRD","MWK":"MWK","MZN":"MZN","NGN":"NGN","RWF":"RWF","SLL":"SLL","STD":"STD","TZS":"TZS","UGX":"UGX","USD":"USD","XAF":"XAF","XOF":"XOF","ZMK":"ZMK","ZMW":"ZMW","ZWD":"ZWD"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2021-06-05 17:07:45',
            ),
            6 => 
            array (
                'id' => 7,
                'form_id' => 0,
                'code' => 110,
                'name' => 'RazorPay',
                'alias' => 'Razorpay',
                'status' => 1,
                'gateway_parameters' => '{"key_id":{"title":"Key Id","global":true,"value":"rzp_live_STLvERKRcpalY5"},"key_secret":{"title":"Key Secret ","global":true,"value":"5KDwzm9PaNfZSyElfNb5rSxo"}}',
                'supported_currencies' => '{"INR":"INR"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2024-12-06 01:03:25',
            ),
            7 => 
            array (
                'id' => 8,
                'form_id' => 0,
                'code' => 112,
                'name' => 'Instamojo',
                'alias' => 'Instamojo',
                'status' => 1,
                'gateway_parameters' => '{"api_key":{"title":"API KEY","global":true,"value":"------------"},"auth_token":{"title":"Auth Token","global":true,"value":"---------"},"salt":{"title":"Salt","global":true,"value":"-------"}}',
                'supported_currencies' => '{"INR":"INR"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-11-26 13:30:15',
            ),
            8 => 
            array (
                'id' => 9,
                'form_id' => 0,
                'code' => 503,
                'name' => 'CoinPayments',
                'alias' => 'Coinpayments',
                'status' => 1,
                'gateway_parameters' => '{"public_key":{"title":"Public Key","global":true,"value":"---------------"},"private_key":{"title":"Private Key","global":true,"value":"------------"},"merchant_id":{"title":"Merchant ID","global":true,"value":"----------------"}}',
            'supported_currencies' => '{"BTC":"Bitcoin","BTC.LN":"Bitcoin (Lightning Network)","LTC":"Litecoin","CPS":"CPS Coin","VLX":"Velas","APL":"Apollo","AYA":"Aryacoin","BAD":"Badcoin","BCD":"Bitcoin Diamond","BCH":"Bitcoin Cash","BCN":"Bytecoin","BEAM":"BEAM","BITB":"Bean Cash","BLK":"BlackCoin","BSV":"Bitcoin SV","BTAD":"Bitcoin Adult","BTG":"Bitcoin Gold","BTT":"BitTorrent","CLOAK":"CloakCoin","CLUB":"ClubCoin","CRW":"Crown","CRYP":"CrypticCoin","CRYT":"CryTrExCoin","CURE":"CureCoin","DASH":"DASH","DCR":"Decred","DEV":"DeviantCoin","DGB":"DigiByte","DOGE":"Dogecoin","EBST":"eBoost","EOS":"EOS","ETC":"Ether Classic","ETH":"Ethereum","ETN":"Electroneum","EUNO":"EUNO","EXP":"EXP","Expanse":"Expanse","FLASH":"FLASH","GAME":"GameCredits","GLC":"Goldcoin","GRS":"Groestlcoin","KMD":"Komodo","LOKI":"LOKI","LSK":"LSK","MAID":"MaidSafeCoin","MUE":"MonetaryUnit","NAV":"NAV Coin","NEO":"NEO","NMC":"Namecoin","NVST":"NVO Token","NXT":"NXT","OMNI":"OMNI","PINK":"PinkCoin","PIVX":"PIVX","POT":"PotCoin","PPC":"Peercoin","PROC":"ProCurrency","PURA":"PURA","QTUM":"QTUM","RES":"Resistance","RVN":"Ravencoin","RVR":"RevolutionVR","SBD":"Steem Dollars","SMART":"SmartCash","SOXAX":"SOXAX","STEEM":"STEEM","STRAT":"STRAT","SYS":"Syscoin","TPAY":"TokenPay","TRIGGERS":"Triggers","TRX":" TRON","UBQ":"Ubiq","UNIT":"UniversalCurrency","USDT":"Tether USD (Omni Layer)","USDT.BEP20":"Tether USD (BSC Chain)","USDT.ERC20":"Tether USD (ERC20)","USDT.TRC20":"Tether USD (Tron/TRC20)","VTC":"Vertcoin","WAVES":"Waves","XCP":"Counterparty","XEM":"NEM","XMR":"Monero","XSN":"Stakenet","XSR":"SucreCoin","XVG":"VERGE","XZC":"ZCoin","ZEC":"ZCash","ZEN":"Horizen"}',
                'crypto' => 1,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-10-29 12:59:51',
            ),
            9 => 
            array (
                'id' => 10,
                'form_id' => 0,
                'code' => 506,
                'name' => 'Coinbase Commerce',
                'alias' => 'CoinbaseCommerce',
                'status' => 1,
                'gateway_parameters' => '{"api_key":{"title":"API Key","global":true,"value":"---------"},"secret":{"title":"Webhook Shared Secret","global":true,"value":"----------------"}}',
                'supported_currencies' => '{"USD":"USD","EUR":"EUR","JPY":"JPY","GBP":"GBP","AUD":"AUD","CAD":"CAD","CHF":"CHF","CNY":"CNY","SEK":"SEK","NZD":"NZD","MXN":"MXN","SGD":"SGD","HKD":"HKD","NOK":"NOK","KRW":"KRW","TRY":"TRY","RUB":"RUB","INR":"INR","BRL":"BRL","ZAR":"ZAR","AED":"AED","AFN":"AFN","ALL":"ALL","AMD":"AMD","ANG":"ANG","AOA":"AOA","ARS":"ARS","AWG":"AWG","AZN":"AZN","BAM":"BAM","BBD":"BBD","BDT":"BDT","BGN":"BGN","BHD":"BHD","BIF":"BIF","BMD":"BMD","BND":"BND","BOB":"BOB","BSD":"BSD","BTN":"BTN","BWP":"BWP","BYN":"BYN","BZD":"BZD","CDF":"CDF","CLF":"CLF","CLP":"CLP","COP":"COP","CRC":"CRC","CUC":"CUC","CUP":"CUP","CVE":"CVE","CZK":"CZK","DJF":"DJF","DKK":"DKK","DOP":"DOP","DZD":"DZD","EGP":"EGP","ERN":"ERN","ETB":"ETB","FJD":"FJD","FKP":"FKP","GEL":"GEL","GGP":"GGP","GHS":"GHS","GIP":"GIP","GMD":"GMD","GNF":"GNF","GTQ":"GTQ","GYD":"GYD","HNL":"HNL","HRK":"HRK","HTG":"HTG","HUF":"HUF","IDR":"IDR","ILS":"ILS","IMP":"IMP","IQD":"IQD","IRR":"IRR","ISK":"ISK","JEP":"JEP","JMD":"JMD","JOD":"JOD","KES":"KES","KGS":"KGS","KHR":"KHR","KMF":"KMF","KPW":"KPW","KWD":"KWD","KYD":"KYD","KZT":"KZT","LAK":"LAK","LBP":"LBP","LKR":"LKR","LRD":"LRD","LSL":"LSL","LYD":"LYD","MAD":"MAD","MDL":"MDL","MGA":"MGA","MKD":"MKD","MMK":"MMK","MNT":"MNT","MOP":"MOP","MRO":"MRO","MUR":"MUR","MVR":"MVR","MWK":"MWK","MYR":"MYR","MZN":"MZN","NAD":"NAD","NGN":"NGN","NIO":"NIO","NPR":"NPR","OMR":"OMR","PAB":"PAB","PEN":"PEN","PGK":"PGK","PHP":"PHP","PKR":"PKR","PLN":"PLN","PYG":"PYG","QAR":"QAR","RON":"RON","RSD":"RSD","RWF":"RWF","SAR":"SAR","SBD":"SBD","SCR":"SCR","SDG":"SDG","SHP":"SHP","SLL":"SLL","SOS":"SOS","SRD":"SRD","SSP":"SSP","STD":"STD","SVC":"SVC","SYP":"SYP","SZL":"SZL","THB":"THB","TJS":"TJS","TMT":"TMT","TND":"TND","TOP":"TOP","TTD":"TTD","TWD":"TWD","TZS":"TZS","UAH":"UAH","UGX":"UGX","UYU":"UYU","UZS":"UZS","VEF":"VEF","VND":"VND","VUV":"VUV","WST":"WST","XAF":"XAF","XAG":"XAG","XAU":"XAU","XCD":"XCD","XDR":"XDR","XOF":"XOF","XPD":"XPD","XPF":"XPF","XPT":"XPT","YER":"YER","ZMW":"ZMW","ZWL":"ZWL"}

',
                'crypto' => 0,
                'extra' => '{"endpoint":{"title": "Webhook Endpoint","value":"ipn.CoinbaseCommerce"}}',
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-10-29 12:59:48',
            ),
            10 => 
            array (
                'id' => 11,
                'form_id' => 0,
                'code' => 113,
                'name' => 'Paypal Express',
                'alias' => 'PaypalSdk',
                'status' => 1,
                'gateway_parameters' => '{"clientId":{"title":"Paypal Client ID","global":true,"value":"------------"},"clientSecret":{"title":"Client Secret","global":true,"value":"-----------"}}',
                'supported_currencies' => '{"AUD":"AUD","BRL":"BRL","CAD":"CAD","CZK":"CZK","DKK":"DKK","EUR":"EUR","HKD":"HKD","HUF":"HUF","INR":"INR","ILS":"ILS","JPY":"JPY","MYR":"MYR","MXN":"MXN","TWD":"TWD","NZD":"NZD","NOK":"NOK","PHP":"PHP","PLN":"PLN","GBP":"GBP","RUB":"RUB","SGD":"SGD","SEK":"SEK","CHF":"CHF","THB":"THB","USD":"$"}',
                'crypto' => 0,
                'extra' => NULL,
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2021-05-21 04:31:08',
            ),
            11 => 
            array (
                'id' => 12,
                'form_id' => 0,
                'code' => 114,
                'name' => 'Stripe Checkout',
                'alias' => 'StripeV3',
                'status' => 1,
                'gateway_parameters' => '{"secret_key":{"title":"Secret Key","global":true,"value":"sk_test_51M8Ks2CL65BWuH7eCBcWsLP2yPfWaLtfJVxG3zfii7cCWJE1izM4jkhucmBSm6izmVtSGZyp0JDYYCVmx9E4WmQY004gfnctzD"},"publishable_key":{"title":"PUBLISHABLE KEY","global":true,"value":"pk_test_51M8Ks2CL65BWuH7eju6khGxJMpeeFuw2Rwrjr8UYCz6ZnQ3PiFxb1gVu1i1dBto9MQrnjkBimHkFJgNcqsrJHTak0010kCY41h"},"end_point":{"title":"End Point Secret","global":true,"value":"abcd"}}',
                'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PLN":"PLN","SEK":"SEK","SGD":"SGD"}',
                'crypto' => 0,
                'extra' => '{"webhook":{"title": "Webhook Endpoint","value":"ipn.StripeV3"}}',
                'description' => NULL,
                'created_at' => '2019-09-14 18:44:22',
                'updated_at' => '2022-12-18 13:58:03',
            ),
            12 => 
            array (
                'id' => 49,
                'form_id' => 21,
                'code' => 1000,
                'name' => 'City Bank',
                'alias' => 'city_bank',
                'status' => 1,
                'gateway_parameters' => '[]',
                'supported_currencies' => '[]',
                'crypto' => 0,
                'extra' => NULL,
                'description' => '<p>Please fill carefully</p>',
                'created_at' => '2023-11-24 22:50:06',
                'updated_at' => '2023-11-24 22:50:14',
            ),
        ));
        
        
    }
}