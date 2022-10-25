@extends('pages.layout')
@section('content')

<!-- contact Section -->
<section id="contact" class="contact py">
    <div class="container grid">
        <div class="contact-left">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251587.92805561068!2d8.75375241640625!3d9.845212499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105375a7b976777d%3A0xba2493f4aeaa86a2!2sCode%20Plateau%20Campus%20(CPC)!5e0!3m2!1sen!2sng!4v1666508827689!5m2!1sen!2sng" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-right text-white text-center bg-blue">
            <div class="contact-head">
                <h3 class="lead">Contact Us</h3>
                <p class="text text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, odio?</p>
            </div>
            <form action="">
                <div class="form-element">
                    <input type="text" class="form-control" placeholder="Your name...">
                </div>
                <div class="form-element">
                    <input type="email" class="form-control" placeholder="Your email...">
                </div>
                <div class="form-element">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Your message..." class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-white btn-submit">
                    <i class="fas fa-arrow-right"></i>Send Message
                </button>
            </form>
        </div>
        
    </div>
</section>
@endsection('content')