<?php
    defined('BASEPATH') OR exit('No direct access allowed');
    
    class Login extends CI_Controller
    {
        public function index()
        {
            //I'm not sure but this data should be loaded from model?
            $data['form_header'] = 'Login Panel';
            $data['form_attr'] = array('class' => 'form-horizontal'); //in view $form_attr will be an array
            $data['user_input_attr'] = array(
                'name' => 'username',
                'id' => 'username',
                'class' => 'form-control',
                'placeholder' => 'your login here ...'
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
    }
