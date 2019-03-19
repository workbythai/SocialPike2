@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">
        <section class="mb-4">
            <div class="card bg-drakgold rounded-0  px-sm-5">
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
        

        <section>
          <div class="text-center">
            <h5>ชุมชน</h6>
          </div>
          <hr>
          <div class="row">


              <div class="col-lg-4 col-sm-6 col-12">
                @for ($i = 1 ; $i < 8 ; $i++)
                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$i.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
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
                      <a href="#">ลำโพง,</a>
                      <a href="#">บลูทูธ,</a>
                      <a href="#">เคสมือถือ,</a>
                      <a href="#">ที่ชาร์จในรถ,</a>
                      <a href="#">เสื้อกีฬา,</a>
                      <a href="#">ลิขสิทธ และอุปกรณ์มือถือ remax ราคาถูกที่สุด,</a>
                    </div>
                  </div>
                  <div class="store-logo">
                    <img class="img-fix" src="{{asset('images/product/'.$i++.'.jpg')}}" alt="Image description">             
                  </div>
                </div>

                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$i++.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                    </div>

                    <div class="input-group mt-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 px-0 py-0">
                          <div class="comment-img-circle">
                            <img src="{{asset('images/profile/10.jpg')}}" class="img-fix" alt="">
                          </div>
                        </span>
                      </div>
                      <input type="text" class="form-control py-0 comment-input cm-name" placeholder="เพิ่มความคิดเห็น">
                      <div class="input-group-append py-0">
                        <button class="btn text-white rounded-circle bg-purple py-1 px-2" type="button">
                          <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>

                  </div>
                </div>
                @endfor
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                @for ($j = 2 ; $j < 5 ; $j++)
                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$j.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                    </div>
                    <div class="input-group mt-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 px-0 py-0">
                          <div class="comment-img-circle">
                            <img src="{{asset('images/profile/10.jpg')}}" class="img-fix" alt="">
                          </div>
                        </span>
                      </div>
                      <input type="text" class="form-control py-0 comment-input cm-name" placeholder="เพิ่มความคิดเห็น">
                      <div class="input-group-append py-0">
                        <button class="btn text-white rounded-circle bg-purple py-1 px-2" type="button">
                          <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$j.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                      <a href="#">ลำโพง,</a>
                      <a href="#">บลูทูธ,</a>
                    </div>
                  </div>
                  <div class="store-logo">
                    <img class="img-fix" src="{{asset('images/product/'.$j.'.jpg')}}" alt="Image description">
                  </div>
                </div>
                @endfor
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                @for ($x = 3 ; $x < 6 ; $x++)
                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$x.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
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
                      <a href="#">ลำโพง,</a>
                      <a href="#">บลูทูธ,</a>
                      <a href="#">เคสมือถือ,</a>
                      <a href="#">ที่ชาร์จในรถ,</a>
                      <a href="#">เสื้อกีฬา,</a>
                      <a href="#">ลิขสิทธ และอุปกรณ์มือถือ remax ราคาถูกที่สุด,</a>
                    </div>
                  </div>
                  <div class="store-logo">
                    <img class="img-fix" src="{{asset('images/product/'.$x.'.jpg')}}" alt="Image description">
                  </div>
                </div>



                <div class="card rounded-0 border-secondary mb-3">
                  <div class="card-body px-1 py-2">
                    <div class="cm-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <table class="w-100 mb-2">
                      <tr>
                        <td class="px-1 align-top" width="15%">
                          <div class="cm-img-circle">
                            <img src="{{asset('images/profile/'.$j.'.jpg')}}" class="w-100 img-fix" alt="">
                          </div>
                        </td>
                        <td class="px-1 align-lg-top align-middle" width="85%">
                          <a href="#" class="text-body cm-name"><b>Mr.Socia Ecommerce</b></a>
                          <ul class="d-flex w-100 store-view">
                            <li class="col-4">
                              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                              <span>20,000 เข้าชม</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span>อัพเดตล่าสุด 31/05/2561</span>
                            </li>
                            <li class="col-4">
                              <span><i class="fa fa-heart text-danger" aria-hidden="true"></i></span>
                              <span>1,250 Like</span>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <div class="store-category cm-cat">
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                      <a href="#">ฟิล์มกระจก,</a>
                      <a href="#">กล้องติดรถยนต์,</a>
                      <a href="#">ฟกล้องติดรถยนต์ Anytek,</a>
                      <a href="#">บลูทธ,</a>
                    </div>

                    <div class="input-group mt-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 px-0 py-0">
                          <div class="comment-img-circle">
                            <img src="{{asset('images/profile/10.jpg')}}" class="img-fix" alt="">
                          </div>
                        </span>
                      </div>
                      <input type="text" class="form-control py-0 comment-input cm-name" placeholder="เพิ่มความคิดเห็น">
                      <div class="input-group-append py-0">
                        <button class="btn text-white rounded-circle bg-purple py-1 px-2" type="button">
                          <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>


                  </div>
                </div>
                @endfor
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