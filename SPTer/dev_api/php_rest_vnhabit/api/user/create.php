<?php 
  // Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$user = new User($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

$this->username = $data->username;
$this->password = $data->password;
$this->email = $data->email;
$this->date_of_birth = $data->date_of_birth;
$this->gender = $data->gender;
$this->user_icon = $data->user_icon;
$this->avatar = $data->avatar;
$this->user_description = $data->user_description;

// Create user
if($post->create()) {
    echo json_encode(
        array('message' => 'user Created')
    );
} else {
    echo json_encode(
        array('message' => 'user Not Created')
    );
}

?>
