@extends('layouts.shop')
@section('content')
  
  @include('shop.customer-testimony')

  <section class="ftco-section contact-section bg-light">
    <div class="container">   
      <div class="row block-9">

        <div class="col-md-12 order-md-last d-flex">

          <form action="#" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder='Your Name' >
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder= 'Email' >
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder= 'Subject' >
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder= {{__('Messages')}} ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
    </div>
  </section>

  @include('shop.subscribe')
  
@endsection