<?php

namespace  ArnobMonir\AamarPay\core;

use Exception;
use Illuminate\Support\Facades\Http;

class AamarPay
{
    public static function Pay($ammount, $cus_email, $cum_name = 'N/A', $cus_phone = 'N/A', $desc = 'Subscription Package', $cus_add1 = 'N/A', $cus_add2 = 'N/A', $cus_city = 'N/A', $cus_state = 'N/A', $cus_country = 'N/A')
    {
        $fields = array(
            'store_id' => config('aamarpay.store_id'),
            'signature_key' => config('aamarpay.signature'),
            'tran_id' => strtotime(now()),
            'success_url' => config('aamarpay.success_url'),
            'fail_url' => config('aamarpay.fail_url'),
            'cancel_url' => config('aamarpay.cancel_url'),
            'currency' => config('aamarpay.currency'),
            'amount' => $ammount,
            'desc' => $desc,
            'cus_name' => $cum_name,
            'cus_email' => $cus_email,
            'cus_add1' => $cus_add1,
            'cus_add2' => $cus_add2,
            'cus_city' => $cus_city,
            'cus_state' => $cus_state,
            'cus_country' => $cus_country,
            'cus_phone' => $cus_phone,
        );
        $url = config('aamarpay.url');
        $fields_string = http_build_query($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));
        curl_close($ch);
        self::redirect_to_merchant($url_forward);
    }
    static function redirect_to_merchant($url)
    {

?>
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <script type="text/javascript">
                function closethisasap() {
                    document.forms["redirectpost"].submit();
                }
            </script>
        </head>

        <body onLoad="closethisasap();">

            <form name="redirectpost" method="post" action="<?php echo 'https://secure.aamarpay.com/' . $url; ?>"></form>
            <!-- for live url https://secure.aamarpay.com -->
        </body>

        </html>
<?php
        exit;
    }
}
