<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProvince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->integer('geo_id')->nullable();
            $table->timestamps();
        });

        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (1, 'กรุงเทพมหานคร', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (2, 'สมุทรปราการ', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (3, 'นนทบุรี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (4, 'ปทุมธานี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (5, 'พระนครศรีอยุธยา', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (6, 'อ่างทอง', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (7, 'ลพบุรี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (8, 'สิงห์บุรี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (9, 'ชัยนาท', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (10, 'สระบุรี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (11, 'ชลบุรี', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (12, 'ระยอง', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (13, 'จันทบุรี', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (14, 'ตราด', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (15, 'ฉะเชิงเทรา', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (16, 'ปราจีนบุรี', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (17, 'นครนายก', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (18, 'สระแก้ว', NULL, 5, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (19, 'นครราชสีมา', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (20, 'บุรีรัมย์', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (21, 'สุรินทร์', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (22, 'ศรีสะเกษ', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (23, 'อุบลราชธานี', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (24, 'ยโสธร', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (25, 'ชัยภูมิ', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (26, 'อำนาจเจริญ', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (27, 'หนองบัวลำภู', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (28, 'ขอนแก่น', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (29, 'อุดรธานี', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (30, 'เลย', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (31, 'หนองคาย', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (32, 'มหาสารคาม', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (33, 'ร้อยเอ็ด', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (34, 'กาฬสินธุ์', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (35, 'สกลนคร', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (36, 'นครพนม', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (37, 'มุกดาหาร', NULL, 3, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (38, 'เชียงใหม่', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (39, 'ลำพูน', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (40, 'ลำปาง', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (41, 'อุตรดิตถ์', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (42, 'แพร่', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (43, 'น่าน', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (44, 'พะเยา', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (45, 'เชียงราย', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (46, 'แม่ฮ่องสอน', NULL, 1, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (47, 'นครสวรรค์', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (48, 'อุทัยธานี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (49, 'กำแพงเพชร', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (50, 'ตาก', NULL, 4, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (51, 'สุโขทัย', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (52, 'พิษณุโลก', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (53, 'พิจิตร', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (54, 'เพชรบูรณ์', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (55, 'ราชบุรี', NULL, 4, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (56, 'กาญจนบุรี', NULL, 4, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (57, 'สุพรรณบุรี', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (58, 'นครปฐม', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (59, 'สมุทรสาคร', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (60, 'สมุทรสงคราม', NULL, 2, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (61, 'เพชรบุรี', NULL, 4, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (62, 'ประจวบคีรีขันธ์', NULL, 4, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (63, 'นครศรีธรรมราช', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (64, 'กระบี่', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (65, 'พังงา', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (66, 'ภูเก็ต', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (67, 'สุราษฎร์ธานี', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (68, 'ระนอง', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (69, 'ชุมพร', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (70, 'สงขลา', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (71, 'สตูล', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (72, 'ตรัง', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (73, 'พัทลุง', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (74, 'ปัตตานี', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (75, 'ยะลา', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (76, 'นราธิวาส', NULL, 6, NULL, NULL)"));
        \DB::select(\DB::Raw("INSERT INTO `tb_provinces` VALUES (77, 'บึงกาฬ', NULL, 3, NULL, NULL)"));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('provinces');
    }
}
