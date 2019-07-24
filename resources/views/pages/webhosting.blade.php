<style type="text/css">
  .featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  border-color:#04c270;
  
}
</style>

@extends('layouts.app')

@section('content')


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center " >
    <h1 class="display-4 pt-5">Zirin Labs Web Hosting Packages</h1>
    <p class="lead"></p>
  </div>
<div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Personal</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">UGX 100,000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>1gb web disk Space</li>
            <li>4000mbs Band Width</li>
            <li>2 databases</li>
            <li>unlimited Sub Domians</li>
            <li>20 emails</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-success">Contact Us</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Basic</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">UGX 300,000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>3 GB of storage</li>
            <li>10000mbs Band Width</li>
            <li>10 databases</li>
            <li>unlimited Sub Domians</li>
            <li>50 emails</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-success">Contact Us</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Gold</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">UGX 500,000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10GB of storage</li>
            <li>unmetered Band Width</li>
            <li>30 databases</li>
            <li>unlimited Sub Domians</li>
            <li>100 emails</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-success">Contact us</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Premuim</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">UGX 1,500,000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>50GB of storage</li>
            <li>free domain</li>
            <li>unlimited databases</li>
            <li>unlimited Sub Domians</li>
            <li>unlimited emails</li>
            <li>1 year SSL certificate†† – increase search rankings. (Restrictions Apply)</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-success">Contact us</button>
        </div>
 </div>
 <p>We also offer custom hosting plans to suit your needs, should you require them, please do not hesitate to ask us. Hosting with us entitles you to 24 Hr support by phone, email or chat.</p>

    </div>
    @endsection
