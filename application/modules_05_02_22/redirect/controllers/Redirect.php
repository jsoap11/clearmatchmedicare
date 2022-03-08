<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Redirect extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('Redirect_modal', 'common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('redirect/auth', 'refresh');
        }
    }

    public function index()
    {
        
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        // list the redirect
        $data['redirect'] =  $this->common_model->getAllData('redirect', '*');
        $this->session->set_flashdata('message', $this->ion_auth->messages());

        $data['page'] = "redirect/redirect/view_redirct";
        $this->template->template_view($data);
    }

    public function create_redirect()
    {
      /*  if (!$this->ion_auth->is_admin()) {
            return show_error("You Must Be an Administrator To view This Page");
        }*/

        $data['page'] = "redirect/redirect/create_redirct";
        $this->template->template_view($data);
    }

    // create a new user
    public function add_redirect()
    {
        $this->form_validation->set_rules('prv_url', 'Previous URL', 'trim|required');
        $this->form_validation->set_rules('crnt_url', 'Current URL', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            redirect('redirect/redirect/create_redirect');
        } else {
            $data = array(
				'prv_url'           		=> $this->input->post('prv_url'),
				'crnt_url'   		  		=> $this->input->post('crnt_url')
			);

            if ($this->common_model->InsertData('redirect', $data)) {
				
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('redirect', 'refresh');
            } else {
                $this->session->set_flashdata('success', $this->ion_auth->errors());
                redirect('redirect/create_redirect', 'refresh');
            }
        }
    }
	
	
	public function htaccessFunction(){
		$f = fopen(".htaccess", "a+");
				if($f){
				fwrite($f, "\n Redirect 301 ".parse_url($this->input->post('prv_url'), PHP_URL_PATH)." ".$this->input->post('crnt_url'));
				fclose($f);
				}
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('redirect', 'refresh');
	}

    //Delete User
    public function delete_redirect()
    {
        $id = $this->uri->segment(3);

        $data = array(
			'id' 	 => $id
		);

        $result = $this->common_model->DeleteDB(' redirect', $data);
        

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('redirect', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('redirect', 'refresh');
        }
    }

    // edit a user
    public function edit_redirect($id)
    {
		if ($this->input->post()) {

			$this->form_validation->set_rules('prv_url', 'Previous URL', 'trim|required');
			$this->form_validation->set_rules('crnt_url', 'Current URL', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				redirect('redirect/edit_redirect/'.$id, 'refresh');
			} else {

				$data = array(
                    'prv_url'           		=> $this->input->post('prv_url'),
                    'crnt_url'   		  		=> $this->input->post('crnt_url')
                );

				$this->common_model->UpdateDB('redirect', array('id' => post('post_id')), $data);
				
				/*
				$f = fopen(".htaccess", "a+");
				if($f){
				fwrite($f, "\n Redirect 301 ".parse_url($this->input->post('prv_url'), PHP_URL_PATH)." ".$this->input->post('crnt_url'));
				fclose($f);
				}
				*/
				set_flashdata('success', 'Data Updated Successfully');
				redirect('redirect', 'refresh');
			}
		} else {
			$data['post_data'] = $data = $this->common_model->getAllData('redirect', '*', '', array('id' => trim($id)));

			    //  pr($data['post_data']);die;

			$data['page'] = "redirect/redirect/edit_redirect";
			$this->template->template_view($data);
		}
	}

    public function _render_page($view, $data = null, $returnhtml = false) //I think this makes more sense
    {

        $this->viewdata = (empty($data)) ? $this->data : $data;

        $view_html = $this->load->view($view, $this->viewdata, $returnhtml);

        if ($returnhtml) return $view_html; //This will return html on 3rd argument being true
    }

    public function _valid_csrf_nonce()
    {
        $csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
        if ($csrfkey && $csrfkey == $this->session->flashdata('csrfvalue')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function _get_csrf_nonce()
    {
        $this->load->helper('string');
        $key   = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    // deactivate the user
    public function deactivate($id = NULL)
    {
        $msg = "This Functionality is disable in demo";
        $this->session->set_flashdata('error', $msg);
        redirect('redirect', 'refresh');

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }

        $id = (int) $id;

        $this->load->library('form_validation');
        $this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
        $this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            // insert csrf check
            $this->data['csrf'] = $this->_get_csrf_nonce();
            $this->data['user'] = $this->ion_auth->user($id)->row();

            $this->_render_page('redirect/deactivate_user', $this->data);
        } else {
            // do we really want to deactivate?
            if ($this->input->post('confirm') == 'yes') {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                    show_error($this->lang->line('error_csrf'));
                }

                // do we have the right userlevel?
                if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
                    $this->ion_auth->deactivate($id);
                }
            }

            // redirect them back to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('Users', 'refresh');
        }
    }

    // activate the user
    public function activate($id, $code = false)
    {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        } else if ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
        }

        if ($activation) {
            // redirect them to the auth page
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect("redirect", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("redirect", 'refresh');
        }
    }
    public function print_users()
    {
        $arr = array(

            'odd' => array(

                'L' => array(

                    'content' => 'Code Master',

                    'font-size' => 20,

                    'font-style' => 'B',

                    'font-family' => 'serif',

                    'color' => 'red'

                ),

                'C' => array(

                    'content' => '',

                    'font-size' => 10,

                    'font-style' => 'B',

                    'font-family' => 'serif',

                    'color' => '#000000'

                ),

                'R' => array(

                    'content' => 'Print Users with Mpdf',

                    'font-size' => 10,

                    'font-style' => 'B',

                    'font-family' => 'serif',

                    'color' => '#000000'

                ),

                'line' => 1,

            ),

            'even' => array()

        );

        $this->data['all_users'] = $this->Redirect_modal->all_users();

        $this->load->library('Pdf');
        $this->pdf->SetHeader($arr);
        $this->pdf->SetFooter('||{PAGENO}');
        $this->pdf->load_view('print/print_with_Mpdf', $this->data);
        $this->pdf->Output();
    }
    public function print_with_dompdf($value = '')
    {
        $data['all_users'] = $this->Redirect_modal->all_users();

        // Load all views as normal
        $this->load->view('print/print_with_Dom-pdf', $data);

        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment" => false));
    }
    public function Profile()
    {
        $user_id = array('id' => $this->session->userdata('user_id'));

        // get user profile data
        $data['user_profile'] = $this->common_model->update_data($user_id, 'redirect');

        $user = $this->ion_auth->user()->row();

        // display the form
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        $data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');

        $data['old_password'] = array(
            'name'     => 'old',
            'id'       => 'old',
            'type'     => 'password',
            'class'    => 'form-control',
            'placeholder'    => 'Enter Old Password',
            'required' => 'required',
        );
        $data['new_password'] = array(
            'name'     => 'new',
            'id'       => 'new',
            'class'    => 'form-control',
            'type'     => 'password',
            'required' => 'required',
            'placeholder'    => 'Enter Password',
            'minlength' => 8,
            'pattern'  => '^.{' . $data['min_password_length'] . '}.*$',
        );
        $data['new_password_confirm'] = array(
            'name'    => 'new_confirm',
            'id'      => 'new_confirm',
            'class'   => 'form-control',
            'placeholder'    => 'Confirm Password',
            'type'    => 'password',
            'required' => 'required',
            'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
        );
        $data['user_id'] = array(
            'name'  => 'user_id',
            'id'    => 'user_id',
            'type'  => 'hidden',
            'value' => $user->id,
        );

        // $data['page'] = "redirect/redirect/view_users";
        // $this->template->template_view($data);	

        $data['page'] = "redirect/redirect/user_profile";
        $this->template->template_view($data);
    }

    public function edit_profile()
    {
        if ($this->input->post()) {
            $first_name = post('first_name');
            $last_name  = post('last_name');
            $email      = post('email');
            $mobile_no  = post('mobile_no');

            $data = array(
                'phone'      => $mobile_no,
                'first_name' => $first_name,
                'email'      => $email,
                'last_name'  => $last_name,
            );
            $user_id = $this->session->userdata('user_id');

            $result = $this->common_model->update($user_id, $data, 'redirect');

            if ($result) {
                $msg =  "Profile Updated Successfully";
                $this->session->set_flashdata('success', $msg);
                redirect('redirect/profile', 'refresh');
            } else {
                $msg =  "Profile Updated Successfully";
                $this->session->set_flashdata('error', $msg);
                redirect('redirect/profile', 'refresh');
            }
        } else {

            $user_id = array('id' => $this->session->userdata('user_id'));

            // get user profile data
            $data['user_profile'] = $this->common_model->update_data($user_id, 'redirect');

            $data['page'] = "redirect/redirect/edit_user_profile";
            $this->template->template_view($data);
        }
    }
    public function update_avatar($value = '')
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('chang_image')) {
            $error = array('error' => $this->upload->display_errors());

            pr($error);
            die();
        } else {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        }

        $data = array('user_img' => $image);

        $user_id = $this->session->userdata('user_id');

        $result = $this->common_model->update($user_id, $data, 'redirect');

        if ($result) {
            $msg =  "Image Updated Successfully";
            $this->session->set_flashdata('success', $msg);
            redirect('redirect/Profile', 'refresh');
        } else {
            $msg =  "Image Updated Successfully";
            $this->session->set_flashdata('error', $msg);
            redirect('redirect/Profile', 'refresh');
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
