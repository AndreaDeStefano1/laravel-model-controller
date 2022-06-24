@extends('layout.main')

@section('title', 'Contatti')

@section('content')

<section class="mb-4">

    <h2 class="fw-bold text-center my-4">Contact us</h2>
    <p class="text-center mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us.</p>

    <div class="row">

        <div class="col-9 mb-5">
            <form id="contact-form" >

                <div class="row">

                    <div class="col-6">
                        <div class=" mb-0">
                            <input type="text" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class=" mb-0">
                            <input type="text"  class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="md-form mb-0">
                            <input type="text" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="">
                            <textarea type="text"  rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>


            </form>

            <div class="text-center text-md-left">
                <button class="btn btn-primary" >Send</button>
            </div>
            <div class="status"></div>
        </div>

        <div class="col-3 text-center">
            <ul class="list-unstyled mb-0">
                <li>
                    <h5 class="fw-bold">Address</h5>
                    <p>Via Fasulla 123, Canada</p>
                </li>

                <li>
                    <h5 class="fw-bold">Phone</h5>
                    <p>+ 30 236 667 88</p>
                </li>

                <li>
                    <h5 class="fw-bold">Mail</h5>
                    <p>movie@movie.com</p>
                </li>
            </ul>
        </div>

    </div>

</section>
@endsection
