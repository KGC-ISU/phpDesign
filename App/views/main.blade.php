@extends('layout/master')

@section('maincontent')
<div class="wrap">
    <div class="slide">
        <div class="imgs active">
            <img src="/imgs/van.jpg" alt="slide1">
            <div class="text">
                <p>슬라이드 1</p>
            </div>
        </div>

        <div class="imgs">
            <img src="/imgs/van.jpg" alt="slide2">
            <div class="text">
                <p>슬라이드 2</p>
            </div>
        </div>

        <div class="imgs">
            <img src="/imgs/van.jpg" alt="slide2">
            <div class="text">
                <p>슬라이드 3</p>
            </div>
        </div>

        <div class="slide-btn">
            <span class="left">&lt;</span>
            <span class="right">&gt;</span>
        </div>
    </div> 
</div>

@endsection