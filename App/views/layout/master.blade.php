<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if( isset($_SESSION['flash_msg']))
        <script>
            let msg = "{{$_SESSION['flash_msg']['msg']}}";
        </script>
        @php 
            unset ($_SESSION['flash_msg']);
        @endphp
    @endif
    <script src="/js/app.js"></script>
    <title>My Blog</title>
</head>
<body>
    <header>
        <div class="nav-wrap">
            <div class="top">
                <div class="sns">
                    <ul>
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-facebook-messenger"></i></li>
                        <li><i class="far fa-envelope"></i></li>
                    </ul>
                </div>
                <div class="title">
                    <h1>MyBlog</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><i class="fas fa-search"></i></li>
                        <li><i class="fas fa-bars"></i></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <ul>
                    <li><a href="/">메인페이지</a></li>
                    <li><a href="/">게시글</a></li>
                    <li><a href="/">footer</a></li>
                </ul>
            </div>
        </div>
    </header>


    @yieLd('maincontent')
    

</body>
</html>