<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <style>
    /* ตั้งค่าฟอนต์และพื้นหลังของหน้าเว็บ */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f6;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
    }

    /* ตกแต่งหัวข้อ */
    h1 {
        font-size: 1.5rem;
        color: #2c3e50;
        margin-bottom: 20px;
        text-align: center;
    }

    /* ตกแต่งกล่องฟอร์ม */
    form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        width: 100%;
        max-width: 350px;
        box-sizing: border-box;
    }

    /* ตกแต่งข้อความ Label */
    label {
        display: block;
        font-weight: 600;
        margin-bottom: 10px;
        color: #4a5568;
        font-size: 1.1rem;
    }

    /* ตกแต่งช่องกรอกตัวเลข */
    input[type="number"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    /* เอฟเฟกต์ตอนคลิกที่ช่องกรอก */
    input[type="number"]:focus {
        border-color: #3182ce;
        outline: none;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
    }

    /* ตกแต่งปุ่มกด */
    button {
        width: 100%;
        padding: 12px;
        background-color: #3182ce;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s ease;
    }

    /* เอฟเฟกต์ตอนเอาเมาส์ไปวางบนปุ่ม */
    button:hover {
        background-color: #2b6cb0;
    }

    /* เอฟเฟกต์ตอนกดปุ่ม */
    button:active {
        transform: scale(0.98);
    }

</style>
</head>
<body>

    <h1>งานที่ 1 ปุณยวีร์ พรหมบัณฑิต BIT.2/5 No.30</h1>
    
    <!-- คะแนนเก็บช่องที่ 1 = 10 -->
    <!-- คะแนนเก็บช่องที่ 2 = 8 -->
    <!-- คะแนนรวม = คะแนนช่อง 1 + คะแนนช่อง 2 -->
    <!-- output.  = inpunt1    + input2 -->
    <!-- 18.      = 10         + 8 -->

    <!-- ข้อมูลที่อยู่ในฟอร์ตจะส่งไปที่ไหน - ส่งแบบไหน -->
    <!-- <form action="result.php" method="post">
        <label for="">ชื่อนักศึกษา</label>
        <input type="text" name="student_name"> <br>

        <label for="">คะแนนช่องที่ 1</label>
        <input type="number" name="num1"> <br>
        <label for="">คะแนนช่องที่ 2</label>
        <input type="number" name="num2"> <br>

        <button>คำนวน</button>
    </form> -->

    <form action="result.php" method="post">
        <label for="">การแปลงกิโลเมตรเป็นเมตร</label> <br>
        <input type="number" name="kilometer"> <br>

        <button>คำนวน</button>
    </form> 


</body>
</html>