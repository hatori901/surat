<header id="nav" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navigation p-3">
            <div class="align-self-center"><img src="assets/images/logo.png" width="100" alt=""></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </div>
</header>
<script>
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        var width = $(window).width();
        if (scroll >= 5) {
            $('#nav').addClass('fixed-top');
            $('#nav').addClass('animate__animated');
            $('#nav').addClass('animate__backInDown');
            $('#nav').addClass('bg-white');
            $('#nav').addClass('shadow-sm');
        }else{
            $('#nav').removeClass('animate__animated');
            $('#nav').removeClass('animate__backInDown');
            $('#nav').removeClass('bg-white');
            $('#nav').removeClass('shadow-sm');
            if(width <= 720){
                $('#nav').addClass('bg-white');
            }
        }
        
    });
</script>