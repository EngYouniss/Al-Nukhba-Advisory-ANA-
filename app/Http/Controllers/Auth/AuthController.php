<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // بسيط: تحقق أساسي
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // المحاولة
        if (Auth::attempt($request->only('email', 'password'))) {
            // تأمين الجلسة بعد الدخول (سطر مهم وبسيط)
            $request->session()->regenerate();

            return redirect()->route('admin.index')
                ->with('success', 'مرحباً بك مجدداً');
        }

        // رجوع بخطأ مع إعادة الإيميل فقط
        return back()
            ->withInput($request->only('email'))
            ->with('error', 'الإيميل أو كلمة السر غير صحيحة');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'تم تسجيل الخروج');
    }
}
