<!-- Footer -->
<footer class="footer ">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">
            @auth()
            @foreach($opost as $post)

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-title">Location</h4>
                        <div class="about-clinic">
                            <p><strong>Email:</strong>
                                <br>
                                {{$post->email}}
                                <br>University of Cape Coast</p>
                            <p class="m-b-0"><strong>Phone</strong>:
                                <a href="">{{$post->phone}}</a>
                                <br> 
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
                @endauth

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-title">Appointment</h4>
                        <div class="appointment-btn">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <ul class="social-icons clearfix">
                                <li>
                                    <a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-12">
                        <div class="copy-text text-center">
                            <p>&#xA9; 2020 <a href="#">MediPal</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer /-->
{{--<div class="sidebar1-overlay" data-reff="#sidebar1"></div>--}}
<div class="sidebar-overlay" data-reff="#side_menu"></div>
