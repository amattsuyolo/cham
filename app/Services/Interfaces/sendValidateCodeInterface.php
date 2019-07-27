<?php

namespace App\Services\Interfaces;

interface sendValidateCodeInterface
{

    public function sendSms($phone,$content);
}


