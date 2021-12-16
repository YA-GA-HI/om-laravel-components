@extends('layouts.layout')

@section('content')
  @php ($lang = isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar' ? true : false )
  <!--login message-->
  @if(Session::has('logged_out'))
    <div class="alert-red">{{ Session::get('logged_out') }}</div>
  @endif

  <!--container-->
  <main id="login" >
  <form id="form" class="form container" action="{{ route('login-auth') }}" method="POST">
    @csrf
    <!--logo-->
    <img class="mx-auto" src="{{isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'dark' ? 'images/logo-dark.png' : 'images/logo.png'  }}" alt="Zen-show logo">

    <!--email container-->
    <x-forms.input ar="ايميل" name="email" type="email" placeholder="Email"  required="true" error="Email is required" />

    <!--password container-->
    <x-forms.input ar="كلمة السر" name="password" type="password" placeholder="Password"  required="true" error="Email is required" />
    <button class="btn form-submit">{{ !$lang ? "Submit" : "ارسال" }}</button>
    <div class="other-options">{{ !$lang ? "Have Not an Account Yet?" : "ليس لديك حساب بعد؟" }}
      <a href="{{ route('register') }}">{{ !$lang ? "register" : "تسجيل" }}</a></div>
  </form>
  </main>
@endsection
