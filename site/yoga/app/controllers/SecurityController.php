<?php
session_start();
require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/RoleRepository.php';
require_once __DIR__.'/../repository/ErrorCodes.php';

class SecurityController extends AppController
{


    public function login()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $user = $userRepository->findUserByEmail($email);

        if (!$user) {
            return $this->render('login', ErrorCodes::USER_NOT_EXIST);
        }

        if($user->getEmail() !== $email) {
            return $this->render('login', ErrorCodes::EMAIL_NOT_EXIST);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ErrorCodes::WRONG_PASSWORD);
        }
        $_SESSION['user'] = $user->getUuid();

        if($user->getRole() == 1){
            $_SESSION['loc'] = 'en';
            $_SESSION['admin'] = 1;
            $this->locateReturn('adminIndex');
        }
        $_SESSION['loc'] = 'en';
        $this->locateReturn('articlesIndex');
    }

    public function registrationUser ()
    {
        $data =  $this->PostDataJson();

        $userRepository = new UserRepository();

        if(!is_null($userRepository->findUserByEmail($data['email']))){
            return $this->returnInfo( ErrorCodes::USER_EMAIL_SYSTEM) ;
        }

        $user = $userRepository->createUser($_POST);

        $_SESSION['user'] = $user;
        $_SESSION['loc'] = 'en';
        $this->returnInfo(['status'=>200]);
    }

    public function logOut ()
    {
        session_destroy();
        $this->locateReturn();
    }

    private function locateReturn (string $page = null)
    {
        $url = "http://$_SERVER[HTTP_HOST]";

        if(is_null($page)){
            header("Location: {$url}/");
            exit;
        }
        header("Location: {$url}/{$page}");
        exit;
    }


}
