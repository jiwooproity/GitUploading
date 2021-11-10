<?php
$connect = mysqli_connect('localhost', 'jiwooproity', 'mirrorstale1!', 'jiwooproity');

    if($_POST['id'] == "" || $_POST['password'] == "" || $_POST['name'] == "" || $_POST['birth'] == "" || $_POST['email'] == "" || $_POST['phone_1'] == "" || $_POST['phone_2'] == "" || $_POST['phone_3'] == "") {
        echo "<script> alert('내용을 빠짐없이 기재해주세요!'); history.back(); </script>";
    } else {
        if($_POST['password'] != $_POST['password_confirm']) {
            echo "<script> alert('두 비밀번호가 일치하지 않습니다. 다시 확인해 주세요.'); history.back(); </script>";
        } else {


            $select_query = "SELECT * FROM member_list WHERE id='{$_POST['id']}'";
            $select_result = mysqli_query($connect, $select_query);
            $exist = mysqli_num_rows($select_result);

            if($exist > 0) {
                echo "<script> alert('중복된 아이디입니다. 다시 입력해 주세요.'); history.back(); </script>";
            } else {
                $id = $_POST['id'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $birth = $_POST['birth'];
                $email = $_POST['email'];
                $phone_num = $_POST['phone_1'].$_POST['phone_2'].$_POST['phone_3'];

                $insert_query = "INSERT INTO `member_list`(`id`, `password`, `name`, `birth`, `email`, `phone_num`) VALUES ('$id','$password','$name','$birth','$email','$phone_num')";

                $result = mysqli_query($connect, $insert_query);

                if($result == 1) {
                    echo "<script> alert('회원가입 되셨습니다.'); location.href='../index.php'; </script>";
                } else {
                    echo "<script> alert('회원가입 실패'); </script>";
                }
            }
        }
    }
?>