<?php

use App\TaxType;
use Carbon\Carbon;
use App\AccAccount;
use App\TreatmentDiscountSlabs;
use NumberToWords\NumberToWords;
use DougSisk\CountryState\CountryState;
use Kreait\Firebase\Messaging\ApnsConfig;
use Kreait\Firebase\Messaging\Notification;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\AndroidConfig;
use Illuminate\Database\Eloquent\Relations\Relation;

if (! function_exists('dougsiskCountryName')) {
    function dougsiskCountryName($id)
    {
        $countryState = new CountryState;
        try {
            return $countryState->getCountryName($id);
        } catch (Exception $e) {
            return null;
        }
    }
}

if (! function_exists('dougsiskStateName')) {
    function dougsiskStateName($state_code, $country_code)
    {
        $countryState = new CountryState;
        try {
            return $countryState->getStateName($state_code, $country_code);
        } catch (Exception $e) {
            return null;
        }
    }
}

if (! function_exists('carbonCreateDateTime')) {
    function carbonCreateDateTime($format, $date, $response_format = null)
    {
        if (!$response_format) {
            $response_format = 'd/m/Y H:i:s';
        }
        try {
            return Carbon::createFromFormat($format, $date)->format($response_format);
        } catch (Exception $e) {
            return null;
        }
    }
}

if (! function_exists('carbonDateCondition')) {
    function carbonDateCondition($dateFirst, $dateSecond, $condition, $format = null) 
    {
        if (!$format) $format = 'Y-m-d H:i:s';

        try {
            $dateFirst = Carbon::createFromFormat($format, $dateFirst)->startOfDay();
            $dateSecond = Carbon::createFromFormat($format, $dateSecond)->startOfDay();

            if($dateFirst->$condition($dateSecond)) return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

if (! function_exists('createFlashMessage')) {
    function createFlashMessage($message_type, $message, $clear_previous_flash = true)
    {
        if($clear_previous_flash) {
            session()->flash('message_type', $message_type);
            session()->flash('message', $message);
        }
    }
}

if (! function_exists('checkObject')) {
    function checkObject($collection, $objects)
    {
        if(isset($collection)) {
            $current_object = $collection;
            foreach ($objects as $key => $object) {
                $current_object = $current_object->$object;
                if(!isset($current_object)) return null;
            }
            return $current_object;
        }
        return null;
    }
}

if (! function_exists('findMorphModel')) {
    function findMorphModel($followable_type, $followable_id)
    {
        if (isset(Relation::morphMap()[$followable_type])) {
            return Relation::morphMap()[$followable_type]::findOrFail($followable_id);
        } else {
            return null;
        }
    }
}

if (! function_exists('apiResponse')) {
    function apiResponse($api_identifier, $status, $message, $data = null)
    {
        $api_response = [
            'metadata' => [
                'api_identifier' => $api_identifier,
                'status' => $status,
                'message' => $message,
            ],
            'data' => $data
        ];

        return response()->json($api_response, $status);
    }
}

if (! function_exists('taxType')) {
    function taxType()
    {
        $tax_type = TaxType::where('is_default', 1)->first();

        if(!$tax_type) $tax_type = new TaxType;

        return $tax_type;
    }
}

if (! function_exists('sendPushNotification')) {
    function sendPushNotification($icon = null, $title = null, $body = null, $click_action = null, $type = null)
    {
        if(auth()->user()->userSetting->device_token) {
            $notification = Notification::fromArray([
                'icon' => $icon,
                'title' => $title,
                'body' => $body,
                'click_action' => $click_action,
            ]);

            $data = [
               'type' => $type,
            ];

            $message = CloudMessage::withTarget('token', auth()->user()->userSetting->device_token)
                                        ->withNotification($notification) // optional
                                        ->withData($data);

            $config = AndroidConfig::fromArray([
                'ttl' => '3600s',
                'priority' => 'normal',
                'notification' => [
                    'title' => $title,
                    'body' => $body,
                    'icon' => $icon,
                    'click_action' => $click_action,
                ],
            ]);
            $message = $message->withAndroidConfig($config);

            $config = ApnsConfig::fromArray([
                'headers' => [
                    'apns-priority' => '10',
                ],
                'payload' => [
                    'aps' => [
                        'alert' => [
                            'title' => $title,
                            'body' => $body,
                            'type' => $type,
                        ],
                        'badge' => 42,
                    ],
                ],
            ]);
            $message = $message->withApnsConfig($config);

            $messaging = app('firebase')->getMessaging();

            if($messaging->validate($message)) {
                $response = $messaging->send($message);
                return apiResponse('push_notification', 200, 'Push notification sent', $response);
            }

            return apiResponse('push_notification', 422, 'Push notification failed', []);
        }
    }
}

if (! function_exists('all_account_total_amount')) {
    function all_account_total_amount($type = 'credit', $start_date, $end_date)
    {
        $amount = 0;
        $acc_accounts = AccAccount::all();

        foreach ($acc_accounts as $key => $acc_account) {
            if($acc_account->is_debit_or_credit_balance == $type) {
                if($start_date && $end_date) {
                    $amount = $amount + $acc_account->balanceCarryDownDateRange($start_date, $end_date);
                } else {
                    $amount = $amount + $acc_account->balance_carry_down;
                }
            }
        }

        return (STRING)$amount;
    }
}

if (! function_exists('getPurchaseAccount')) {
    function getPurchaseAccount()
    {
        $purchase_account = AccAccount::where('account_group', 'purchase_account')
                                        ->WhereNull('accountable_id')
                                        ->first();

        return $purchase_account;
    }
}

if (! function_exists('getSalesAccount')) {
    function getSalesAccount()
    {
        $purchase_account = AccAccount::where('account_group', 'sales_account')
                                        ->WhereNull('accountable_id')
                                        ->first();

        return $purchase_account;
    }
}

if (! function_exists('getPayrollAccount')) {
    function getPayrollAccount()
    {
        $purchase_account = AccAccount::where('account_group', 'payroll_account')
                                        ->WhereNull('accountable_id')
                                        ->first();

        return $purchase_account;
    }
}

if (! function_exists('numberToWord')) {
    function numberToWord($number)
    {
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');

        return $numberTransformer->toWords($number);
    }
}

if (! function_exists('getTreatmentDiscount')) {
    function getTreatmentDiscount($amount)
    {
        $slab = TreatmentDiscountSlabs::where('price', '>=', $amount)->orderBy('price', 'asc')->first();
        if(!$slab) {
           $slab = TreatmentDiscountSlabs::where('price', '<=', $amount)->orderBy('price', 'desc')->first();
        }

        if($slab)
            return $amount * ($slab->discount / 100);
        return 0;
    }
}

