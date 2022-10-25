@extends('pages.layout')
@section('content')
    <!-- Posts section -->
    <section id="posts" class="posts py">
        <div class="container">
            <div class="section-head">
                <h2>Latest Post</h2>
            </div>
            <div class="post-inner grid">
                <article class="post-item bg-white">
                    <div class="img">
                        <img src="../static/imgs/WhatsApp Image 2022-09-22 at 6.34.38 AM.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h4>Inspiring stories of people and family centered care during a global pandemic</h4>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ab quibusdam fuga natus at deserunt repudiandae nihil ipsam debitis recusandae!</p>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit vero laborum nihil unde placeat molestiae!</p>
                        <div class="info flex">
                            <small class="text text-sm"><i class="fas fa-clock">September 20, 2022</i></small>
                            <small class="text text-sm"><i class="fas fa-comment">9 comments</i></small>
                        </div>
                    </div>
                </article>

                <article class="post-item bg-white">
                    <div class="img">
                        <img src="asset('imgs/WhatsApp Image 2022-09-22 at 7.33.03 AM.jpeg')" alt="">
                    </div>
                    <div class="content">
                        <h4>Inspiring stories of people and family centered care during a global pandemic</h4>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ab quibusdam fuga natus at deserunt repudiandae nihil ipsam debitis recusandae!</p>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit vero laborum nihil unde placeat molestiae!</p>
                        <div class="info flex">
                            <small class="text text-sm"><i class="fas fa-clock">September 20, 2022</i></small>
                            <small class="text text-sm"><i class="fas fa-comment">9 comments</i></small>
                        </div>
                    </div>
                </article>

                <article class="post-item bg-white">
                    <div class="img">
                        <img src="" alt="">
                    </div>
                    <div class="content">
                        <h4>Inspiring stories of people and family centered care during a global pandemic</h4>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ab quibusdam fuga natus at deserunt repudiandae nihil ipsam debitis recusandae!</p>
                        <p class="text text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit vero laborum nihil unde placeat molestiae!</p>
                        <div class="info flex">
                            <small class="text text-sm"><i class="fas fa-clock">September 20, 2022</i></small>
                            <small class="text text-sm"><i class="fas fa-comment">9 comments</i></small>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- end posts -->
@endsection('content')