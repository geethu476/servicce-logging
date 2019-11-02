<?php

use Carbon\Carbon;
use NumberToWords\NumberToWords;
use DougSisk\CountryState\CountryState;
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






