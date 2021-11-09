<?php

    if(isset($_POST['id']) || isset($_POST['password'])) {
        $user_id = $_POST['id'];
        $user_password = $_POST['password'];

        $connect = mysqli_connect('127.0.0.1', 'root', 'jiwooity1', 'test');
        $select_query = "SELECT * FROM member_list WHERE id='$user_id' and password='$user_password'";
        $select_result = mysqli_query($connect, $select_query);
        $row = mysqli_num_rows($select_result);

        if($row == 1) {
            session_start();

            $_SESSION['user_id'] = $user_id;

            echo "<script> alert('환영합니다'); location.href='../index.php'; </script>";
        } else {
            echo "<script> alert('아이디 또는 비밀번호가 일치하지 않습니다.'); history.back(); </script>";
        }

    } else {
        echo "<script> alert('회원 정보를 입력해주세요.'); history.back(); </script>";
    }

?>