<link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-slider.css')}}">
<!--Slick CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-theme.css')}}" />
<script type="text/javascript" src="{{asset('Frontend/assets/js/slick.js')}}"></script>
<div>
    <!-- Advertise Section Start -->
    <section class="mt-marketing marketing-card-body ">
        <div class="marketing-slider  mb-4" id="marketing-slider">
            @foreach($marketing as $market)
            <a target="_blank" href="{{$market->link}}">
                <div class="card shadow marketing-slider-image">
                    <img src="{{url('public/uploads/marketings/'.$market->image)}}" alt="..." class="logo1 rounded">
                </div>
            </a>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary rounded-pill " style="position:100%" href="{{route('package')}}">Quick Ad</a>
        </div>
    </section>
    <!-- Advertise Section End -->
</div>
<script type="text/Javascript">
    $(document).ready(function(){
    $('.marketing-slider').slick({
      arrows: false,
      autoplay: false,
      autoplaySpeed: 5000,
    })
  });
</script>
