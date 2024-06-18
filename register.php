<?php
// 회원가입 처리 코드
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자가 입력한 정보 가져오기
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // 여기에 회원가입 처리 로직을 추가한다. 
    // 예를 들어, 데이터베이스에 사용자 정보를 저장하는 등의 작업을 한다.

    // 가입이 성공했을 경우
    $message = "가입이 완료되었습니다.";
} else {
    // POST 요청이 아닌 경우
    $message = "올바른 요청이 아닙니다.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        /* 스타일링 예시 */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>회원가입</h2>
    <form action="register_success.html" method="post">
        <input type="text" name="username" placeholder="사용자 이름" required>
        <input type="email" name="email" placeholder="이메일" required>
        <input type="password" name="password" placeholder="비밀번호" required>
        <button type="submit">회원가입</button>
    </form>
<?php
// 사용자가 회원가입 폼을 제출했을 때 실행됨

// 사용자로부터 입력 받은 데이터
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// 여기에 데이터베이스에 사용자 정보를 저장하는 등의 작업을 수행합니다.
// 이 부분은 실제 데이터베이스와 연결하여 작성해야 합니다.

// 회원가입이 성공했을 때 회원가입 성공 페이지로 리디렉션
header("Location: register_success.html");
exit();
?>

</body>
</html>

