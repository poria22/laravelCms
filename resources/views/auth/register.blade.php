<x-app-layout>
    <x-slot name="title">
        صفحه ثبتنام -
    </x-slot>
    <main class="bg--white">
        <div class="container">
            <div class="sign-page">
                <h1 class="sign-page__title">ثبت نام در وب‌سایت</h1>

                <form class="sign-page__form" action="{{route('register.store')}}" method="POST">

                        @csrf
                        <input type="text" name="name" class="text text--right" placeholder="نام  و نام خانوادگی">
                              @error('name')
                                 <p>{{$message}}</p>
                              @enderror

                        <input type="text" name="phone" class="text text--left" placeholder="شماره موبایل">
                              @error('phone')
                              <p>{{$message}}</p>
                              @enderror
                        <input type="email" name="email" class="text text--left" placeholder="ایمیل">
                               @error('email')
                               <p>{{$message}}</p>
                               @enderror
                        <input type="password" name="password" class="text text--left" placeholder="رمز عبور">
                                @error('password')
                                <p>{{$message}}</p>
                                @enderror
                        <input type="password" name="password_confirmation" class="text text--left" placeholder="تکرار رمز عبور">


                        <button class="btn btn--blue btn--shadow-blue width-100 mb-10" type="submit">ثبت نام</button>

                        <div class="sign-page__footer">
                            <span>در سایت عضوید ؟ </span>
                            <a href="sign-up.html" class="color--46b2f0">صفحه ورود</a>

                        </div>

                </form>
            </div>
        </div>
    </main>
</x-app-layout>
