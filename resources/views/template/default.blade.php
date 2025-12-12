<head>
<!Doctype html>
<html>
    <head>
        <title>HTML - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<html lang="th">
<head>
<meta charset="UTF-8">
<!Doctype html>
<title>Workshop #HTML - FORM</title>

<style>
body {
    font-family: "Prompt", sans-serif;
    margin: 0;
    padding: 0; /* เอา padding ออกเพื่อไม่ให้เกิดช่องว่าง */
    font-size: 13px;
    position: relative;
    overflow-x: hidden;

    /* พื้นหลังท้องฟ้าฝนแบบนุ่ม ไม่มีเส้นคาด */
    background: linear-gradient(
        to bottom,
        rgba(220,240,255,0.85),
        rgba(200,225,245,0.9)

    );
    backdrop-filter: blur(10px);
}

/* ลบเส้นคาดเพราะ before เดิมกินครึ่งนึงของจอ */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at top left, rgba(255,255,255,0.25), transparent 70%);
    filter: blur(120px);
    pointer-events: none;
}

/* ฝนตก */
.rain {
    position: absolute;
    width: 2px;
    height: 60px;
    background: rgba(104, 193, 249, 0.45);
    filter: blur(1px);
    animation: rainFall 0.7s linear infinite;
    border-radius: 50px;
    opacity: 0.7;
}

@keyframes rainFall {
    0% { transform: translateY(-120px); }
    100% { transform: translateY(90vh); }
}

/* กลมฟุ้งน้ำเงิน */
.bg-circle1 {
    position: fixed;
    width: 350px;
    height: 350px;
    background: #0781dfdd;
    filter: blur(130px);
    border-radius: 50%;
    top: -120px;
    left: -90px;
    z-index: -2;
}

/* กลมฟุ้งอีกด้าน */
.bg-circle2 {
    position: fixed;
    width: 450px;
    height: 450px;
    background: #0572c5cc;
    filter: blur(150px);
    border-radius: 50%;
    bottom: -150px;
    right: -120px;
    z-index: -2;
}

/* กล่องฟอร์มเหมือนกระจกหน้าต่าง */
.container {
    position: relative;
    background: rgba(255, 255, 255, 0.35);
    backdrop-filter: blur(25px) saturate(130%);
    width: 600px;

    margin: 80px auto;
    padding: 30px 40px 40px;
    border-radius: 18px;

    box-shadow:
        0 8px 20px rgba(0, 0, 0, 0.15),
        0 3px 6px rgba(0, 0, 0, 0.08),
        inset 0 0 25px rgba(255, 255, 255, 0.25);

    border: 1px solid rgba(255,255,255,0.45);
    box-sizing: border-box;
}

h1 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 22px;
    font-weight: 700;
}

/* Labels */
label {
    font-weight: 600;
    display: block;
    margin-top: 12px;
    font-size: 15px;
}

/* ช่องกรอก */
input[type=text],
input[type=date],
input[type=number],
select,
textarea {
    width: 100%;
    padding: 8px 12px;
    margin-top: 5px;
    border: 1px solid rgba(255,255,255,0.8);
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    background: rgba(255,255,255,0.7);
}

textarea {
    height: 100px;
}

/* ปุ่ม */
.btn-group {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}

button {
    flex: 1;
    padding: 10px;
    font-size: 15px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.reset-btn {
    background: #bfbfbf;
}

.submit-btn {
    background: #0077ff;
    color: white;
}

button:hover {
    opacity: 0.9;
}
</style>

@stack('styles')
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



</head>
<body>
 <div class="container mt-4">
    <h1>File Default</h1>
    @yield('content')

    </div>
    @stack('scripts')
</body>
</html>
