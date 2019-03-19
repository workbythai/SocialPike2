@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">
        <section class="mb-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item align-bottom list-tab-cat">
                            <a class="nav-link prduct-tab active" data-toggle="tab" href="#home">หมวดหมู่สินค้า</a>
                        </li>
                        <li class="nav-item align-bottom list-tab-cat">
                            <a class="nav-link prduct-tab" data-toggle="tab" href="#menu1">สินค้าขายดี</a>
                        </li>
                    </ul>
                    <div class="tab-content list-chat-user">
                        <div class="tab-pane fade show border border-secondary active" id="home">
                            <table class="w-100">
                                @for ($i = 1 ; $i <= 10 ; $i++)
                                <tr class="border-bottom border-secondary list-chat">
                                    <td class="text-center bg-gray text-white list-rank py-2">
                                        <p class="mb-0 text-small">อันดับ</p>
                                        <p class="mb-0 text-large">{{ $i }}</p>
                                    </td>
                                    <td class="list-img-profile py-2">
                                        <div class="product-chat mx-auto">
                                            <img src="{{asset('images/profile/'.$i.'.jpg')}}" class="img-fix" alt="">
                                        </div>
                                    </td>
                                    <td class="list-name py-2">
                                        <p class="mb-0 text-gold">Jeans Shop</p>
                                        <span class="text-small text-muted">กางเกงยีนส์มือสอง</span>
                                    </td>
                                </tr>
                                @endfor
                            </table>   
                        </div>

                        <div class="tab-pane fade border border-secondary" id="menu1">
                        <table class="w-100">
                            @for ($i = 1 ; $i <= 10 ; $i++)
                            <tr class="border-bottom border-secondary list-chat">
                                <td class="text-center bg-gray text-white list-rank py-2">
                                    <p class="mb-0 text-small">อันดับ</p>
                                    <p class="mb-0 text-large">{{ $i }}</p>
                                </td>
                                <td class="list-img-profile py-2">
                                    <div class="product-chat mx-auto">
                                        <img src="{{asset('images/profile/'.$i.'.jpg')}}" class="img-fix" alt="">
                                    </div>
                                </td>
                                <td class="list-name py-2">
                                    <p class="mb-0 text-gold">Jeans Shop</p>
                                    <span class="text-small text-muted">กางเกงยีนส์มือสอง</span>
                                </td>
                            </tr>
                            @endfor
                        </table>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 mb-4">
                    <div class="list-all-caht">
                        แชทรวม
                    </div>
                    <div class="border border-secondary">
                        <div class="caht-box px-3">
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

        <section>
            <div class="title-page mb-5">
              <span>เครื่องสำอางและความงาม</span>
              <hr class="hr-title">
            </div>
            <div class="multiple-items position-relative">
            @for ($j = 1 ; $j < 6; $j++)
              <div>
                <div class="card border-secondary overflow-hidden">
                  <a href="#">
                    <div class="list-img-logo">
                      <img class="img-fix" src="{{asset('images/store/'.$j.'.png')}}" alt="Image description">
                    </div>
                  </a>
                  <div class="card-body px-2 py-2">
                    <div class="store-title">
                      <a href="#">Shoponline{{ $j }}</a>
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

    </div>
  </div>
@endsection

@section('js_top')
@endsection

@section('js_bottom')
<script>
  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 2000,
    speed: 1000,
    prevArrow: '<a href="#" class="list-slick-color list-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
    nextArrow: '<a href="#" class="list-slick-color list-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>',

     responsive: [
        {
          breakpoint: 993,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
  });
</script>
@endsection