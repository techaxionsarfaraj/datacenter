<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Login extends BaseController
{
    /**
    * Customer Login Page
    * @route 127.0.0.1/
    * @since 05-07-2024
    * @author Sarfaraj Sipai <sarfaraj.sipai@techaxion.com>
    */
    public function index()
    {
        echo view('pages/front/auth-login');
        exit;
    }

    /**
    * Customer Login Check Ajax call
    * @route 127.0.0.1/login
    * @since 06-07-2024
    * @author Sarfaraj Sipai <sarfaraj.sipai@techaxion.com>
    */
    public function validateUser()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Session Initialize
        $session = session();
        
        // Initialize the UserModel
        $userModel = new UserModel();
        
        // Verify user data
        $userData = $userModel->verifyData($username);
        // echo "<pre>";print_r($userData); exit;
        if ($userData) {
            $database_pass = $userData['password'];
            $authenticatePassword = password_verify($password, $database_pass);
            
            if ($authenticatePassword) {
                
                $_SESSION['userId'] = $userData['id'];
                $_SESSION['userName'] = $username;
				$_SESSION['isLoggedIn'] = TRUE;

                // Update login status and last login time
                $currentDateTime = date('Y-m-d H:i:s'); // Example format '2024-07-06 11:23:17'
                $data = [
                    'login_status' => 1, // Assuming login_status is a numeric field
                    'last_login_time' => $currentDateTime,
                ];                
                // Update the record
                $userModel->update($userData['id'], $data);

                // Handle successful authentication
                $session->setFlashdata('message', 'Login Successful');
                return redirect()->to('dashboard')->withInput();

            } else {
                // Handle incorrect password
                $session->setFlashdata('message', 'Invalid password');
                return redirect()->back()->withInput();
            }
        } else {
            // Handle user not found
            $session->setFlashdata('message', 'User not found');
            return redirect()->back()->withInput();
        }
    }
    /**
    * Customr succefull login
    * @route 127.0.0.1/dashbaord
    * @since 06-07-2024
    * @author Sarfaraj Sipai <sarfaraj.sipai@techaxion.com>
    */
    public function dashboard()
    {
        if(session()->get('isLoggedIn')){
            echo view('pages/front/dashboard');
            // return redirect()->to('pages/front/dashboard');
        }else{
            // echo "You Are not loged in";
            return redirect()->to('/');
        }
    }
     /**
    * Customr succefull login
    * @route 127.0.0.1/dashbaord
    * @since 06-07-2024
    * @author Sarfaraj Sipai <sarfaraj.sipai@techaxion.com>
    */
    public function logOut()
    {
        // Initialize session
        $session = session();

        // Remove session data
        $session->remove('userId');
        $session->remove('userName');
        $session->remove('isLoggedIn');
        
        // Set flash data for logout message
        // $session->setFlashdata('logout_message', 'You have been logged out successfully.');

        // Destroy the session
        $session->destroy();
        
        // Redirect to login page or any other page after logout
        return redirect()->to('/?logout=true');
    }
}
