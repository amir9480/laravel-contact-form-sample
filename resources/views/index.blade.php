<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sample contact form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body dir="rtl">
        <div class="container text-right">
            <div class="content">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">نام</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="نام شما" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">شماره تماس</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="شماره تماس شما" value="{{ old('phone') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="message">پیام</label>
                        <textarea class="form-control" id="message" name="message" placeholder="پیام شما" rows="3" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ config('contact.recaptcha.site') }}"></div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </form>
            </div>
        </div>

        <script src="https://www.google.com/recaptcha/api.js?hl=fa"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
