@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">

        <section class="mb-3">
          <div class="title-page mb-5">
            <span class="text-gold font-weight-bold">สมัครขายของในเว็บเรา</span>
            <hr class="hr-title border-gold">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ชื่อเล่น</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>ที่อยุ่</label>
                <textarea class="form-control border-secondary rounded-0 ed-tect-input py-2" rows="5"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>เบอร์โทรศัพทื</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>เบอร์ติดต่อร้าน</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="form-group">
                <label>อีเมล</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="form-group">
                <label>Line ID</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" placeholder="">
              </div>
            </div>
          </div>
        </section>

        <section class="d-none">
          <div class="card border-secondary rounded-0 register-card-chat">
            <div class="row h-100">
              <div class="col-lg-5 pr-0">
                <ul class="nav nav-pills register-tab-link border-bottom" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link profile-tab border-none active py-3" href="#">ทั้งหมด</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link profile-tab border-none py-3" href="#">คุยกับผู้ซื้อ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link profile-tab border-none py-3" href="#">คุยกับผู้ขาย</a>
                  </li>
                </ul>


                <div class="tab-content">
                  <div class="tab-pane fade show active">
                    <div class="rgs-scroll-chat">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item rgs-name-chat active">
                          <a href="#">
                            <div class="row">
                              <div class="col-2">
                                <div class="rgs-radius">
                                  <img src="{{asset('images/profile/10.jpg')}}" class="w-100 img-fix" alt="">
                                </div>
                              </div>
                              <div class="col-10">
                                <div class="d-inline-grid">
                                   <span class="text-gold">Jeans Shop</span>
                                   <span class="text-small">สินค้าหมดรึยังคะ ?</span>
                                   <span class="text-small">12 : 17</span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </li>
                        @for ($i = 1 ; $i < 10 ; $i++)
                        <li class="list-group-item rgs-name-chat">
                          <a href="#">
                            <div class="row">
                              <div class="col-2">
                                <div class="rgs-radius">
                                  <img src="{{asset('images/profile/'.$i.'.jpg')}}" class="w-100 img-fix" alt="">
                                </div>
                              </div>
                              <div class="col-10">
                                <div class="d-inline-grid">
                                   <span class="text-gold">Jeans Shop</span>
                                   <span class="text-small">สินค้าหมดรึยังคะ ?</span>
                                   <span class="text-small">12 : 17</span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </li>
                        @endfor
                      </ul>
                    </div>
                  </div>
                </div>

                
              </div>


              <div class="col-lg-7 border-left pl-0 bg-light" style="position: relative;">
                <ul class="nav nav-pills register-tab-link border-bottom bg-white">
                  <li class="nav-item col-2 px-1">
                    <div class="chat-img-user mx-auto">
                      <img src="{{asset('images/profile/2.jpg')}}" class="w-100 img-fix" alt="">
                    </div>
                  </li>
                  <li class="nav-item text-left col-6 chat-name-font px-1">
                    <span class="text-gold font-weight-bolder">Jeans Shop</span>
                  </li>
                  <li class="nav-item col-4 px-1">
                    <table class="w-100 h-100">
                      <tr>
                        <td class="w-25 px-1">
                          <a href="#">
                            <img src="{{asset('images/social/facebook.png')}}" class="w-100">
                          </a>
                        </td>
                        <td class="w-25 px-1">
                          <a href="#">
                            <img src="{{asset('images/social/instagram.png')}}" class="w-100">
                          </a>
                        </td>
                        <td class="w-25 px-1">
                          <a href="#">
                            <img src="{{asset('images/social/line.png')}}" class="w-100">
                          </a>
                        </td>
                        <td class="w-25 px-1">
                          <a href="#">
                            <img src="{{asset('images/social/play-button.png')}}" class="w-100">
                          </a>
                        </td>
                      </tr>
                    </table>
                  </li>
                </ul>

                <div class="caht-box">
                  <p id="message" class="mt-3"></p>
                </div>

                <div class="caht-input-bottom ">
                  <form id="newsletterform">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="fileContainer">
                          +
                          <input type="file"/>
                        </label>
                      </div>
                      <input type="text" id="myInput" class="form-control" >
                      <div class="input-group-append">
                        <button type="button" class="input-group-text chat-submit" id="btn">ส่ง</button>
                      </div>
                    </div>
                  </form>
                </div>
                

              </div>
            </div>
          </div>
        </section>

    </div>
  </div>
@endsection

@section('js_top')
@endsection

@section('js_bottom')
@endsection