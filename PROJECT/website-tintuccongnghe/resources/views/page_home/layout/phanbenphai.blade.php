
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/testlifeOnlyI" class="facebook-fans"><i class="fab fa-facebook-f"></i> 1,171 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/LXUNTHIN3" class="twitter-followers"><i class="fab fa-twitter"></i> 2,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fab fa-google-plus-g"></i>1,650 <span>Followers</span></a>
                    <!-- Google -->
                    <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w?sub_confirmation=1" class="google-followers"><i class="fab fa-youtube"></i> 655 <span>Subscribers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Categories</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                     @foreach($categories as $category)
                    <li><a href="{{ route('news', $category->slug) }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><span style="letter-spacing: 2px;">{{ $category->name }}</span></a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Hot Channels</h5>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ url('http://localhost:8000/websitenews/image/musicnguoncamxuc.png') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w?sub_confirmation=1" class="channel-title">MUSIC - NGUỒN CẢM XÚC</a>
                        
                        <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w?sub_confirmation=1" style="font-size:11px;letter-spacing: 1px;" class="btn btn-info rounded-0" role="button">LIKE IT</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ url('http://localhost:8000/websitenews/image/pageface.jpg') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="https://www.facebook.com/testLonely" class="channel-title">LONELY PAGE</a>
                        
                        <a href="https://www.facebook.com/testLonely" style="font-size:11px;letter-spacing: 1px;" class="btn btn-info rounded-0" role="button">LIKE IT</a>
                    </div>
                </div>

                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="{{ url('http://localhost:8000/websitenews/image/logo.jpg') }}" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w/videos" class="channel-title">LISTEN TO SAD MUSIC</a>
                        
                        <a href="https://www.youtube.com/channel/UCB8h3yd2DK7fNTc46IvUy6w/videos" style="font-size:11px;letter-spacing: 1px;" class="btn btn-info rounded-0" role="button">LIKE IT</a>
                    </div>
                </div>
            </div>

            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                @guest
                <div class="section-heading">
                    <h5>JOIN IN</h5>
                </div>
                
                <div class="newsletter-form">
                    <p>Join & Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <a  id="dangky" href="{{ route('login') }}" class="btn btn-light mag-btn w-100">LOGIN</a>
                        <a  id="dangky" href="{{ route('register')}}" class="btn btn-light mag-btn w-100">REGISTER</a>
                    </form>
                </div>
                @else
                <div class="section-heading">
                    <h5>JOIN IN</h5>
                </div>
                
                <div class="newsletter-form">
                    <p>Great to have you back !</p>
                   
                </div>
                @endguest