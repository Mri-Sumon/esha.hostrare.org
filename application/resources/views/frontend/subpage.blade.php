@extends('layouts.FrontendLayout')

@section('content')
<div id="home" class="slider-area" style="margin-top:50px; margin-bottom:50px;">
    <div class="container-fluid" style="padding-left: 45px; padding-right: 45px;">
        @if($pageContent->slug!='contact_us')
            <div class="row mb-5">
                <div class="col-12 col-lg-12 col-md-12">
                    <h3 class="text-center mb-5">{{$pageContent->title}}</h3>
                    {!!$pageContent->details!!}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <p><b>Address:</b></p>
                    <p>{!!$settings->address!!}</p>
                    <p>Phone: {{$settings->mobile}}</p>
                    <br>
                    <br>
                    
                    <p><b>Office Hours:</b></p>
                    <p>{{$settings->office_hours}}</p>
                    <br>
                    <br>
                    
                    <style>
                        @media only screen and (max-width: 768px) {
                            .googlemap{
                                margin-bottom: 30px;
                            }
                        }
                    </style>
                    <div class="col-12">
                        <p><b>Find us on Google Maps:</b></p>
                        <div class="googlemap" style="height: 400px;">
                            {!!$settings->map_link!!}
                        </div>
                    </div>       
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="form contact-form">
                        {{-- <div id="sendmessage">Your message has been sent. Thank you!</div> --}}
                        {{-- <div id="errormessage"></div> --}}
                        <form action="{{URL::to('/')}}/feedbackemail" method="post" role="form" class="" style="border: 1px solid gray; padding: 20px;">
                        @csrf
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validation"></div>
                            </div> <br>
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                            </div> <br>
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div> <br>
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validation"></div>
                            </div> <br>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div> 
@endsection
