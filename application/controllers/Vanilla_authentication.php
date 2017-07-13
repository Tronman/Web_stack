<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Vanilla_authentication extends CI_Controller {

  	public function __construct(){

  		parent::__construct();
        $this->load->helper(array('url_helper', 'form'));
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->model('register');
  	
  	}


  	public function index(){

  		$this->form_validation->set_rules('signup_username', 'Username', 'trim|required|alpha_numeric|is_unique[agreegate_users.username]');
  		$this->form_validation->set_rules('signup_email', 'Email', 'trim|required|valid_email|is_unique[agreegate_users.email]');
  		$this->form_validation->set_rules('signup_password', 'Password', 'trim|required|min_length[6]');


  		if($this->form_validation->run() == FALSE){

  			echo validation_errors();

  		}else{
          
          $username = $this->input->post('signup_username');
          $email = $this->input->post('signup_email');
          $password =$this->input->post('signup_password');

  

          if( $this->register->create_user($username,$email,$password) ){
            
            $user_id = $this->register->get_user_id_from_email($email);
            $user    = $this->register->get_user($user_id);

            if(isset($_SESSION)){
                   // remove session data
                   foreach ($_SESSION as $key => $value) {
                       unset($_SESSION[$key]);
                   }
            }
        
            // set session user data
            $_SESSION['user_id']      = (int)$user->id;
            $_SESSION['username']     = (string)$user->username;
            $_SESSION['logged_in']    = (bool)true;

            echo 'YES';

          }else{

            echo 'NO';
          
          }
       
  }


  	}
  	public function login(){
  		
  		$this->form_validation->set_rules('signin_email','Email','trim|required|valid_email');
  		$this->form_validation->set_rules('signin_password','Password','trim|required');

  		if($this->form_validation->run() == FALSE){
  			echo validation_errors();
  		}else{
      
            $email = $this->input->post('signin_email');
            $password = $this->input->post('signin_password');

            if ($this->register->resolve_user_login($email, $password)) {
        
             $user_id = $this->register->get_user_id_from_email($email);
             $user    = $this->register->get_user($user_id);
        
                
                if(isset($_SESSION['username'])){
                   // remove session data
                       unset(
                      
                        $_SESSION['user_id'],
                        $_SESSION['username'],
                        $_SESSION['logged_in']
                      
                      );
                   
                 }

                    $_SESSION['user_id']      = (int)$user->id;
                    $_SESSION['username']     = (string)$user->username;
                    $_SESSION['logged_in']    = (bool)true;
        
             echo 'YES';        
                
            }else{
              
              echo 'NO';
            
            }  

      }

  	}

    /**
   * logout function.
   * 
   * @access public
   * @return void
   */
   public function logout() {
    
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
      
               // remove session data
               foreach ($_SESSION as $key => $value) {
                 unset($_SESSION[$key]);
               }

       $url = base_url();        

       redirect($url);

    } 
    
    }



  	public function reset_password(){
  		$this->form_validation->set_rules('reset_email','Email','trim|required|valid_email');

  		if($this->form_validation->run() == FALSE){
  			echo validation_errors();
  		}else{

        $data=array(
         'reset_email' =>$this->input->post('reset_email')  
          );
      }
  	}
 } 	

?>