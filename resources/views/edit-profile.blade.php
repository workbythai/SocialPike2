@extends('Layouts.layout')
@section('css_top')
@endsection

@section('css_bottom')
@endsection

@section('body')

  <div class="wrapper">
    <div class="container border-0 rounded-0 bg-white py-md-5 py-3 px-md-5 px-3">

    	<section class="d-flex justify-content-center">
            <div class="d-block px-3">
              <a href="#">
                <div class="photo-profile">
                  <img src="{{asset('images/profile/1.jpg')}}" class="img-fix" alt="">
                </div>
              </a>
              <div class="text-center font-italic">
              	<a href="#"><u>เปลี่ยนรูปโปรไฟล์</u></a>
              </div>
            </div>
            <div class="d-block px-3 ed-mailandpass position-relative">
                <h4>Mr.Socia Ecommerce</h4>
                <p class="mb-0">mrsocial@gmail.com</p>
                <p class="mb-0">Password *******</p>
                <a href="#" class="ed-icon-pent">
                	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </div>
        </section>

        <hr>

        <section>
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="col-md-12 mb-4 text-lg-left text-center">
	        			<b class="ed-title">ข้อมูลส่วนตัว</b>
	        		</div>
	        		<div class="form-group col-md-12 mb-3">
					    <label class="font-weight-bold">ชื่อ-นามสกุล</label>
					    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="Socail Ecommerce">
					</div>
					<div class="form-group col-md-12 mb-3">
					    <label class="font-weight-bold">ชื่อผู้ใช้</label>
					    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="Username">
					</div>
					<div class="form-group col-md-12 mb-3">
						<label class="font-weight-bold">วันเกิด</label>
						<div class="row">
							<div class="col-4">
								<input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="20/05/2531">
							</div>
							<div class="col-8 mt-1">
								<label class="pr-3">เพศ</label>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="sex" value="option1" checked>
								  <label class="form-check-label">ชาย</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="sex" value="option2">
								  <label class="form-check-label">หญิง</label>
								</div>
							</div>
						</div>
					</div>
        		</div>
        		<div class="col-lg-6">
        			<div class="col-md-12 mb-4 text-lg-left text-center">
	        			<b class="ed-title">ช่องทางการติดต่อ</b>
	        		</div>
	        		
					<div class="form-group col-md-12 mb-3">
					    <label class="font-weight-bold">เบอร์โทรศัพท์</label>
					    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="089-123-4567">
					</div>
					
					<div class="form-group col-md-12 mb-3">
					    <label class="font-weight-bold">Facebook</label>
					    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="Facebook./social">
					</div>
					
					<div class="form-group col-md-12 mb-3">
					    <label class="font-weight-bold">Twiiter</label>
					    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="twiiter.com">
					</div>
        		</div>
        	</div>
        </section>

        <hr>

        <section class="mb-5">
        	<div class="row">
        		<div class="col-12 mb-3 text-md-left text-center">
        			<b class="ed-title">ข้อมูลส่วนตัว</b>
        		</div>
        		<div class="col-12 mb-5 text-md-left text-center">256/344 หมู่ 4 ถนนรามคำแหง ตำบลคลองกุ่ม อำเภอบึงกุ่ม กรุงเทพมหานคร 12400</div>
        		<div class="col-12 mb-3 text-md-left text-center">
        			<b class="ed-title">เพิ่มที่อยู่ใหม่</b>
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">ชื่อ-นามสกุล</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">อาคาร</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">บ้านเลขที่</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">ชั้น</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">หมู่</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">ซอย</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">ถนน</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">จังหวัด</label>
				    <select class="form-control border-secondary rounded-0 ed-tect-input py-2" id="sel1">
					    <option>กรุงเทพมหานคร</option>
					    <option>ชลบุรี</option>
					    <option>สิงห์บุรี</option>
					    <option>ลพบุรี</option>
					</select>
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">อำเภอ</label>
				    <select class="form-control border-secondary rounded-0 ed-tect-input py-2" id="sel1">
					    <option>เมือง</option>
					    <option>บางซื่อ</option>
					    <option>บางบ่อ</option>
					    <option>บางระจัน</option>
					</select>
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">ตำบล/แขวง</label>
				    <select class="form-control border-secondary rounded-0 ed-tect-input py-2" id="sel1">
					    <option>เมือง</option>
					    <option>บางซื่อ</option>
					    <option>บางบ่อ</option>
					    <option>บางระจัน</option>
					</select>
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">รหัสไปรษณีย์</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        		<div class="col-lg-4 col-md-6 col-12 mb-3">
        			<label class="font-weight-bold">เบอร์ติดต่อ</label>
				    <input type="text" class="form-control border-secondary rounded-0 ed-tect-input py-2" value="">
        		</div>
        	</div>
        </section>

        <section class="mb-5">
        	<div class="col-sm-8 mx-auto">
        		<div class="row">
        			<div class="col-6">
        				<button type="button" class="btn w-100 ed-btn-save">บันทึก</button>
        			</div>
        			<div class="col-6">
        				<button type="button" class="btn w-100 ed-btn-cancel">ยกเลิก</button>
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