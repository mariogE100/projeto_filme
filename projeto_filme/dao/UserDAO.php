<?php
require_once("../models/User.php");
class UserDAO implements UserDAOInterface
{
    private $conn;
    private $url;


    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
    }
    public function builUser($data)
    {
        $user = new User();
        $user->id = $data["id"];
        $user->name = $data["name"];
        $user->lastname = $data["lastname"];
        $user->email = $data["email"];
        $user->password = $data["password"];
        $user->image = $data["image"];
        $user->bio = $data["bio"];
        $user->token = $data["token"];

        return $user;
    }

    public function create(User $token, $authUser = false)
    {
        $stmt = $this->conn->prepare("INSERT INTO users(
            nome, ultimonome, email, password, token) VALUES (:nome, :ultimonome, :password, :token)");

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);

        $stmt->execute();

        if ($authUser) {
            $this->setTokenToSession($user->token);
        }
    }
    public function updade(User $user, $redirect = true)
    {

    }

    public function verifyToken($protected = false)
    {

    }

    public function setTokenToSession($token, $redirect = true)
    {

    }

    public function authentcateUser($email, $password)
    {

    }

    public function findByEmail($email)
    {

        if ($email != "") {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $data = $stmt->fetch();
                $user = $this->builUser($data);
                return $user;
            } else {
                return false;
            }

             else {
                return false;
            }
        }
            public function findEyId($id){

            }
            public function findEyToken($tonken){

            }
            public function destroyToken(){

            }
            public function changePassword(User $user){

            }
    
    }
}
        
    






?>