<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلدهای اضافی باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری‌شده بسیار بزرگ است. لطفاً فایل کوچک‌تری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر است. لطفاً فرم را مجدداً ارسال نمایید.',
    'This value is not a valid HTML5 color.' => 'این مقدار یک رنگ معتبر HTML5  نیست.',
    'Please enter a valid birthdate.' => 'لطفاً یک تاریخ تولد معتبر وارد نمایید.',
    'The selected choice is invalid.' => 'گزینه‌ی انتخاب‌شده نامعتبر است',
    'The collection is invalid.' => 'این مجموعه نامعتبر است.',
    'Please select a valid color.' => 'لطفاً یک رنگ معتبر انتخاب کنید.',
    'Please select a valid country.' => 'لطفاً یک کشور معتبر انتخاب کنید.',
    'Please select a valid currency.' => 'لطفاً یک واحد پولی معتبر انتخاب کنید.',
    'Please choose a valid date interval.' => 'لطفاً یک بازه‌ی زمانی معتبر انتخاب کنید.',
    'Please enter a valid date and time.' => 'لطفاً یک تاریخ و زمان معتبر وارد کنید.',
    'Please enter a valid date.' => 'لطفاً یک تاریخ معتبر وارد کنید.',
    'Please select a valid file.' => 'لطفاً یک فایل معتبر انتخاب کنید.',
    'The hidden field is invalid.' => 'فیلد مخفی نامعتبر است.',
    'Please enter an integer.' => 'لطفاً یک عدد صحیح وارد کنید.',
    'Please select a valid language.' => 'لطفاً یک زبان معتبر انتخاب کنید.',
    'Please select a valid locale.' => 'لطفاً یک جغرافیای (locale) معتبر انتخاب کنید.',
    'Please enter a valid money amount.' => 'لطفاً یک مقدار پول معتبر وارد کنید.',
    'Please enter a number.' => 'لطفاً یک عدد وارد کنید.',
    'The password is invalid.' => 'رمزعبور نامعتبر است.',
    'Please enter a percentage value.' => 'لطفاً یک درصد معتبر وارد کنید.',
    'The values do not match.' => 'مقادیر تطابق ندارند.',
    'Please enter a valid time.' => 'لطفاً یک زمان معتبر وارد کنید.',
    'Please select a valid timezone.' => 'لطفاً یک منطقه‌زمانی معتبر وارد کنید.',
    'Please enter a valid URL.' => 'لطفاً یک URL معتبر وارد کنید.',
    'Please enter a valid search term.' => 'لطفاً یک عبارت جستجوی معتبر وارد کنید.',
    'Please provide a valid phone number.' => 'لطفاً یک شماره تلفن معتبر وارد کنید.',
    'The checkbox has an invalid value.' => 'کادر انتخاب (checkbox)  دارای مقداری نامعتبر است.',
    'Please enter a valid email address.' => 'لطفاً یک آدرس رایانامه‌ی معتبر وارد کنید.',
    'Please select a valid option.' => 'لطفاً یک گزینه‌ی معتبر انتخاب کنید.',
    'Please select a valid range.' => 'لطفاً یک محدوده‌ی معتبر انتخاب کنید.',
    'Please enter a valid week.' => 'لطفاً یک هفته‌ی معتبر وارد کنید.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام احراز هویت رخ داده است.',
    'Authentication credentials could not be found.' => 'شرایط احراز هویت یافت نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست احراز هویت به دلیل  وجود مشکل در سیستم قابل پردازش نمی باشد.',
    'Invalid credentials.' => 'احراز هویت نامعتبر می باشد.',
    'Cookie has already been used by someone else.' => 'Cookie قبلا توسط شخص دیگری استفاده گردیده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست از این منبع را دارا نمی باشید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نمی باشد.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه دهنده احراز هویتی برای پشتیبانی از توکن احراز هویت پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'هیچ جلسه‌ای در دسترس نمی باشد. این میتواند به دلیل پایان یافتن زمان و یا فعال نبودن کوکی ها باشد.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی گردیده است.',
    'Credentials have expired.' => 'مجوزهای احراز هویت منقضی گردیده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال می باشد.',
    'Account is locked.' => 'حساب کاربری قفل گردیده است.',
    'Too many failed login attempts, please try again later.' => 'تلاش‌های ناموفق زیادی برای ورود صورت گرفته است، لطفاً بعداً دوباره تلاش کنید.',
    'Invalid or expired login link.' => 'لینک ورود نامعتبر یا تاریخ‌گذشته است.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'قبلی',
    'label_next' => 'بعدی',
    'filter_searchword' => 'کلمه جستجو...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
