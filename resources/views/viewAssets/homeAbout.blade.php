@foreach($posts as $post)
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header text-center">
                    <h3 class="header-title">Hospital Profile</h3>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 about-desc">
                <p class="text-center">{{$post->about}}</p>
            </div>
        </div>
        <div class="about-content">
            <div class="text-center">
                <img src="{{asset('assets/main/assets/img/about-img.png')}}" class="img-fluid" alt="">
            </div>
            <div class="our-mission">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-det">
                            <h4>Our Mission</h4>
                            <p>{{$post->mission}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-det">
                            <h4>Our Vission</h4>
                            <p>{{$post->vision}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-det">
                            <h4>Our Plan</h4>
                            <p>{{$post->plan}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach