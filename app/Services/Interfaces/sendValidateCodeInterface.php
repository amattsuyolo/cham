<?php

namespace App\Services\Interfaces;

interface sendValidateCodeInterface
{
    // 寄驗證信
    public function sendSms($address,$content);
}


