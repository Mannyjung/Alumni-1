<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>register-software</title>
  <?php require('bs.html'); ?>

  <style>
    .booder1 {
      border-bottom: 1px solid #A0A0A0;
      width: 750px;

    }

    .booder {
      border-bottom: 1px solid #A0A0A0;

    }
  </style>
</head>

<body>
  <!-- header -->
  <div align="center">
    <img src="photo/header1920px.png" width="100%">
  </div>
  <!-- header -->



  <!-- Nav -->
  <?php require('nav.html'); ?>
  <!-- Nav -->
  <br><br>
  <!-- detail -->
  <div class="container" align="center">
    <h1>ลงทะเบียนศิษย์เก่า</h1><br>
    <p></p>
    <div class="booder1">
    </div>
  </div>
  <br>
  <p></p>
  <div class="container">

    <form method="POST" action="add.php" enctype="multipart/form-data">
      <div class="container" style="color: blue;">
        <h3>ข้อมูลส่วนตัว</h3>
      </div>
      <br>
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="title">คำนำหน้า</label>
          <select id="title" class="form-control" name="title">
            <option selected>นาย</option>
            <option>นาง</option>
            <option>นางสาว</option>
          </select>
        </div>
        <div class="form-group col-md-5">
          <label for="fname">ชื่อ</label>
          <input type="text" class="form-control" id="fname" placeholder="ชื่อ(ภาษาไทย)" name="fname">
        </div>
        <div class="form-group col-md-5">
          <label for="lname">นามสกุล</label>
          <input type="text" class="form-control" id="lname" placeholder="นามสกุล(ภาษาไทย)" name="lname">
        </div>
      </div>

      <div class="form-group">
        <label for="idcard">เลขบัตรประชาชน</label>
        <input type="text" class="form-control" id="idcard" placeholder="x-xxxx-xxx-xx-xx-x" name="idcard" maxlength="13">
      </div>
      <div class="form-row">

        <div class="form-group">
          <label for="select-sex">เพศ</label><br>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="ชาย">
            <label class="custom-control-label" for="customRadioInline1">ชาย</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="หญิง">
            <label class="custom-control-label" for="customRadioInline2">หญิง</label>
          </div>
        </div>

        <div class="form-group col-md-4">
          <label for="date">วัน/เดือน/ปี เกิด</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group col-md-6">
          <label for="job">อาชีพ/ตำแหน่งงาน</label>
          <input type="text" class="form-control" id="job" name="job" placeholder="อาชีพ/ตำแหน่งงาน">
        </div>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Tel">เบอร์โทรศัพท์</label>
          <input type="text" class="form-control" id="Tel" name="tel" placeholder="xx-xxx-xxxx" maxlength="10">
        </div>

        <div class="form-group col-md-6">
          <label for="Facebook">Facebook</label>
          <input type="text" class="form-control" id="Facebook" name="face">
        </div>
        <div class="form-group col-md-6">
          <label for="email">E-mail(ใช้เพื่อเข้าสู่ระบบ)</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@exam.com">
        </div>
        <div class="form-group col-md-6">
          <label for="password">รหัสผ่าน</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <p></p>
      <!--   <div class="form-group">
    <label for="upphoto">รูปภาพ(ท่าน)</label>
    <input type="file"  name="image" >
  </div> -->

      <div class="row">
        <div class="col-1.5">
          <label for="upphoto">รูปภาพ(ท่าน)</label>
        </div>
        <div class="col-6">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
          </div>
        </div>
      </div>
      <br> <br>

      <div class="booder">
      </div>

      <br>
      <div class="container" style="color: blue;">
        <h3>ที่อยู่ปัจจุบันที่สามารถติดต่อได้</h3>
      </div><br>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="House-No">บ้านเลขที่</label>
          <input type="text" class="form-control" id="House-No" name="House-No">
        </div>

        <div class="form-group col-md-4">
          <label for="Moo-home">หมู่บ้าน</label>
          <input type="text" class="form-control" id="Moo-home" name="Moo-home">
        </div>
        <div class="form-group col-md-4">
          <label for="road">ถนน</label>
          <input type="text" class="form-control" id="road-home" name="road-home">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Province">จังหวัด</label>
          <input type="text" class="form-control" id="Province-home" name="Province-home">
        </div>

        <div class="form-group col-md-4">
          <label for="Area">เขต/อำเภอ</label>
          <input type="text" class="form-control" id="Area-home" name="Area-home">
        </div>
        <div class="form-group col-md-4">
          <label for="Sub-area">แขวง/ตำบล</label>
          <input type="text" class="form-control" id="Sub-area-home" name="Sub-area-home">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Postal-Code">รหัสไปรษณีย์</label>
          <input type="text" class="form-control" id="Postal-Code-home" name="Postal-Code-home" maxlength="5">
        </div>
        <div class="form-group col-md-6">
          <label for="Tel-home">เบอร์โทรศัพท์(ถ้ามี)</label>
          <input type="text" class="form-control" id="Tel-home" name="Tel-home" placeholder="xx-xxx-xxxx" maxlength="10">
        </div>

      </div><br>
      <div class="booder">
      </div>
      <br>
      <div class="container" style="color: blue;">
        <h3>ที่อยู่สถานที่ทำงาน</h3>
      </div><br>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Work-No">บ้านเลขที่</label>
          <input type="text" class="form-control" id="Work-No" name="Work-No">
        </div>

        <div class="form-group col-md-4">
          <label for="Work-Moo">หมู่บ้าน</label>
          <input type="text" class="form-control" id="Moo-work" name="Moo-work">
        </div>
        <div class="form-group col-md-4">
          <label for="Work-road">ถนน</label>
          <input type="text" class="form-control" id="road-work" name="road-work">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="Work-Province">จังหวัด</label>
          <input type="text" class="form-control" id="Province-work" name="Province-work">
        </div>

        <div class="form-group col-md-4">
          <label for="Work-Area">เขต/อำเภอ</label>
          <input type="text" class="form-control" id="Area-work" name="Area-work">
        </div>
        <div class="form-group col-md-4">
          <label for="Work-Sub-area">แขวง/ตำบล</label>
          <input type="text" class="form-control" id="Sub-area-work" name="Sub-area-work">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Work-Postal Code">รหัสไปรษณีย์</label>
          <input type="text" class="form-control" id="Postal-Code-work" name="Postal-Code-work" maxlength="5">
        </div>
        <div class="form-group col-md-6">
          <label for="Work-Tel">เบอร์โทรศัพท์(ถ้ามี)</label>
          <input type="text" class="form-control" id="Tel-work" name="Tel-work" placeholder="xx-xxx-xxxx" maxlength="10">
        </div>
      </div>
      <br>
      <div class="booder">
      </div>
      <br>

      <div class="container" style="color: blue;">
        <h3>ข้อมูลศิษย์เก่า</h3>
      </div><br>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="attend">ปีที่เข้ารับการศึกษา (พ.ศ.)</label>
          <!--  <input type="text" class="form-control" id="attend" name="attend" maxlength="4"> -->
          <select id="attend" class="form-control" name="attend">
            <option selected>เลือกปีการศึกษา่</option>
            <option value="2553">2553</option>
            <option value="2554">2554</option>
            <option value="2555">2555</option>
            <option value="2556">2556</option>
            <option value="2557">2567</option>
            <option value="2558">2558</option>
            <option value="2559">2559</option>

          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="finish">ปีที่จบการศึกษา (พ.ศ.)</label>
          <!--    <input type="text" class="form-control" id="finish"name="finish"maxlength="4"> -->
          <select id="finish" class="form-control" name="finish">
            <option selected>เลือกปีการศึกษา่</option>
            <option value="2556">2556</option>
            <option value="2557">2557</option>
            <option value="2558">2558</option>
            <option value="2559">2559</option>
            <option value="2560">2560</option>
            <option value="2561">2561</option>
            <option value="2562">2562</option>

          </select>
        </div>
      </div>


      <br><br>

      <div align="right">
        <button type="submit" class="btn btn-primary">ยืนยัน</button>
      </div>
      <br><br>


    </form>

  </div>
  <!-- detail -->

</body>

</html>