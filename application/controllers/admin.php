<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller
{
   public function index()
   {
       $this->form_validation->set_rules('uname','User Name','required|alpha');
       $this->form_validation->set_rules('pass','Password','required|max_length[12]');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
       if($this->form_validation->run())
       {
         $username=$this->input->post('uname');
         $pass=$this->input->post('pass');
         $this->load->model('loginmodel');
         $id=$this->loginmodel->isvalidate($username,$pass);
                if($id)
                {
                    $this->session->set_userdata('id',$id);
                    $this->load->model('loginmodel','ar');
                    $res=$this->loginmodel->articleList();
                    $this->load->view('admin/dashboard',['article'=>$res]);

                    //logic correct..
                }
                else
                {
                   $this->session->set_flashdata('failed','Invalid Username/Password');
                   return redirect('admin');
                    //logic Failed..
                }

       }
       else
       {
           $this->load->view('Admin/Login.php');
       }
   }

   // for logOut Session..
   public function logout()
   {
       echo "logout Kam Kar raha hai";
       //$this->session->unset_userdata('id');
       //return redirect('login');
   }
  
   public function register()
   {
       $this->load->view('admin/register');
   }

   public function sendemail()
   {
       $this->form_validation->set_rules('uname','User Name' , 'required|alpha');
       $this->form_validation->set_rules('pass','Password' , 'required|max_length[12]');
       $this->form_validation->set_rules('fname','First Name' , 'required|alpha');
       $this->form_validation->set_rules('lname','last Name' , 'required|alpha');
       $this->form_validation->set_rules('email','Email' , 'required|valid_email|is_unique[a_users.email]');
      // For Error Show ...
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run())
       {
           $this->load->library('email');
           $this->email->from(set_value('email'),set_value('fname'));
           $this->email->to("amitgupta.5097@gmail.com");
           $this->email->Subject("Registration Greeting..");
           $this->email->message("Thank You For Registration.");
           $this->email->set_newline("\r\n");
           $this->email->send();

           if(!$this->email->send())
           {
              show_error($this->email->print_debugger());
           }
            else
            {
                echo "Your e-mail has been send !";
            }
       }

       else
          {
              $this->load->view('Admin/register');
          }  
   }

}
?>
