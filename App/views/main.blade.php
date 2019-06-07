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

    <div class="board-info">
        <h1>유용한 정보들</h1>
    </div>

    <div class="board-list">
        <div class="board">
            <div class="img">
                <img src="/imgs/alpaca.jpg" alt="알파카">
            </div>
            <div class="content">
                <div class="title">
                    <h3>알파카님의 특별출현</h3>
                </div>
                <div class="text">
                    <p>알파카파카알파카</p>
                </div>
                <div class="bottom">
                    <p><i class="fas fa-heart"></i> &nbsp; 0</p>
                    <p>공유하기</p>
                </div>
            </div>
        </div>

        <div class="board">
            <div class="img">
                <img src="/imgs/animal_go.jpg" alt="고라니">
            </div>
            <div class="content">
                <div class="title">
                    <h3>고라니의 울음소리를 알아봅시다</h3>
                </div>
                <div class="text">
                    <p>끼아아아아앙! 끼아아아아아양ㅇㅇ라아앙아앙농ㄴㅇㄹㅇㅇㅁㄴ 으아아아아아락<br>고라니는 술취한 사람의 소리를 냅니다</p>
                </div>
                <div class="bottom">
                    <p><i class="fas fa-heart"></i> &nbsp; 0</p>
                    <p>공유하기</p>
                </div>
            </div>
        </div>

        <div class="board">
            <div class="img">
                <img src="/imgs/borderlande3.png" alt="보더랜드">
            </div>
            <div class="content">
                <div class="title">
                    <h3>보더랜드3가 곧 출시합니다</h3>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ad inventore a debitis ipsa incidunt nemo nisi doloremque accusantium. Soluta omnis hic numquam reiciendis nam quidem, minima obcaecati unde tenetur!</p>
                </div>
                <div class="bottom">
                    <p><i class="fas fa-heart"></i> &nbsp; 0</p>
                    <p>공유하기</p>
                </div>
            </div>
        </div>
    </div>

    <div class="board-nav">
        <ul>
            <li class="pre">&lt;</li>
            <li style="background-color: #ef9a9a;">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li class="next">&gt;</li>
        </ul>
    </div>
</div>

@endsection