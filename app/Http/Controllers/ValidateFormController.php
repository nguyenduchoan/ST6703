<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateFormController extends Controller
{
    function validateForm(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        // customize các tin nhắn
        $message = [
            'email.required' => 'Địa chỉ email không được để trống',
            'email.email'    => 'Địa chỉ email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống'
        ];
        // nếu Các ràng buộc đã hợp lệ, thì xử lý tiếp
        $request->validate($rules, $message);

        return "Thông tin đăng nhập đã đúng";
    }
}
