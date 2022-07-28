@extends('app')

@section('register')
<main class="bg--white">
    <div class="container">
        <div class="sign-page">
            <h1 class="sign-page__title">ثبت نام در وب‌سایت</h1>

            <form class="sign-page__form" action="{{ route('register.store') }}"  method_exists="POST">
            @csrf
                    <input type="text" class="text text--right" placeholder="نام  و نام خانوادگی">
                    <input type="text" class="text text--left" placeholder="شماره موبایل">
                    <input type="text" class="text text--left" placeholder="ایمیل">
                    <input type="password" class="text text--left" placeholder="رمز عبور">
                    <input type="password" class="text text--left" placeholder="تکرار رمز عبور">


                    <button class="btn btn--blue btn--shadow-blue width-100 mb-10" type="submit">
                        ثبت نام</button>
                    <button type="reset" class="btn btn--red btn--shadow-red width-100 ">ثبت نام</button>
                    <div class="sign-page__footer">
                        <span>در سایت عضوید ؟ </span>
                        <a href="sign-up.html" class="color--46b2f0">صفحه ورود</a>

                    </div>
                </form>
            </form>
        </div>
    </div>
</main>
@endsection