@component('mail::message')
# پیام فرم تماس با ما
این ایمیل به صورت خودکار ارسال شده است.

## مشخصات فرستنده
### نام : {{ $name }}
### شماره تماس : {{ $phone }}

@component('mail::panel')
    {{ $message }}
@endcomponent

{{ config('app.name') }}
@endcomponent
