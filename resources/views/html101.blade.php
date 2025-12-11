<html lang="th">
<head>
<meta charset="UTF-8">
<title>Workshop #HTML - FORM</title>

<style>
   body {
    font-family: "Prompt", sans-serif;
    margin: 0;
    padding: 40px;
    font-size: 13px;
    position: relative;
    overflow-x: hidden;
    background: linear-gradient(to bottom, rgba(220,240,255,0.6), rgba(255,255,255,0.8));
    backdrop-filter: blur(15px) saturate(120%);
    -webkit-backdrop-filter: blur(15px) saturate(120%);
}
body::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at top left, rgba(255,255,255,0.3), transparent 60%);
    filter: blur(120px);
    pointer-events: none; /* ป้องกันแสงสะท้อนบังการคลิก */
}
.rain {
    position: absolute;
    width: 2px;
    height: 60px;
    background: rgba(104, 193, 249, 0.55);
    filter: blur(1px);
    animation: rainFall 0.7s linear infinite;
    border-radius: 50px;
    opacity: 0.9;
}

@keyframes rainFall {
    0% { transform: translateY(-100px); }
    100% { transform: translateY(120vh); }
}

.bg-circle1 {
    position: absolute;
    width: 350px;
    height: 350px;
    background: #0781dfff;
    filter: blur(120px);
    border-radius: 50%;
    top: -100px;
    left: -80px;
    z-index: -1;
}

/* วงกลมฟุ้งสีม่วงพาสเทล */
.bg-circle2 {
    position: absolute;
    width: 400px;
    height: 400px;
    background: #0572c5ff;
    filter: blur(150px);
    border-radius: 50%;
    bottom: -120px;
    right: -100px;
    z-index: -1;
}

  .container {
    position: relative;
    background: rgba(255, 255, 255, 0.35); /* กระจกโปร่ง */
    backdrop-filter: blur(25px) saturate(130%);
    -webkit-backdrop-filter: blur(25px) saturate(130%);
    width: 480px;
    padding: 10px 40px;
    border-radius: 18px;

    /* เงากระจก */
    box-shadow:
        0 8px 20px rgba(0, 0, 0, 0.18),
        0 3px 6px rgba(0, 0, 0, 0.10),
        inset 0 0 25px rgba(255, 255, 255, 0.25);

    border: 1px solid rgba(255,255,255,0.5);
    margin: 0 auto;
    padding-bottom: 20px;
    box-sizing: border-box;
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
        box-sizing: border-box;
    }

    textarea {
        height: 100px;
    }

    .btn-group {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    button {
        flex: 1;
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
    <script>
for (let i = 0; i < 40; i++) {
    let drop = document.createElement("div");
    drop.className = "rain";
    drop.style.left = Math.random() * 100 + "vw";
    drop.style.animationDelay = Math.random() * 2 + "s";
    drop.style.opacity = 0.3 + Math.random() * 0.7;
    drop.style.height = 40 + Math.random() * 50 + "px";
    document.body.appendChild(drop);
}
</script>
<div class="bg-circle1"></div>
<div class="bg-circle2"></div>

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
