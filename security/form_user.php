<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$id = NULL; // Đổi từ $_id thành $id cho dễ hiểu
$errors = []; // Mảng lưu trữ lỗi

// Thêm hàm mã hóa/giải mã
function encodeID($id) {
    return base64_encode($id);
}

function decodeID($encoded_id) {
    return base64_decode($encoded_id);
}

// Giải mã ID từ URL
if (!empty($_GET['id'])) {
    $id = decodeID($_GET['id']);
    $user = $userModel->findUserById($id);
}

// Xử lý dữ liệu khi form được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate name
    if (empty($_POST['name'])) {
        $errors['name'] = 'Tên là bắt buộc.';
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors['name'] = 'Tên phải từ 5 đến 15 ký tự và chỉ chứa chữ cái và số.';
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'Mật khẩu là bắt buộc.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors['password'] = 'Mật khẩu phải từ 5 đến 10 ký tự, bao gồm ít nhất một chữ thường, một chữ HOA, một số và một ký tự đặc biệt (~!@#$%^&*()).';
    }

    // Nếu không có lỗi, xử lý cập nhật user
    if (empty($errors)) {
        // Nếu có ID, thực hiện cập nhật
        if (!empty($id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !empty($id)) { ?>
            <div class="alert alert-warning" role="alert">
                Form thông tin người dùng
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input class="form-control" name="name" placeholder="Tên" value='<?php echo !empty($user[0]['name']) ? htmlspecialchars($user[0]['name']) : ''; ?>'>
                    <?php if (!empty($errors['name'])): ?>
                        <div class="text-danger"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    <?php if (!empty($errors['password'])): ?>
                        <div class="text-danger"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Gửi</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
       User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
