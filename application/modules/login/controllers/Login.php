<?php

	/**
	* 
	*/
	class Login extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library(array('ion_auth','form_validation'));
			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		}
		
		public function index() {
			$this->load->view('main');			
		}

		public function do_login() {
			$this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == true) {
                //check to see if the user is logging in
                //check for "remember me"
                $remember = (bool) $this->input->post('remember');

                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    //if the login is successful
                    //redirect them back to the home page
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    redirect('admin', 'refresh');
                }
                else {
                    //if the login was un-successful
                    //redirect them back to the login page
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
                }
            }
            else {
                //the user is not logging in so display the login page
                //set the flash data error message if there is one
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['identity'] = [
                    'name' => 'identity',
                    'id' => 'identity',
                    'type' => 'text',
                    'value' => $this->form_validation->set_value('identity'),
                ];
                $this->data['password'] = [
                    'name' => 'password',
                    'id' => 'password',
                    'type' => 'password',
                ];

                $this->_render_page('login', $this->data);
            }
		}

		public function do_logout() {
			$logout = $this->ion_auth->logout();

            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('login', 'refresh');
		}
	}

?>