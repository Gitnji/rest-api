<?php
header("content-type: application/json; charset=UTF-8");
// Include the database connection file
include 'database.php';

//check if the request method is GET
$method = $_SERVER['REQUEST_METHOD'];
$inpput = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        //handle GET request
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $conn->query("SELECT * FROM users WHERE id = $id");
            $data = $result->fetch_assoc();
            echo json_encode($data);
        } else {
            $result = $conn->query("SELECT * FROM users");
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            echo json_encode($users);
        }
        break;
    case 'POST':
        //handle post request
        $name = $inpput['name'];
        $email = $inpput['email'];
        $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
        echo json_encode(['message' => 'User created successfully']);
        break;

    case 'PUT':
        //handle PUT request
        $id = $_GET['id'];
        $name = $inpput['name'];
        $email = $inpput['email'];
        $conn->query("UPDATE users SET name = '$name', email = '$email' WHERE id = $id");
        echo json_encode(['message' => 'User updated successfully']);
        break;

    case 'DELETE':
        //handle DELETE request
        $id = $_GET['id'];
        $conn->query("DELETE FROM users WHERE id = $id");
        echo json_encode(['message' => 'User deleted successfully']);
        break;
    default:
        echo json_encode(['message' => 'Method not allowed']);
        http_response_code(405);
        break;
}
// Close the database connection
$conn->close();

?>
