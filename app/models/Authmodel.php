
<?php
class AuthModel extends DB {
    // Lấy thông tin user theo username
    // Lấy user theo username và kiểm tra password
    public function getUserByUsernameAndPassword($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return null;
    }

    // Đăng ký user mới
    public function registerUser($username, $password, $email) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sss', $username, $hash, $email);
        return $stmt->execute();
    }
        // Hàm login riêng: kiểm tra username và password, trả về user nếu đúng
    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        return $user ? $user : null;
    }

    // Kiểm tra username đã tồn tại chưa
    public function usernameExists($username) {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}
?>
