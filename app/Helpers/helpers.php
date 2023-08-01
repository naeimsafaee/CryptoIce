<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;
use Twilio\Rest\Client;

if (!function_exists('Kavenegar')) {

    function Kavenegar($phone, $message, $country_code, $override = false) {

        if ($country_code == "98" && false) {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.kavenegar.com/v1/" . config('constants.SMS_API') . "/verify/lookup.json",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => [
                    'receptor' => "0" . $phone,
                    'token' => $message,
                    'template' => "cryptooice",
                ],
            ]);

            /* curl_setopt_array($curl, [
                 CURLOPT_URL => "https://api.kavenegar.com/v1/" . config('constants.SMS_API') . "/sms/send.json",
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING => "",
                 CURLOPT_MAXREDIRS => 10,
                 CURLOPT_TIMEOUT => 30,
                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST => "POST",
                 CURLOPT_POSTFIELDS => [
                     'receptor' => $phone,
                     'message' => $message,
                 ],
             ]);*/
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

            return $response;
        } else {

            $message = "CryptooICE Verification Code: " . PHP_EOL . $message;

            $twilioConfig = config('services.twilio');

            $twilio = new Client($twilioConfig['twilio_account_sid'], $twilioConfig['twilio_auth_token']);

            if(substr($country_code,0 , 1) != "+"){
                $country_code = '+' . $country_code;
            }

            $verification = $twilio->verify->v2->services($twilioConfig["twilio_service_sid"])
                ->verifications
                ->create($country_code . $phone, "sms");

//            die(json_encode($verification->sid));

            /*\App\Models\TempSms::query()->create([
                'VE' => $verification->sid,
                'phone' => $phone
            ]);*/

            \App\Models\Client::query()->where('phone' , $phone)->update([
                'VE' =>  $verification->sid
            ]);

            session(['phone_code' => $verification->sid]);

//            return $verification->sid;

            /*$twilioClient->messages->create($country_code . $phone, [
                "from" => $twilioConfig['twilio_number'],
                "body" => str_replace("<br>", "", $message),
            ]);*/
            return;
        }

    }
}

if (!function_exists('fa_number')) {
    function fa_number($number, $flip = false) {
        if (empty($number)) {
            return '۰';
        }

        $en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        $fa = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        if ($flip) {
            return str_replace($fa, $en, $number);
        } else {
            return str_replace($en, $fa, $number);
        }

    }
}

if (!function_exists('json_printer')) {
    function json_printer($data) {
        $html = '<div class="tablesimpleresponsive">
          <table class="tablesimple" style="min-width:auto">
            <thead>
              <tr>
                <th>' . __('hotdesk.read_table_title') . '</th>
                <th>' . __('hotdesk.read_table_info') . '</th>
              </tr>
            </thead>
            <tbody>';
        foreach($data as $keydata => $dataof) {
            $html .= '<tr>
                <td>' . $keydata . '</td>
                <td>';
            if (is_array($dataof)) {
                $html .= json_printer($dataof);
            } else {
                try {
                    $decrypted = Crypt::decryptString($dataof);
                    if (is_serialized_string($decrypted)) {
                        $decrypted = unserialize($decrypted);
                        if (is_object($decrypted)) {
                            $html .= json_printer($decrypted);
                        }

                    }
                } catch(Illuminate\Contracts\Encryption\DecryptException $e) {
                    $decrypted = $dataof;
                }
                if (!is_object($decrypted)) {
                    $html .= '<span>' . $decrypted . '</span>';
                }

            }
            $html .= '</td>
              </tr>';
        }
        $html .= '</tbody>
          </table>
      </div>
    </div>';
        return $html;
    }
}

function is_serialized_string($string) {
    return ($string == 'b:0;' || @unserialize($string) !== false);
}

if (!function_exists('_response')) {
    /**
     * @param null $data
     * @param string|null $message
     * @param bool $status
     * @param int $code
     * @return JsonResponse
     */
    function _response($data = null, string $message = null, bool $status = true, $code = 200): JsonResponse {
        return response()->json([
            "data" => $data ?? [],
            "message" => $message ?? "",
            "status" => $status,
        ], $code ?? 200);
    }
}

if (!function_exists('get_image')) {
    function get_image($image) {
        if (!isset($image) || $image == "") {
            return "";
        }

        if (substr_count($image, 'http') == 0) {
            if (substr_count($image, 'storage') > 0) {
                if (substr_count($image, '/storage') > 0) {
                    $image = config('app.url') . $image;
                } else {
                    $image = config('app.url') . '/' . $image;
                }

            } else {
                $image = config('app.url') . '/storage/' . $image;
            }
        }

        return preg_replace("/ /", "%20", $image);
    }
}

if (!function_exists("watermarkPhoto")) {

    function watermarkPhoto(string $originalFilePath, string $filePath2Save, string $watermark_path) {

        //        $watermark_path = 'photos/watermark.png';
        //        if(File::exists($watermark_path)){
        if (Storage::disk('public')->exists($watermark_path)) {
            $watermarkImg = Image::make(Storage::disk("public")->get($watermark_path));
            $img = Image::make(Storage::disk("public")->get($originalFilePath));
            $wmarkWidth = $watermarkImg->width();
            $wmarkHeight = $watermarkImg->height();

            $imgWidth = $img->width();
            $imgHeight = $img->height();

            $x = 0;
            $y = 0;
            while($y <= $imgHeight) {
                $img->insert(Storage::disk("public")->get($watermark_path), 'top-left', $x, $y);
                $x += $wmarkWidth;
                if ($x >= $imgWidth) {
                    $x = 0;
                    $y += $wmarkHeight;
                }
            }
            $img->save($filePath2Save);

            $watermarkImg->destroy();
            $img->destroy(); //  to free memory in case you have a lot of images to be processed
        } else {
            return false;
        }
        return $filePath2Save;
    }
}

if (!function_exists("text")) {
    function text($key) {
        $text = \App\Models\Text::query()->where('key', $key)->first();
        if (!$text)
            return $key;
        return $text->getTranslatedAttribute('value');
    }
}

if (!function_exists("generateRandomString")) {

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists("generateVerifyCode")) {

    function generateVerifyCode($length = 6) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

function formatNum($num) {
    return $num > 0 ? "+$num" : $num;
}
