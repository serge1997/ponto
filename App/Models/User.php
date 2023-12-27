<?php
    namespace App\Models;

    class User
    {
        protected $nome;
        protected $email;
        protected $password;
        protected $isactive;

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setEmail($email)
        {
            $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getPassword()
        {
            return $this->password;
        }

        public function getActive()
        {
            return $this->isactive = 1;
        }
    }