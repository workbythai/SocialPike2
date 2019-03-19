@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
  <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">
    <section class="mb-5">
        
            <div class="title-page mb-5">
              <span>เครื่องสำอางและความงาม</span>
              <hr class="hr-title">
            </div>
            <div class="row">
              @for ($i = 1 ; $i <= 18 ; $i++ )
              <div class="col-lg-4 col-sm-6 col-12 mb-4">
                <div class="card border-secondary overflow-hidden">
                  <a href="#">
                    <div class="store-logo">
                      <img class="img-fix" src="{{asset('images/store/'.$i.'.png')}}" alt="Image description">
                    </div>
                  </a>
                  <div class="card-body px-2 py-2">
                    <div class="store-title">
                      <a href="#">Shoponline{{$i}}</a>
                    </div>
                    <div class="store-category">
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                      <a href="#">ลำโพง,</a>
                      <a href="#">บลูทูธ,</a>
                      <a href="#">เคสมือถือ,</a>
                      <a href="#">ที่ชาร์จในรถ,</a>
                      <a href="#">เสื้อกีฬา,</a>
                      <a href="#">ลิขสิทธ และอุปกรณ์มือถือ remax ราคาถูกที่สุด,</a>
                    </div>
                    
                    <ul class="d-flex w-100 store-view">
                      <li>
                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span>20,000 เข้าชม</span>
                      </li>
                      <li>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span>อัพเดตล่าสุด 31/05/2561</span>
                      </li>
                      <li>
                        <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                        <span>1,250 Like</span>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
              @endfor
            </div>
      </section>
      <section>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link border-buttonpagenp" href="#">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
          </li>
          <li class="page-item"><a class="page-link pagelink-number" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link border-buttonpagenp" href="#">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </nav>
      </section>
    </div>
  </div>
@endsection

@section('js_top')
@endsection

@section('js_bottom')

@endsection