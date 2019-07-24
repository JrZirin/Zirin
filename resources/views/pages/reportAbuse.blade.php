@extends('layouts.app')

@section('content')
<div class="container text-center pt-5">
        <form role="form">

        <h1 class="h1 mb-3 font-weight-normal pt-5">Report Abuse </h1>
        <h2 class="h3 mb-3 font-weight-normal"></h2>
            <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Describe in Detail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        <button class="btn  btn-lg btn-outline-success btn-block" type="submit">Sign in</button>

      </form>





@endsection
</div>
