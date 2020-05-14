@extends('layouts.Tapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mycard">
                <div class="card-header">{{ __('ثبت نام خود را محرز کنید') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('لینک احراز هویت جدید برای شما ارسال شد') }}
                        </div>
                    @endif

                    {{ __('قبل از شروع لینک احراز هویت را تایید کنید) }}
                    {{ __('اگر ایمیل دریافت نکرده اید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('دوباره ارسال می کنیم') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
