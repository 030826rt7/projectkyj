<?php
// 로그인 처리 코드
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자가 입력한 정보 가져오기
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 여기에 로그인 처리 로직을 추가한다. 
    // 예를 들어, 데이터베이스에서 사용자 정보를 확인하여 로그인 여부를 판단한다.

    // 가상의 로그인 처리: 사용자 이름과 비밀번호가 일치하면 로그인 성공
    if ($username === "user" && $password === "password") {
        $message = "로그인 성공!";
    } else {
        $message = "로그인 실패: 사용자 이름 또는 비밀번호가 올바르지 않습니다.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <style>
        /* 스타일링 예시 */
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], input[type="password"] {
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
    <h2>로그인</h2>
    <form action="login_success.html" method="post">
        <input type="text" name="username" placeholder="사용자 이름" required>
        <input type="password" name="password" placeholder="비밀번호" required>
        <button type="submit">로그인</button>
    </form>
    <?php
// 사용자가 로그인 폼을 제출했을 때 실행됨

// 사용자로부터 입력 받은 데이터
$username = $_POST['username'];
$password = $_POST['password'];

// 여기에 사용자가 제출한 로그인 정보를 검증하고 로그인 성공 여부를 판단하는 로직을 작성합니다.
// 이 부분은 실제 데이터베이스와 연결하여 작성해야 합니다.

// 로그인이 성공했을 때 로그인 성공 페이지로 리디렉션
header("Location: login_success.html");
exit();
?>

</body>
</html>
