@extends('layout')
@section('page-title') Search ' {{$query}} ' - EPC Application @stop
@section('page-content')
<section class="bg-half page-next-level" style="background: url('/assets/images/bg-home.jpg') center center;">
  <div class="bg-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="text-center text-white">
          <h4 class="text-uppercase title mb-4">Search Results For ' {{$query}} '</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="home-form-position">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="home-registration-form job-list-reg-form bg-light shadow p-4 mb-3">
          {{ Form::open(array('url' => '/search')) }}
          <div class="row">
            <div class="col-lg-9 col-md-6">
              <div class="registration-form-box">
                <i class="fa fa-home"></i> <input type="text" name="address" class="form-control rounded registration-input-box" placeholder="Enter Address / Postcode" />
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="registration-form-box"><input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Search" /></div>
            </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
<section class="section pt-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section-title text-center mb-4 pb-2">
          <h4 class="title title-line pb-5">Address(s) matching '{{$query}}'</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 mt-4 pt-2">
        <div class="row">

          @isset($addresses['rows'])

          @foreach($addresses['rows'] as $address)
          <div class="col-lg-12 mt-4 pt-2">
            <div class="job-list-box border rounded">
              <div class="p-3">
                <div class="row align-items-center">
                  <div class="col-lg-9 col-md-9">
                    <div class="job-list-desc">
                      <h6 class="mb-2"><a href="#" class="text-dark"><i class="mdi mdi-map-marker mr-2"></i>{{$address['address']}} {{$address['postcode']}}</a></h6>
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <p class="text-muted mb-0"><i class="mdi mdi-calendar-range mr-2"></i>{{$address['inspection-date']}}</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                    <div class="job-list-button-sm text-right">
                      <div>
                        <p>Current Energy Rating - <span class="badge badge-success">{{$address['current-energy-rating']}}</span></p>
                      </div>
                      <div class="mt-3"><a href="/view/{{$address['lmk-key']}}" class="btn btn-sm btn-primary">View</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="col-lg-12 mt-4 pt-2 text-center">
            <h3>No Address(s) Found</h3>
          </div>        
          @endisset
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@section('custom-scripts')
<script type="text/javascript">
  (function ($) {
    localStorage.removeItem("current-efficiency");
  })(jQuery)
</script>
@stop