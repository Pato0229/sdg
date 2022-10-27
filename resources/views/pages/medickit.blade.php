@extends('pages.layout')
@section('content')
    <!-- Slideshow -->
    <div class="fadein">
        <div class="hold">
            <div id="slide" class="slide1"></div>
            <div id="slide" class="slide2"></div>
            <div id="slide" class="slide3"></div>
            <div id="slide" class="slide4"></div>
            <div id="slide" class="slide5"></div>
            <div id="slide" class="slide6"></div>
            <div id="slide" class="slide7"></div>
            <div id="slide" class="slide8"></div>
            <div id="slide" class="slide9"></div>
            <div id="slide" class="slide10"></div>
            <!-- <div id="slide" class="slide11"></div>
            <div id="slide" class="slide12"></div>
            <div id="slide" class="slide13"></div>
            <div id="slide" class="slide14"></div>
            <div id="slide" class="slide15"></div>
            <div id="slide" class="slide16"></div>
            <div id="slide" class="slide17"></div>
            <div id="slide" class="slide18"></div>
            <div id="slide" class="slide19"></div>
            <div id="slide" class="slide20"></div>
            <div id="slide" class="slide21"></div>
            <div id="slide" class="slide22"></div>
            <div id="slide" class="slide23"></div>
            <div id="slide" class="slide24"></div>
            <div id="slide" class="slide25"></div> -->
        </div>
    </div>
    <!-- Slideshow End -->
    <div id="slider">
        <ul id="slideWrap"> 
            <li>
                <img src="{{asset('imgs/1.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Know your genes, and cell composition</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/2.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Our Emergency ambulances are one call away, just for you</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/3.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Sometimes, meditation is the best option, be relaxed we've got you</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/4.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Serene home for the elderly for our customers</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/4.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Quick response team just for you</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/5.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Aware of your blood level? Be sure to check monthly</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/6.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Meditate and stretch some more</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/7.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Be conscious of what you take into your body, eat healthy and balanced diets</p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/8.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Get access to our expertise services on emergency & surgical operations, </p>
                </div>
            </li>
            <li>
                <img src="{{asset('imgs/9.jpg')}}" alt="">
                <div>
                    <p class="moving-text">Gain access to privacy confidential Doctors-Patients relations</p>
                </div>
            </li>
            <li><img src="{{asset('imgs/10.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/11.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/12.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/13.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/14.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/15.jpeg')}}" alt=""></li>
            <li><img src="{{asset('imgs/15.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/16.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/17.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/18.jpeg')}}" alt=""></li>
            <li><img src="{{asset('imgs/19.jpeg')}}" alt=""></li>
            <li><img src="{{asset('imgs/20.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/21.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/22.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/23.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/24.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/pexels-miguel-á-padriñán-806427.jpg')}}" alt=""></li>
            <li><img src="{{asset('imgs/photo-1532938911079-1b06ac7ceec7.jpeg')}}" alt=""></li>
            <li><img src="{{asset('imgs/WhatsApp Image 2022-08-27 at 1.15.06 PM(1).jpeg')}}" alt=""></li>
          </ul>
          <a id="prev" href="#">&#8810;</a>
          <a id="next" href="#">&#8811;</a>
    </div>
@endsection('content')