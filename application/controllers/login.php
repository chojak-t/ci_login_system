<?php
    defined('BASEPATH') OR exit('No direct access allowed');
    
    class Login extends CI_Controller
    {
        public function index()
        {
            //I'm not sure but this data should be loaded from model?
            $data['form_header'] = 'Login Panel';
            //in view $form_attr will be an array
            $data['form_attr'] = array(
                'class' => 'form-horizontal',
                'role' => 'form'
            );
            
            $data['user_input_attr'] = array(
                'name' => 'username',
                'id' => 'username',
                'class' => 'form-control',
                'placeholder' => 'your login here ...'
            );
            
            $data['paswd_input_attr'] = array(
                'name' => 'password',
                'id' => 'password',
                'class' => 'form-control'
            );
            
            $data['label_attr'] = array(
                'class' => 'control-label'
            );
            
            $data['submit_butt'] = array(
                'class' => 'btn btn-default',
                'name' => 'submit',
                'value' => 'Login'
            );
            
            /* alternative syntax 
            $data2 = [
                'form_header' => 'Login Panel',
                'form_attr' => [
                    'form_class' => 'form-horizontal',
                    'role' => 'form'
                ]
            ];
             */
            
            $this->load->view('Login_view', $data);
        }

        public function process_form()
        {
            echo 'Test processing form.<br/>';
            echo 'Login: ' . $this->input->post('username') . '<br/>';
            echo 'Pass: ' . $this->input->post('password') . '<br/>';
        }
    }
