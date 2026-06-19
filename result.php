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
            padding: 20px;
            box-sizing: border-box;
        }

        /* กล่องครอบแสดงผลลัพธ์ (สร้างเพิ่มเพื่อให้ดูเป็นระเบียบ) */
        .result-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        /* ตกแต่งข้อความผลลัพธ์ */
        .result-title {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 8px;
        }

        .result-value {
            font-size: 2rem;
            font-weight: bold;
            color: #2b6cb0;
            margin-bottom: 5px;
        }

        /* ตกแต่งปุ่มลิงก์กลับหน้าหลัก */
        .btn-back {
            display: inline-block;
            width: 100%;
            max-width: 400px;
            padding: 12px;
            background-color: #3182ce;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.1s ease;
            box-sizing: border-box;
        }

        /* เอฟเฟกต์ตอนเอาเมาส์ไปวางบนปุ่ม */
        .btn-back:hover {
            background-color: #2b6cb0;
        }

        /* เอฟเฟกต์ตอนกดปุ่ม */
        .btn-back:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php 
            // $student_name = $_POST["student_name"];
            // $num1 = $_POST["num1"];
            // $num2 = $_POST["num2"];

            // echo "ชื่อนักศึกษา : " . $student_name . "<br>";
            // echo "คะแนนช่อง 1 : " . $num1 . "<br>";
            // echo "คะแนนช่อง 2 : " . $num2 . "<br>";

            // $total = $num1 + $num2;
            // echo "คะแนนรวม : " . $total . "<br>";

            $kilometer = $_POST["kilometer"];

            echo "การแปลงกิโลเมตรเป็นเมตร : " . $kilometer . "<br>";
            $total = $kilometer * 1000;
            echo $kilometer . "  กิโลเมตร = " . $total . " เมตร " ;

        ?> 
    </div>
     <a href="index.php" class="btn-back">กลับหน้าหลัก</a>
     
    
</body>
</html>