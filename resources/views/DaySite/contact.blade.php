@extends('DaySite.master')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

          </div>

          <div class="row" data-aos="fade-up">

            <div class="col-lg-6 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            {{-- role="form" class="php-email-form"forms/contact.php --}}
            <div class="col-lg-6">
              <form action="{{route('day.contact')}}" method="post" >
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name"  id="name" placeholder="Your Name" value="{{old('name')}}" class="form-control @error('name')
                    is-invalid
                    @enderror " >
                    @error('name')
                    <small class="invalid-feedback">{{$message}}</small>
                @enderror
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email"  name="email" id="email" placeholder="Your Email" value="{{old('email')}}" class="form-control @error('email')
                    is-invalid
                    @enderror " >
                    @error('email')
                    <small class="invalid-feedback">{{$message}}</small>
                @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text"  name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" class="form-control @error('subject')
                  is-invalid
                  @enderror " >
                  @error('subject')
                  <small class="invalid-feedback">{{$message}}</small>
              @enderror
                </div>
                <div class="form-group mt-3">
                  <textarea  name="message" rows="5" placeholder="Message" class="form-control @error('message')
                  is-invalid
                  @enderror " >
             </textarea>
             @error('message')
             <small class="invalid-feedback">{{$message}}</small>
         @enderror
                </div>
                {{-- <div class="my-3"> --}}
                  {{-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> --}}
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
@stop
