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
                <input id="lname" class="form-control" placeholder="นามสกุล">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="daymonthyear">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input class="form-control" id="daymonthyear" type="date">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input id="age" class="form-control" >
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="gender">เพศ</label>
            </div>
            <div class="col">
                <input id="male" type="radio" name="gender" value="Male">
                <label for="male">Male</label>
                <input id="female" type="radio" name="gender" value="Female">
                <label for="female">Female</label>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input class="form-control" id="photo" type="file">
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
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fav-music">เพลงที่ชอบ</label>
            </div>
            <div class="col">
                <input id="forlife" type="radio" name="fav-music" value="Forlife">
                <label for="forlife">เพื่อชีวิต</label>
                <input id="childfield" type="radio" name="fav-music" value="Childfield">
                <label for="childfield">ลูกทุ่ง</label>
                <input id="other" type="radio" name="fav-music" value="Other">
                <label for="other">อื่นๆ</label>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <input id="privacy" type="checkbox" name="privacy" value="True">
                <label for="privacy">ยินยอมให้เก็บข้อมูล</label>
            </div>
        </div>

        <div class="row mt-2" id="button">
            <div class="col">
                <button type="reset" class="btn btn-light" value="Reset" id="reset-button" >Reset</button>
            </div>
            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-success" onclick="clickme()">Submit</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let clickme = function (){
                let fname = document.getElementById("fname")
                if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
                }else{
                   fname.classList.add('is-valid')
                fname.classList.remove('is-invalid')
                console.log(fname.value)
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
