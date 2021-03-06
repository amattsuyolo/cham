<?php

namespace App\Repositories;

use App\Http\Resources\User as UserResource;
use App\User;

class UserRepository {

	private $user;

	public function __construct(User $user) {
		$this->user = $user;
		// $this->userResource=$userResource;
	}
	/*
		        錯誤範例:
		        Controller 呼叫下列方法 不應該指定特定資料表欄位
		        以方便未來 資料表欄位變動，只需要修正UserRepository
		        注入UserRepository 的多個 class (Controller)
		        皆不需要更動
	*/
	public function updateSingleContent($user_id, $col, $value) {

		User::where('id', $user_id)
			->update([$col => $value]);
	}
	/*
		        將使用者帳號激活
		     *  @param mixed user_id
		     *  @return void
	*/
	public function verifyUser($user_id) {
		User::where('id', $user_id)
			->update(["activate" => 1]);
	}
	/*
		        驗證碼確認
		     *  @param mixed user_id
		     *  @param [int] code_number
		     *  @return [int]
		     *  正確 1  失敗 0
	*/
	public function codeNumCheck($user_id, $code_number) {
		$check = User::where('id', $user_id)
			->where('verify', $code_number)
			->count();
		return $check;
	}
	/*
		        更新使用者驗證碼號碼
		     *  @param user_id
		     *  @param [int] verify_code
		     *  @return void
	*/
	public function verificationCodeUpdate($user_id, $verify_code) {
		User::where('id', $user_id)
			->update(['verify' => $verify_code]);
	}
	/*
		        更新使用者手機號碼
		     *  @param user_id
		     *  @param [str] phone_number
		     *  @return void
	*/
	public function phoneUpdate($user_id, $phone_number) {
		User::where('id', $user_id)
			->update(['mobilePhone' => $phone_number]);
	}
	/*
		        更新使用者email
		     *  @param user_id
		     *  @param [str] phone_number
		     *  @return void
	*/
	public function emailUpdate($user_id, $email) {
		User::where('id', $user_id)
			->update(['email' => $email]);
	}
	/*
		        新增會員資料
		     *  @param name
		     *  @param email
		     *  @param password
		     *  @return user_id
	*/
	public function addUser($name, $email, $password) {
		User::create([
			'name' => $name,
			'email' => $email,
			'password' => bcrypt($password),
		]);
		$result = User::select('id')->where('name', $name)->get();
		return $result[0]["id"];
	}
	/*
		        回傳會員資訊
		     *  @param name
		     *  @param email
		     *  @param password
		     *  @return void
	*/
	public function userInfo($request) {
		// return  $this->userResource($request);
		return new userResource($request);
	}

}
