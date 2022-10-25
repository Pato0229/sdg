@extends('pages.layout')
@section('content')
    <!-- service -->
        <main>
            <!-- banner one -->
            <section id="banner-one" class="banner-one text-center">
                <div class="container text-white">
                    <blockquote class="lead"><i class="fas fa-quote-left"></i>The greatest disease in the World today is not TB or leprosy; it is being unwanted, unloved, and uncared for. We can cure physical diseases with medicine, but the only cure for loneliness, despair, and hopelessness is love. <i class="fas fa-quote-right"></i></blockquote>
                    <small class="text text-sm">― Mother Teresa, A Simple Path: Mother Teresa </small>
                </div>
            </section>
            <!-- end of banner one -->
    
            <section id="services" class="services py">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="lead">The Best Doctor gives the least medicines through care and compassion</h2>
                        <p class="text text-lg">A perfect way to show your hospital service in love and care</p>
                        <div class="link-art flex">
                            <div></div>
                            <img src="{{asset('imgs/four-dots.png')}}">
                            <div></div>
                        </div>
                    </div>
                    <div class="services-inner text-center grid">
                        <article class="service-item">
                            <div class="icon">
                                <img src="{{asset('imgs/cardio.jpg')}}" alt="">
                            </div>
                            <h3>Cardio Monitoring</h3>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                        </article>

                        <article class="service-item">
                            <div class="icon">
                                <img src="{{asset('imgs/health-one-one.jpg')}}" alt="">
                            </div>
                            <h3>Medical Treatment</h3>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                        </article>

                        <article class="service-item">
                            <div class="icon">
                                <img src="{{asset('imgs/4.jpeg')}}">
                            </div>
                            <h3>Emergency Help</h3>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                        </article>
                        
                        <article class="service-item">
                            <div class="icon">
                                <img src="{{asset('imgs/first-aid.jpg')}}" alt="">
                            </div>
                            <h3>First Aid</h3>
                            <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                        </article>

                        <article class="service-item">
                          <div class="icon">
                              <img src="{{asset('imgs/first-aid.jpg')}}" alt="">
                          </div>
                          <h3>Tips On Healthy Living</h3>
                          <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                      </article>

                      <article class="service-item">
                        <div class="icon">
                            <img src="{{asset('imgs/15.jpeg')}}" style ="border-radius: 50%;" alt="">
                        </div>
                        <h3>Call A Quick Response Team</h3>
                        <p class="text text-sm">Life is Precious and it matters, don't hesitate to give a call on our hotline, we'll be glad if you do....</p>
                    </article>

                    <article class="service-item">
                      <div class="icon">
                          <img src="{{asset('imgs/first-aid.jpg')}}" alt="">
                      </div>
                      <h3>Home For The Aged Ones</h3>
                      <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio, assumenda veniam ad eos veritatis necessitatibus laudantium asperiores hic soluta similique nemo voluptas sapiente itaque!</p>
                  </article>
                    </div>
                </div>
            </section>
            <!-- end of section -->

            <!-- service package -->
            <section id="package-service" class="package-service py text-center">
              <div class="container">
                <div class="package-service-head text-white">
                  <h2>Packages We Offer</h2>
                  <p class="text text-lg">Best Packages for you</p>
                </div>
                <div class="package-service-inner grid">
                  <div class="package-service-item bg-white">
                    <div class="icon flex">
                      <i class="fas fa-phone fa-2x"></i>
                    </div>
                    <h3>Regular Case</h3>
                    <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga esse unde impedit dolorum. Itaque quia quasi autem unde possimus.
                    </p>
                    <a href="" class="btn btn-blue">Read More</a>
                  </div>
                  <div class="package-service-item bg-white">
                    <div class="icon flex">
                      <i class="fas fa-calendar-alt fa-2x"></i>
                    </div>
                    <h3>Serious Case</h3>
                    <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga esse unde impedit dolorum. Itaque quia quasi autem unde possimus.
                    </p>
                    <a href="" class="btn btn-blue">Read More</a>
                  </div>
                  <div class="package-service-item bg-white">
                    <div class="icon flex">
                      <i class="fas fa-comments fa-2x"></i>
                    </div>
                    <h3>Emergency Case</h3>
                    <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fuga esse unde impedit dolorum. Itaque quia quasi autem unde possimus.
                    </p>
                    <a href="" class="btn btn-blue">Read More</a>
                  </div>
                </div>
              </div>
            </section>
        </main>
    <!-- End service -->
@endsection('content')