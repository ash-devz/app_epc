@extends('layout')
@section('page-title') View Certificate - ' {{$certificate['address']}} ' - EPC Application @stop
@section('page-content')
<section class="bg-half page-next-level " style="background: url('/assets/images/bg-home.jpg') center center;">
  <div class="bg-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="text-center text-white">
          <h1 class="heading font-weight-bold mb-4">Energy Performance Certificate (EPC)</h1>
          <h2 class="heading font-weight-bold mb-4">{{$certificate['address']}}</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7">
        <div class="job-detail border rounded p-4">
          <div class="job-detail-content">
            <div class="job-detail-com-desc overflow-hidden d-block">
              <h4 class="mb-2 text-dark"><i class="mdi mdi-map-marker mr-2"></i>{{$certificate['address']}}  {{$certificate['postcode']}}</h4>
            </div>
          </div>
          <div class="job-detail-desc mt-4">
            <p class=" mb-3">Properties can be rented if they have an energy rating from A to E.</p>
            <p class=" mb-3">If the property is rated F or G, it cannot be let, unless an exemption has been registered. You can read <a href="https://www.gov.uk/guidance/domestic-private-rented-property-minimum-energy-efficiency-standard-landlord-guidance" target="_blank">guidance for landlords on the regulations and exemptions.</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="job-detail border rounded mt-2 p-4">
              <div class="job-detail-content">
                <div class="job-detail-com-desc overflow-hidden d-block">
                  <h4 class="mb-2 text-dark">Breakdown of property’s energy performance</h4>
                </div>
              </div>
              <div class="job-detail-desc mt-4">
                <p class=" mb-3 text-justify">This section shows the energy performance for features of this property. The assessment does not consider the condition of a feature and how well it is working.</p>
                <p class=" mb-3">Each feature is assessed as one of the following:</p>
                <ul>
                  <li>very good (most efficient)</li>
                  <li>good</li>
                  <li>average</li>
                  <li>poor</li>
                  <li>very poor (least efficient)</li>
                </ul>
                <br/>
                <div class="col-lg-12">
                  <div class="row border-bottom mb-3">
                    <div class="col-md-3">
                      <p><strong>Feature</strong></p>
                    </div>
                    <div class="col-md-6">
                      <p><strong>Description</strong></p>
                    </div>
                    <div class="col-md-3">
                      <p><strong>Rating</strong></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Wall</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['walls-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['walls-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Roof</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['roof-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['roof-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Window</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['windows-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['windows-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Main heating</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['mainheat-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['mainheatc-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Main heating control</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['mainheatcont-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['mainheatc-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Hot water  </p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['hotwater-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['hot-water-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Lighting</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['lighting-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['lighting-env-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Floor</p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['floor-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['floor-energy-eff']}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <p>Secondary heating  </p>
                    </div>
                    <div class="col-md-6">
                      <p>{{$certificate['secondheat-description']}}</p>
                    </div>
                    <div class="col-md-3">
                      <p>{{$certificate['sheating-env-eff']}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="job-detail border rounded mt-2 p-4">
              <div class="job-detail-content">
                <div class="job-detail-com-desc overflow-hidden d-block">
                  <h4 class="mb-2 text-dark">Environmental impact of this property</h4>
                </div>
              </div>
              <div class="job-detail-desc mt-4">
                <p class=" mb-3 text-justify">One of the biggest contributors to climate change is carbon dioxide (CO2).<br/>The energy used for heating, lighting and power in our homes produces over a quarter of the UK’s CO2 emissions.</p>
                <br/>
                <div class="col-lg-12">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h6><strong>An average household produces</strong></h6>
                    </div>
                    <div class="col-md-6">
                      <h6>6 tonnes of CO2</h6>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h6><strong>This property produces</strong></h6>
                    </div>
                    <div class="col-md-6">
                      <h6>{{$certificate['co2-emissions-current']}} tonnes of CO2</h6>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <h6><strong>This property's potential production</strong></h6>
                    </div>
                    <div class="col-md-6">
                      <h6>{{$certificate['co2-emissions-potential']}} tonnes of CO2</h6>
                    </div>
                  </div>
                </div>
                <p class="mb-3 text-justify">By making the <a href="#r_changes">recommended changes</a>, you could reduce this property’s CO2 emissions by <strong>{{ $certificate['co2-emissions-current'] - $certificate['co2-emissions-potential'] }} tonnes</strong> per year. This will help to protect the environment. Environmental impact ratings are based on assumptions about average occupancy and energy use. They may not reflect how energy is consumed by the people living at the property.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="r_changes">
          <div class="col-lg-12">
            <div class="job-detail border rounded mt-2 p-4">
              <div class="job-detail-content" >
                <div class="job-detail-com-desc overflow-hidden d-block">
                  <h4 class="mb-2 text-dark">How to improve this property’s energy performance</h4>
                </div>
              </div>
              <div class="job-detail-desc mt-4">
                <p class=" mb-3 text-justify">Making any of the recommended changes will improve this property’s energy efficiency.</p>
                <p class=" mb-3 text-justify">If you make all of the recommended changes, this will improve the property’s energy rating and score from {{$certificate['current-energy-rating']}} ({{$certificate['current-energy-efficiency']}}) to {{$certificate['potential-energy-rating']}} ({{$certificate['potential-energy-efficiency']}}).</p>
                <br/>
                @foreach($recommendations as $key=>$recommendation)
                <div class="job-details-desc-item">
                  <h5 class=" mb-2 border-bottom">Recommendation #{{$key+1}} </h5>
                  <p class=" mb-2">{{$recommendation['improvement-id-text']}}</p>
                  <p class=" mb-2"><strong>Typical installation cost</strong> - {!! $recommendation['indicative-cost'] !!}</p>
                </div>
                <br/>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
        <div class="job-detail border rounded p-4">
          <div class="job-detail-location pt-4">
            <div class="job-details-desc-item">
              <div class="float-left mr-2"><i class="mdi mdi-link-variant "></i></div>
              <p class=" mb-2">Reference Number : {{$certificate['building-reference-number']}}</p>
            </div>
            <div class="job-details-desc-item">
              <div class="float-left mr-2"><i class="mdi mdi-home "></i></div>
              <p class=" mb-2">Type : {{$certificate['built-form']}} {{$certificate['property-type']}}</p>
            </div>
            <div class="job-details-desc-item">
              <div class="float-left mr-2"><i class="mdi mdi-floor-plan "></i></div>
              <p class=" mb-2">Total Floor Area : {{$certificate['total-floor-area']}} Sq. Meters</p>
            </div>
          </div>
        </div>
        <div class="job-detail border rounded mt-4 p-4">
          <div class="job-detail-time pt-4">
            <ul class="list-inline mb-0">
              <li class="clearfix  pb-3">
                <div class="float-left">Current Energy Rating</div>
                <div class="float-right">
                  <h5 class="f-13 mb-0">{{$certificate['current-energy-rating']}}</h5>
                </div>
              </li>
              <li class="clearfix  pb-3">
                <div class="float-left">Potential Energy Rating</div>
                <div class="float-right">
                  <h5 class="f-13 mb-0">{{$certificate['potential-energy-rating']}}</h5>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="job-detail border rounded mt-4"><a href="#" class="btn btn-primary btn-block" onclick="window.print()">Print Certificate</a></div>
        <div class="job-detail border rounded mt-4"><a href="/compare/{{base64_encode($certificate['postcode'])}}" class="btn btn-primary btn-block">Compare EPC with Neighborhood</a></div>
      </div>
    </div>
  </div>
</section>
@stop
@section('custom-scripts')
<script type="text/javascript">
  (function ($) {
    localStorage.setItem("current-efficiency","{{$certificate['current-energy-efficiency']}}") ;
  })(jQuery)
</script>
@stop