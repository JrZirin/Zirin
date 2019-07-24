@extends('layouts.app')

@section('content')

<!-- start of container-->
<div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center " >
                <h2 class="display-6 pt-5">Computer Repair & Maintenance</h2>
                <p class="lead"></p>
              </div>
              <div style="text-align: center;">We identify, troubleshoot and resolve any TECHNICAL
            problem(s) using a wide range of the latest tools available, techniques and procedures
            used to repair computer hardware, software or network/internet problems.
              </div>
              <div style="text-align: center;">We also do routine check ups to ensure computers and
                related hardware are in good state at all time.
            </div>
            <form role="form">

                    <h1 class="h1 mb-3 font-weight-normal pt-5 text-center">Contact Us</h1>
                    <h2 class="h3 mb-3 font-weight-normal">LEAVE YOUR EMAIL AND WE’LL CONTACT YOU WITHIN THE SAME BUSINESS DAY</h2>
                        <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                    <button class="btn  btn-lg btn-outline-success btn-block" type="submit">Sign in</button>

                  </form>


@endsection
</div>
