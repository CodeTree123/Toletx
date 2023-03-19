<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Manrope:wght@300&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <!-- jQuery CDN -->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/foundation.css')}}"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('Frontend/assets/js/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Frontend/assets/js/setup.js')}}"></script>
    <script type="text/javascript" src="{{asset('Frontend/assets/js/xzoom.min.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


    <title>ToletX</title>
</head>

<body>
    @include('frontend.include.header')

    <section class="mt-3">
        <div class="container center-container">
            <div class="row row1 ">
                @yield('content')
            </div>
        </div>
    </section>
    <br><br><br>
    @include('frontend.include.footer')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            autoplay: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]

        });
    </script>

    <script type="module">
        import {
            Fancybox
        } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.esm.js";
    </script>
    <script>
          const copyBtns = document.querySelectorAll('.copy-button');
                    console.log(copyBtns);
                    copyBtns.forEach((copyBtn)=>{
                        
                        copyBtn.addEventListener('click', ()=>{
                            const text = copyBtn.previousElementSibling.innerText;
                            copyToClipboard(text,copyBtn);
                        })
                    })

                    
                    function copyToClipboard(text,copyBtn) {
                        navigator.clipboard.writeText(text)
                        .then(()=>{
                            console.log(`${text} was copied success`)
                            console.log(copyBtn); 

                            copyBtn.classList.remove('btn-outline-dark');
                            copyBtn.classList.add('btn-primary');
                            copyBtn.innerText = "Copied!"

                            setInterval(resetCopyBtn, 2000); 
                                function resetCopyBtn() {  
                                    copyBtn.classList.remove('btn-primary');
                                    copyBtn.classList.add('btn-outline-dark');
                                    copyBtn.innerText = "Copy!" 
                                }
                        })
                        .catch((e) =>{console.error(`copy failed ${e}`)})
                    }

    </script>
</body>

</html>
