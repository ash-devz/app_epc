@extends('layout')
@section('page-title') Home - EPC Application @stop
@section('page-content')
<section class="bg-home" style="background: url('/assets/images/bg-home.jpg') center center;">
  <div class="bg-overlay"></div>
  <div class="home-center">
    <div class="home-desc-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="title-heading text-center text-white">
              <h1 class="heading font-weight-bold mb-4">Find an energy performance certificate (EPC)</h1>
            </div>
          </div>
        </div>
        <div class="home-form-position">
          <div class="row">
            <div class="col-lg-12">
              <div class="home-registration-form p-4 mb-3">
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