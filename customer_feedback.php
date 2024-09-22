<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        .required {
            font-size: 12px;
            color: white;
            background-color: red;
            border-radius: 10px;
            padding: 2px 5px;
            margin-left: 5px;
        }
        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .required-field input,
        .required-field select,
        .required-field textarea {
            background-color: #ffe6e6;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media (max-width: 600px) {
            .form-container {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>アンケートフォーム</h1>
        <form action="submit.php" method="post">
            <div class="required-field">
                <label for="name">名前<span class="required">必須</span></label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="required-field">
                <label for="address">住所<span class="required">必須</span></label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="required-field">
                <label for="phone">電話番号<span class="required">必須</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="required-field">
                <label for="contact_time">連絡希望時間<span class="required">必須</span></label>
                <select id="contact_time" name="contact_time" required></select>
            </div>

            <div class="required-field">
                <label for="reason">来店理由<span class="required">必須</span></label>
                <textarea id="reason" name="reason" minlength="30" rows="3" required placeholder="例: 新しいお墓の購入を検討しており、実物を見て決めたいと思っています。"></textarea>
            </div>

            <label for="delivery_date">希望納期</label>
            <textarea id="delivery_date" name="delivery_date" maxlength="120" rows="3" placeholder="希望納期を入力してください"></textarea>

            <label for="family">家族構成</label>
            <textarea id="family" name="family" maxlength="120" rows="3" placeholder="家族構成を入力してください"></textarea>

            <label for="budget">予算</label>
            <input type="text" id="budget" name="budget">

            <input type="submit" value="送信">
        </form>
    </div>

    <script>
        const contactTimeSelect = document.getElementById('contact_time');
        for (let hour = 9; hour <= 17; hour++) {
            const option = document.createElement('option');
            const startTime = hour.toString().padStart(2, '0') + ':00';
            const endTime = (hour + 1).toString().padStart(2, '0') + ':00';
            option.value = startTime + '-' + endTime;
            option.textContent = startTime + ' - ' + endTime;
            contactTimeSelect.appendChild(option);
        }
    </script>
</body>
</html>
