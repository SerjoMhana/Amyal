<?php
// إعداد هيدر الاستجابة كـ JSON
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. استخراج وتنظيف البيانات
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // 2. تحديد عناوين البريد (تأكد من صحة هذا العنوان)
    $to = 'TEST@ahsibly.ly'; // بريدك الإلكتروني الذي يستقبل الرسائل

    // 3. التحقق من البيانات
    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'الرجاء ملء جميع الحقول المطلوبة بصيغة صحيحة.']);
        exit;
    }

    // 4. إعداد محتوى الإيميل
    $email_subject = "رسالة نموذج اتصال جديدة: $subject";
    $email_body = "لقد تلقيت رسالة جديدة من نموذج الاتصال في موقعك:\n\n";
    $email_body .= "الاسم: $name\n";
    $email_body .= "البريد الإلكتروني: $email\n";
    if (!empty($phone)) {
        $email_body .= "الهاتف: $phone\n";
    }
    $email_body .= "الموضوع: $subject\n";
    $email_body .= "الرسالة:\n$message\n";
    
    // 5. إعداد هيدرات البريد (معدلة لحل خطأ 501 Syntax error)
    
    // استخدام \r\n بدلاً من \n والتأكد من تضمين MIME-Version
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    
    // هام: يجب أن يكون هذا البريد الإلكتروني فعّالاً وينتمي لنطاق ahsibly.ly
    $headers .= "From: info@amyal.ly" . "\r\n"; 
    
    // السماح بالرد مباشرة على بريد مرسل النموذج
    $headers .= "Reply-To: $email" . "\r\n"; 

    // 6. إرسال الإيميل
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'تم إرسال رسالتك بنجاح.']);
    } else {
        // رسالة فشل عامة
        echo json_encode(['success' => false, 'message' => 'عذرًا، حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى لاحقًا.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'طريقة طلب غير صالحة.']);
}
?>