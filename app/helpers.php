<?php

if (!function_exists('Requests_Handle')) {
    function Requests_Handle($Requests, $Require_Parameter)
    {
        $Requests=(is_array($Requests))?$Requests:$Requests->toArray();
        $Return_Requests=[];
        foreach ($Requests as $key => $Req) {
            if (in_array($key, $Require_Parameter)) {
                $Return_Requests[$key] = $Req;
            }
        }
        return $Return_Requests;
    }
}
