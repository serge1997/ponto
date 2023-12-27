<?php
    namespace  App\Http;

    use App\Http\Services\User\UserInterface;
    use App\Models\User;
    use App\Models\Connection;
    use App\Http\Services\User\UserRepository;
    class UserController
    {
        public $user;
        public function __construct()
        {
            $this->user = new UserRepository(new User());

        }

        public function getUser()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){

                $query = "SELECT * FROM users";
                $smt = Connection::getConnect()->prepare($query);
                $smt->execute();
                $row = $smt->fetchAll(\PDO::FETCH_ASSOC);
                echo json_encode($row);
            }
        }
        public function storeUser()
        {
            $this->user->save();
        }
    }