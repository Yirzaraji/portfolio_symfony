<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'ฟอร์มนี้ไม่ควรมี extra fields',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'ไฟล์ที่อัพโหลดมีขนาดใหญ่เกินไป กรุณาลองอัพโหลดใหม่อีกครั้งด้วยไฟล์ที่มีขนาดเล็กลง',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token ไม่ถูกต้อง กรุณาลองส่งแบบฟอร์มใหม่',
    'This value is not a valid HTML5 color.' => 'ค่านี้ไม่ใช่ค่าที่ถูกต้องของค่าสี HTML5',
    'Please enter a valid birthdate.' => 'กรุณากรอกวันเดือนปีเกิดที่ถูกต้อง',
    'The selected choice is invalid.' => 'ตัวเลือกที่เลิอกไม่ถูกต้อง',
    'The collection is invalid.' => 'คอเล็กชั่นไม่ถูกต้อง',
    'Please select a valid color.' => 'กรุณาเลือกค่าสีที่ถูกต้อง',
    'Please select a valid country.' => 'กรุณาเลือกประเทศที่ถูกต้อง',
    'Please select a valid currency.' => 'กรุุณาเลิอกค่าสกุลเงินที่ถูกต้อง',
    'Please choose a valid date interval.' => 'กรุณณากรอกช่วงวันที่ที่ถูกต้อง',
    'Please enter a valid date and time.' => 'กรุณณากรอกค่าเวลาและวันที่ที่ถูกต้อง',
    'Please enter a valid date.' => 'กรุณณากรอกค่าวันที่ที่ถูกต้อง',
    'Please select a valid file.' => 'กรุณาเลือกไฟล์ที่ถูกต้อง',
    'The hidden field is invalid.' => 'ค่า Hidden field ไม่ถูกต้อง',
    'Please enter an integer.' => 'กรุณากรอกตัวเลขจำนวนเต็ม',
    'Please select a valid language.' => 'กรุณาเลือกภาษาที่ถูกต้อง',
    'Please select a valid locale.' => 'กรุณาเลือกท้องถิ่นที่ถูกต้อง',
    'Please enter a valid money amount.' => 'กรุณากรอกจำนวนเงินที่ถูกต้อง',
    'Please enter a number.' => 'กรุณากรอกตัวเลข',
    'The password is invalid.' => 'รหัสผ่านไม่ถูกต้อง',
    'Please enter a percentage value.' => 'กรุณากรอกค่าเปอร์เซ็นต์',
    'The values do not match.' => 'ค่าทั้งสองไม่ตรงกัน',
    'Please enter a valid time.' => 'กรุณากรอกค่าเวลาที่ถูกต้อง',
    'Please select a valid timezone.' => 'กรุณาเลือกค่าเขตเวลาที่ถูกต้อง',
    'Please enter a valid URL.' => 'กรุณากรอก URL ที่ถูกต้อง',
    'Please enter a valid search term.' => 'กรุณากรอกคำค้นหาที่ถูกต้อง',
    'Please provide a valid phone number.' => 'กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง',
    'The checkbox has an invalid value.' => 'Checkbox มีค่าที่ไม่ถูกต้อง',
    'Please enter a valid email address.' => 'กรุณากรอกที่อยู่อีเมล์ที่ถูกต้อง',
    'Please select a valid option.' => 'กรุณาเลือกตัวเลือกที่ถูกต้อง',
    'Please select a valid range.' => 'กรุณาเลือกค่าช่วงที่ถูกต้อง',
    'Please enter a valid week.' => 'กรุณากรอกค่าสัปดาห์ที่ถูกต้อง',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
    'Too many failed login attempts, please try again later.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป กรุณาลองใหม่ภายหลัง',
    'Invalid or expired login link.' => 'ลิงค์เข้าสู่ระบบไม่ถูกต้องหรือหมดอายุไปแล้ว',
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
