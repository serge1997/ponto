<?php
    namespace App\Http\Services\User;

    use App\Models\User;
    use App\Models\Connection;
    class UserRepository implements UserInterface
    {
        protected User $user;

        public function __construct(
            $user
        ){$this->user = new User();}
        public function save()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'):
                $this->user->setNome($_POST['nome']);
                $this->user->setEmail($_POST['email']);
                $this->user->setPassword($_POST['password']);
                $validation = UserFormValidation::register_form($this->user->getNome(), $this->user->getEmail(), $this->user->getPassword());
                if ($validation){
                    echo json_encode($validation);
                }else {
                    $query = "INSERT INTO users(id, name, email, password, isactive) VALUES(NULL, :nome, :email, md5(:password), :isactive)";
                    $smt = Connection::getConnect()->prepare($query);
                    $smt->bindValue(':nome', $this->user->getNome());
                    $smt->bindValue(':email', $this->user->getEmail());
                    $smt->bindValue(':password', $this->user->getPassword());
                    $smt->bindValue(':isactive', $this->user->getActive());
                    try {
                        $smt->execute();
                        echo json_encode('Usuario salvo com successo');
                    } catch (\Exception $e) {
                        echo json_encode("Usuario não pode ser salva" . $e->getMessage());
                    }
                }
            endif;
        }
    }