@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">
        <section class="mb-4">
            <div class="card bg-drakgold rounded-0  px-sm-5" id="profile-se">
                <div class="card-body">
                    <div class="text-white mb-3">
                      <span class=""><i class="fa fa-quote-left" aria-hidden="true"></i> ข้อความ</span> |
                      <span class=""><i class="fa fa-comments" aria-hidden="true"></i> แชท</span> |
                      <span class=""><i class="fa fa-picture-o" aria-hidden="true"></i> เพิ่มรูปภาพ</span>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control rounded-0 mr-2" placeholder="อัพเดตสถานะ">
                      <div class="input-group-append">
                        <button class="btn text-white status-btn-send" type="button">
                          <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="d-flex justify-content-center mb-5">
            <div class="d-block px-3">
              <a href="#">
                <div class="photo-profile">
                  <img src="{{asset('images/profile/1.jpg')}}" class="img-fix" alt="">
                </div>
              </a>
            </div>
            <div class="d-block px-3">
                <h4>Mr.Socia Ecommerce</h4>
                <a class="btn btn-outline-secondary rounded-0 px-5 mb-3" href="{{url('edit-profile')}}" role="button">
                  UPDATE PROFILE
                </a>
                <div class="profile-follow">
                  <span>มีผู้ติดตามอยู่ 100 คน</span> | 
                  <span>กำลังติดตามอยู่ 50 คน</span>
                </div>
            </div>
        </section>


        <section>
          <ul class="nav nav-pills mb-3 profile-tab-link" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link profile-tab active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">โพสต์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link profile-tab" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">สิ่งที่น่าสนใจ</a>
            </li>
          </ul>
        <div class="tab-content" id="pills-tabContent">


          <div class="tab-pane fade show active py-5" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <section class="mb-5">
              <div class="col-md-10 mx-auto">
                <div class="text-center">
                  <div class="popup">
                    <span class="popuptext">
                     <i class="fa fa-star" aria-hidden="true"></i> อัพเดตล่าสุด <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
                <div class="card profile-last-port">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-5">
                        <a href="#">
                          <div class="product-img">
                            <img src="{{asset('images/product/1.jpg')}}" class="img-fix" alt="">
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-7 position-relative">
                        <div class="font-weight-bolder">
                          <a class="text-info text-large" href="#">vintage champion snapback</a>
                        </div>
                        <div class="text-secondary profile-fix-ex">
                          <span>สภาพใหม่มาก ไร้ตำหนิ ปรับขนาดได้ ของแท้ สีวย champion ราคานี้อย่าคิดมาก</span>
                        </div>
                        <div class="profile-last-port-view text-secondary w-100">
                          <table class="w-100">
                            <tbody>
                              <tr>
                                <td> 
                                  <i class="fa fa-eye" aria-hidden="true"></i>
                                  20,000 เข้าชม
                                </td>
                                <td>
                                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                                  อัพเดตล่าสุด 31/05/2561
                                </td>
                                <td>
                                  <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                                  1,250 Link
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </section>
            <section class="mb-5">
              <div class="row">
                @for ($i = 1 ; $i <= 3 ; $i++)
                  @for ($j = 1 ; $j <= 5 ; $j++)
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                      <div class="card border-secondary overflow-hidden">
                        <a href="#">
                          <div class="store-logo">
                            <img class="img-fix" src="{{asset('images/product/'.$j.'.jpg')}}" alt="Image description">
                          </div>
                        </a>
                        <div class="card-body px-2 py-2">
                          <div class="store-title">
                            <a href="#">Shoponline{{$j}}</a>
                          </div>
                          <div class="store-category text-secondary">
                            เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์
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
                @endfor
              </div>
            </section>
          </div>




          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...2</div>
        </div>

        </section>

    </div>
  </div>
@endsection

@section('js_top')
@endsection

@section('js_bottom')

@endsection