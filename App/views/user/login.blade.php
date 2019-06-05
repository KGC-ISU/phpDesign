@extends('layout/master')

@section('maincontent')
<div class="wrap">
    <div class="visual">
        <div class="filter"></div>
        <div class="inner-box">
            <img src="/imgs/registration.jpg" alt="register">
            <h1>로그인</h1>
        </div>
    </div>

    <form action="/login" method="post">
        <input type="text" name="userid" placeholder="아이디를 입력해주세요">
        <input type="password" name="password" placeholder="비밀번호를 입력해주세요">
        <input type="submit" value="로그인">
    </form>
</div>

@endsection