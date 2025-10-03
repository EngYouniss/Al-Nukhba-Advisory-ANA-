<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>رسالة جديدة</title>
    <style>
        body {
            font-family: 'Tahoma', 'Arial', sans-serif;
            background-color: #f4f4f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #4f46e5;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
        }

        .content {
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }

        .content p {
            margin: 10px 0;
        }

        .footer {
            background: #f4f4f7;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        .btn {
            display: inline-block;
            background: #4f46e5;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h2>📩 رسالة جديدة من الموقع</h2>
        </div>

        <!-- Content -->
        <div class="content">
            <p><strong>👤 الاسم:</strong> {{ $name }}</p>
            <p><strong>📧 البريد:</strong> {{ $email }}</p>
            <p><strong>📝 الموضوع:</strong> {{ $subject }}</p>
            <hr>
            <p><strong>💬 الرسالة:</strong></p>
            <p>{{ $message }}</p>

            <a href="{{ url('/') }}" class="btn">فتح الموقع</a>
        </div>

        <!-- Footer -->
        <div class="footer">
            هذه رسالة آلية - لا ترد عليها
        </div>
    </div>
</body>

</html>
