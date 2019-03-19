@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item align-bottom">
                        <a class="nav-link prduct-tab active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">หมวดหมู่สินค้า</a>
                    </li>
                    <li class="nav-item align-bottom">
                        <a class="nav-link prduct-tab" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">สินค้าขายดี</a>
                    </li>
                </ul>

                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show border border-secondary active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <d class="d-flex">
                        <ul class="list-group list-group-horizontal flex-row w-100">
                            <li class="list-group-item border-0 mb-0 text-white rounded-0 text-center bg-gray">
                                <p class="mb-0 text-small">อันดับ</p> 
                                <p class="mb-0 text-large">1</p>
                            </li>
                            <li class="list-group-item border-0 mb-0">
                                <div class="product-chat">
                                    <img src="{{asset('images/profile/2.jpg')}}" class="img-fix" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                    
              
                    </div>
                    <div class="tab-pane fade border border-secondary" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                </div>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
  </div>
@endsection

@section('js_top')
@endsection

@section('js_bottom')
@endsection