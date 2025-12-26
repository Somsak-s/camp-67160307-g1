@extends('template.default')

@section('title' , 'Workshop FORM')

@section('content')

<h1>Workshop #HTML - FORM</h1>
    <form>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fname">ชื่อ</label>
            </div>
            <div class="col">
                <input id="fname" class="form-control" >
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="Invalid-feedback">
                    โปรดระบุชื่อ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="lname">นามสกุล</label>
            </div>
            <div class="col">
                <input id="lname" class="form-control">
              <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="Invalid-feedback">
                    โปรดระบุนามสกุล
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="daymonthyear">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input class="form-control" id="daymonthyear" type="date">
             <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class= "Invalid-feedback">
                    โปรดระบุวันที่
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input id="age" class="form-control" >
            <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="Invalid-feedback">
                    โปรดระบุอายุ
                </div>
            </div>
        </div>

    <div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>เพศ</label>
    </div>

    <div class="col">
        <div id="genderGroup">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                <label class="form-check-label" for="male">Male</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="female">Female</label>
            </div>

            <!-- feedback -->
            <div class="invalid-feedback" id="gender-invalid">
                กรุณาเลือกเพศ
            </div>
            <div class="valid-feedback" id="gender-valid">
                ถูกต้อง
            </div>

        </div>
    </div>
</div>



        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input class="form-control" id="photo" type="file">
                  <div class="valid-feedback">
            ถูกต้อง
        </div>
        <div class="invalid-feedback">
            กรุณาเลือกรูป
        </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="address">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea class="form-control" id="address" name="address" rows="3" cols="35"></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fav-color">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select name="fav_color" class="form-select" id="fav-color">
                <option value="">-- กรุณาเลือก --</option>
                <option value="red">สีแดง</option>
                <option value="blue">สีน้ำเงิน</option>
                <option value="green">สีเขียว</option>
                </select>

                <div class="valid-feedback">
                ถูกต้อง
                </div>
                <div class="invalid-feedback">
                กรุณาเลือกสี
                </div>
            </div>
        </div>

        <div class="row mt-3">
    <div class="col-sm-12 col-md-4">
        <label>เพลงที่ชอบ</label>
    </div>

    <div id="musicGroup">
    <input type="radio" name="fav-music" value="Forlife" onchange="checkMusic()"> เพื่อชีวิต
    <input type="radio" name="fav-music" value="Childfield" onchange="checkMusic()"> ลูกทุ่ง
    <input type="radio" name="fav-music" value="Other" onchange="checkMusic()"> อื่นๆ

    <div id="music-invalid" style="color:red; display:none;">
        กรุณาเลือกเพลงที่ชอบ
    </div>
    <div id="music-valid" style="color:green; display:none;">
        ถูกต้อง
    </div>
</div>
</div>




        <div class="row mt-3">
             <div class="col">
                 <input id="privacy" type="checkbox" name="privacy" value="True">
                 <label for="privacy">ยินยอมให้เก็บข้อมูล</label>
                </div> </div>
                <div class="row mt-2" id="button">
                     <div class="col">
                         <button type="reset" class="btn btn-light" value="Reset" id="reset-button" >Reset</button>
                        </div> <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-success" onclick="clickme()">Submit</button>
        </div>
    </div>
</div>
    </form>
</h1>
@endsection

@push('scripts')
    <script>
        let clickme = function (){
                let fname = document.getElementById("fname");
                let lname = document.getElementById("lname");
                let daymonthyear = document.getElementById("daymonthyear");
                let age = document.getElementById("age");
                let forlife = document.getElementById("forlife");
                let gender = document.querySelector('input[name="gender"]:checked');
                let group = document.getElementById("genderGroup");
                let invalid = document.getElementById("gender-invalid");
                let valid = document.getElementById("gender-valid");
                let photo = document.getElementById("photo");
                let color = document.getElementById("fav-color");
                let music = document.querySelector('input[name="fav-music"]:checked');
                let music_invalid = document.getElementById("music-invalid");
                let music_valid = document.getElementById("music-valid");


                if(fname.value == ""){
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
                }else{
                   fname.classList.add('is-valid');
                fname.classList.remove('is-invalid');
                console.log(fname.value);
                }

                if(lname.value == ""){
                lname.classList.remove('is-valid');
                lname.classList.add('is-invalid');
                }else{
                    lname.classList.add('is-valid');
                lname.classList.remove('is-invalid');
                console.log(lname.value);
                }

                if(daymonthyear.value == ""){
                daymonthyear.classList.remove('is-valid');
                daymonthyear.classList.add('is-invalid');
                }else{
                    daymonthyear.classList.remove('is-invalid');
                   daymonthyear.classList.add('is-valid');
                console.log(daymonthyear.value);
                }

                if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
                }else{
                   age.classList.add('is-valid')
                age.classList.remove('is-invalid')
                console.log(age.value)
                }

                invalid.style.display = "none";
                valid.style.display = "none";

                if (!gender) {
                invalid.style.display = "block";
                group.classList.add("is-invalid");
                } else {
                valid.style.display = "block";
                group.classList.remove("is-invalid");
                console.log(gender.value);
                }
                if (photo.files.length === 0) {
                photo.classList.remove("is-valid");
                photo.classList.add("is-invalid");
                } else {
                photo.classList.remove("is-invalid");
                photo.classList.add("is-valid");
                console.log(photo.files[0].name);
                }

                if (color.value === "") {
                color.classList.remove("is-valid");
                color.classList.add("is-invalid");
                } else {
                color.classList.remove("is-invalid");
                color.classList.add("is-valid");
                console.log(color.value);
                }
                 music_invalid.style.display = "none";
                 music_valid.style.display = "none";

                if (!music) {
                 music_invalid.style.display = "block";
                } else {
                 music_valid.style.display = "block";
                console.log(music.value);
    }
}

        let myfunc = (callback) => {
            callback("in Callback")
        }

        callMe = (param) => {
            console.log(param)
        }

        myfunc(callMe)

       let myvar1 = 1
       let myvar2 = "1"
       myvar2 = parseInt(myvar2)


       console.log(myvar2 + myvar1 + "\n\n\ntest")
       console.log(1 == '1')
    </script>
@endpushs
