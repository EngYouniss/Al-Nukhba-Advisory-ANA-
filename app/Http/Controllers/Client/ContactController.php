<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Notifications\NewMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        // فاليديشن يوقف عند الخطأ ويرجع برسالة تلقائيًا
        $data = $request->validate([
            'name'    => 'required|string|max:64',
            'email'   => 'required|email|max:64',
            'subject' => 'required|string|max:64',
            'message' => 'required|string|max:500',
        ]);

        $created = Message::create($data);

        // خزّن أولًا، بعدها الإشعار
        if ($created) {
            $admin = User::find(1); // تأكد أن هذا المستخدم موجود
            if ($admin) {
                // لو ما عندك worker شغّال، احذف ShouldQueue من الإشعار (شوف الملف تحت)
                $admin->notify(new NewMessageNotification(
                    $data['name'],
                    $data['email'],
                    $data['subject'],
                    $data['message'],
                ));
            }

            return back()->with('success', 'شكراً لتواصلك معنا سيتم الرد قريباً.');
        }

        return back()->with('error', 'هناك خطأ حاول مجدداً.');
    }
}
