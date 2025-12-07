<!--- file : resources/view/html101.blade.php -->
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Workshop #HTML - FORM</title>

<style>
    body {
        font-family: "Prompt", sans-serif;
        background: #f5f5f5;
        display: flex;
        justify-content: center;
        padding: 40px;
    }

    .container {
        background: #fff;
        width: 480px;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px;
        font-weight: 700;
    }

    label {
        font-weight: 600;
        display: block;
        margin-top: 12px;
    }

    input[type=text],
    input[type=date],
    input[type=number],
    select,
    textarea {
        width: 100%;
        padding: 8px 12px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
    }

    input[type=radio], input[type=checkbox] {
        margin-right: 6px;
    }

    textarea {
        height: 100px;
    }

    .btn-group {
        display: flex;
        justify-content: space-between;
        margin-top: 25px;
    }

    button {
        width: 48%;
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        font-weight: 600;
    }

    .reset-btn {
        background: #ccc;
    }

    .submit-btn {
        background: #0077ff;
        color: white;
    }

    button:hover {
        opacity: 0.9;
    }
</style>

</head>
<body>

<div class="container">
    <h1>Workshop #HTML - FORM</h1>

    <form>
        <label>ชื่อ</label>
        <input type="text">

        <label>สกุล</label>
        <input type="text">

        <label>วัน/เดือน/ปีเกิด</label>
        <input type="date">

        <label>อายุ</label>
        <input type="number">

        <label>เพศ</label>
        <input type="radio" name="gender"> ชาย
        <input type="radio" name="gender"> หญิง

        <label>รูป</label>
        <input type="file">

        <label>ที่อยู่</label>
        <textarea></textarea>

        <label>สีที่ชอบ</label>
        <select>
            <option>สีแดง</option>
            <option>สีฟ้า</option>
            <option>สีเหลือง</option>
            <option>สีเขียว</option>
        </select>

        <label>แนวเพลงที่ชอบ</label>
        <input type="radio" name="music"> เพื่อชีวิต
        <input type="radio" name="music"> ลูกทุ่ง
        <input type="radio" name="music"> อื่นๆ

        <br><br>
        <input type="checkbox"> ยินยอมให้เก็บข้อมูล

        <div class="btn-group">
            <button type="reset" class="reset-btn">Reset</button>
            <button type="submit" class="submit-btn">Submit</button>
        </div>
    </form>
</div>

</body>
</html>