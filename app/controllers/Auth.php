<?php
class Auth extends Controller {
    private $data = [
        'subcontent' => [
            'kq' => 'haha'
        ]
    ];
    public function login() {
        // Giữ lại subcontent mặc định
        $this->data = [
            'subcontent' => [
                'kq' => 'haha'
            ]
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';

            // Lưu lại giá trị đã nhập để hiển thị lại trên form
            $this->data['subcontent']['old'] = [
                'username' => $username,
                'password' => $password
            ];

            if (empty($username) || empty($password)) {
                $this->data['subcontent']['error'] = 'Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.';
            } else {
                // Kiểm tra tài khoản mặc định bằng so sánh chuỗi
                if ($username === 'ecojack' && $password === '123') {
                    $_SESSION['user'] = [
                        'username' => 'ecojack',
                        'email' => 'ecojack@example.com'
                    ];
                    $_SESSION['login_success'] = 'Đăng nhập thành công!';
                    header('Location: ' . _WEB_ROOT_ . '/');
                    exit();
                } else {
                    $this->data['subcontent']['error'] = 'Tên đăng nhập hoặc mật khẩu không đúng.';
                }
            }
        }
        $this->data['content'] = 'auth/login';
        $this->render('layout/layout_client', $this->data);
    }

    public function logout() {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: ' . _WEB_ROOT_ . '/auth/login');
        exit();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';

            if (empty($username) || empty($password) || empty($email)) {
                $data['error'] = 'Vui lòng nhập đầy đủ thông tin.';
                return $this->render('register', $data);
            }

            $authModel = $this->model('AuthModel');
            if ($authModel->usernameExists($username)) {
                $data['error'] = 'Tên đăng nhập đã tồn tại.';
                return $this->render('register', $data);
            }

            $success = $authModel->registerUser($username, $password, $email);
            if ($success) {
                $data['success'] = 'Đăng ký thành công. Vui lòng đăng nhập.';
                return $this->render('login', $data);
            } else {
                $data['error'] = 'Đăng ký thất bại. Vui lòng thử lại.';
                return $this->render('register', $data);
            }
        }
        $this->render('register');
    }
}
?>
