<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->config('ion_auth');
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('Users_modal', 'common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('backoffice', 'refresh');
        }
    }

    public function index()
    {
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        // list the users
        $data['users'] = $this->ion_auth->users()->result();
        foreach ($data['users'] as $k => $user) {
            $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
        }

        $this->session->set_flashdata('message', $this->ion_auth->messages());

        $data['page'] = "users/users/view_users";
        $this->template->template_view($data);
    }

    // public function create_user()
    // {
    //     if (!$this->ion_auth->is_admin()) {
    //         return show_error("You Must Be an Administrator To view This Page");
    //     }

    //     $tables = $this->config->item('tables', 'ion_auth');
    //     $identity_column = $this->config->item('identity', 'ion_auth');
    //     $data['identity_column'] = $identity_column;

    //     $data['groups'] = $this->ion_auth->groups()->result();

    //     $data['page'] = "users/users/create_user";
    //     $this->template->template_view($data);
    // }

    // create a new user
    public function create_user()
    {
/*echo 		$name     = $this->config->item('site_title', 'ion_auth');
			$email_to = 'developer.pappu@gmail.com,palash@colbygroup.net';
echo 			$from     = 'info@clearmatchmedicare.com';
			$subject  = 'This is a test mail';
			$message  = 'This is a sample mail';

			$config = array(
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'wordwrap' => TRUE
			);

			$this->load->library('email', $config);

			$this->email->from($from, $name);
			$this->email->to($email_to);
			$this->email->subject($subject);
			$this->email->message($message);
		echo	$send = $this->email->send();
		
		exit;*/
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('company', 'Company', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|max_length[20]|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'trim|matches[password]|required');
        $this->form_validation->set_rules('group', 'Group', 'trim|required');

        $data['first_name'] = $this->input->post('first_name');
        $data['last_name']  = $this->input->post('last_name');
        $data['username']   = $this->input->post('username');
        $data['email']      = $this->input->post('email');
        $data['company']    = $this->input->post('company');
        $data['phone']      = $this->input->post('phone');
        $data['password']   = $this->input->post('password');
        $data['gp']         = $this->input->post('group');
        $data['short_description']         = $this->input->post('short_description');

        if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	
			$image ='';	
			$config['upload_path']          = './uploads/blog_images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$new_name                   = time().$_FILES["profile_image"]['name'];
			$config['file_name']        = $new_name;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('profile_image')) {
				/*$error = array('error' => $this->upload->display_errors());

				$msg = $error['error'];
				$this->session->set_flashdata('error', $msg);
				redirect('users/create_user', 'refresh');*/
				$image = 'uploads/blog_images/1591083665profile_image.png';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
			}
			
            $first_name = $this->input->post('first_name');
            $last_name  = $this->input->post('last_name');
            $username   = $this->input->post('username');
            $email      = $this->input->post('email');
            $company    = $this->input->post('company');
            $phone      = $this->input->post('phone');
            $password   = $this->input->post('password');
            $gp         = $this->input->post('group');
            $short_description         = $this->input->post('short_description');

            $group = array($gp);

            $additional_data = array(
                'first_name' => $first_name,
                'last_name'  => $last_name,
                'date'       => date('y-m-d'),
                'company'    => $company,
                'company'    => $company,
                'phone'      => $phone,
                'user_img'   => $image,
				'short_description'   => $short_description
            );

            if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('users/Users', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                $data['page'] = "users/users/create_user";
                $this->template->template_view($data);
            }
        }else{
            $tables = $this->config->item('tables', 'ion_auth');
            $identity_column = $this->config->item('identity', 'ion_auth');
            $data['identity_column'] = $identity_column;
    
            $data['groups'] = $this->ion_auth->groups()->result();
    
            $data['page'] = "users/users/create_user";

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('error', $data['message']);
            $this->template->template_view($data);
        }
    }

    //Delete User
    public function delete_user()
    {
        $id = $this->uri->segment(3);

        if ($this->session->userdata('user_id') == $id) {
            return show_error("You Can't Delete Logged In User");
        }

        if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            $msg = "You Must Be an Administrator To Delete This Record.";
            $this->session->set_flashdata('error', $msg);
            redirect('users', 'refresh');
        }

        $result = $this->ion_auth->delete_user($id);

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('users', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('users', 'refresh');
        }
    }

    // edit a user
    public function edit_user($id)
    {
        $data['title'] = $this->lang->line('edit_user_heading');

        if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            $msg = "You Must Be an Administrator To View This Page.";
            $this->session->set_flashdata('error', $msg);
            redirect('users', 'refresh');
        }

        $user = $this->ion_auth->user($id)->row();
        $groups = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();

        //validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');
        $this->form_validation->set_rules('username', $this->lang->line('edit_user_validation_lname_label'), 'required');
        $this->form_validation->set_rules('email', $this->lang->line('edit_user_validation_lname_label'), 'required');
        $this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required');
        $this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required');

        if (isset($_POST) && !empty($_POST)) {
            // update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            if ($this->form_validation->run() === TRUE) {
				$image ='';
				if (!empty($_FILES["profile_image"]["name"])) {
					
					$config['upload_path']      = './uploads/blog_images/';
					$config['allowed_types']    = 'gif|jpg|png';
					$new_name                   = time().$_FILES["profile_image"]['name'];
					$config['file_name']        = $new_name;
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload('profile_image')) {
						$error = array('error' => $this->upload->display_errors());

						$msg = $error['error'];
						$this->session->set_flashdata('error', $msg);
						redirect('users/edit_user/'.$id, 'refresh');
					} else {
						$data = array('upload_data' => $this->upload->data());
						$image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
					}
				} 
				
				if($image ==''){
					$data = array(
						'first_name' => $this->input->post('first_name'),
						'last_name'  => $this->input->post('last_name'),
						'username'   => $this->input->post('username'),
						'email'      => $this->input->post('email'),
						'company'    => $this->input->post('company'),
						'phone'      => $this->input->post('phone'),
						'short_description'      => $this->input->post('short_description'),
					);
				}else{
					$data = array(
						'first_name' => $this->input->post('first_name'),
						'last_name'  => $this->input->post('last_name'),
						'username'   => $this->input->post('username'),
						'email'      => $this->input->post('email'),
						'company'    => $this->input->post('company'),
						'phone'      => $this->input->post('phone'),
						'short_description'      => $this->input->post('short_description'),
						'user_img'   => $image
					);
				}

              /* echo '<pre>';
				print_r($_FILES);
				print_r($data);
				echo '</pre>';
				exit;*/
                // update the password if it was posted
                if ($this->input->post('password')) {
                    $data['password'] = $this->input->post('password');
                }

                // Only allow updating groups if user is admin
                if ($this->ion_auth->is_admin()) {
                    //Update the groups user belongs to
                    $groupData = $this->input->post('groups');

                    if (isset($groupData) && !empty($groupData)) {

                        $this->ion_auth->remove_from_group('', $id);

                        foreach ($groupData as $grp) {
                            $this->ion_auth->add_to_group($grp, $id);
                        }
                    }
                }

                // check to see if we are updating the user
                if ($this->ion_auth->update($user->id, $data)) {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->set_flashdata('success', $this->ion_auth->messages());

                    if ($this->ion_auth->is_admin()) {
                        redirect('users', 'refresh');
                    } else {
                        redirect('/', 'refresh');
                    }
                } else {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->set_flashdata('errors', $this->ion_auth->errors());
                    if ($this->ion_auth->is_admin()) {
                        redirect('users', 'refresh');
                    } else {
                        redirect('/', 'refresh');
                    }
                }
            } else {
                $msg = "Password do not match";
                $this->session->set_flashdata('error', $msg);
                redirect('users/edit_user/' . $id, 'refresh');
            }
        }

        // display the edit user form
        $data['csrf'] = $this->_get_csrf_nonce();

        // set the flash data error message if there is one
        $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // pass the user to the view
        $data['user'] = $user;
        $data['groups'] = $groups;
        $data['currentGroups'] = $currentGroups;

        $data['first_name'] = array(
            'name'  => 'first_name',
            'id'    => 'first_name',
            'required'  => 'required',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('first_name', $user->first_name),
        );
        $data['last_name'] = array(
            'name'  => 'last_name',
            'id'    => 'last_name',
            'required'  => 'required',
            'type'  => 'text',
            'value' => $this->form_validation->set_value('last_name', $user->last_name),
        );
        $data['username'] = array(
            'name'  => 'username',
            'id'    => 'username',
            'type'  => 'text',
            'required'  => 'required',
            'class' => "form-control",
            'value' => $this->form_validation->set_value('last_name', $user->username),
        );
        $data['email'] = array(
            'name'  => 'email',
            'id'    => 'email',
            'type'  => 'email',
            'required'  => 'required',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('last_name', $user->email),
        );
        $data['company'] = array(
            'name'      => 'company',
            'id'        => 'company',
            'class'     => 'form-control',
            'type'      => 'text',
            'required'  => 'required',
            'value'     => $this->form_validation->set_value('company', $user->company),
        );
        $data['phone'] = array(
            'name'      => 'phone',
            'id'        => 'phone',
            'class'     => 'form-control',
            'required'  => 'required',
            'type'      => 'text',
            'value'     => $this->form_validation->set_value('phone', $user->phone),
        );
        $data['password'] = array(
            'name'  => 'password',
            'id'    => 'password',
            'type'  => 'password',
            'class' => 'form-control',
        );
        $data['password_confirm'] = array(
            'name'  => 'password_confirm',
            'id'    => 'password_confirm',
            'type'  => 'password',
            'class' => 'form-control',
        );
		$data['short_description'] =  $user->short_description;

        $data['page'] = "users/users/edit_user";
        $this->template->template_view($data);
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
        redirect('users', 'refresh');

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

            $this->_render_page('users/deactivate_user', $this->data);
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
            redirect("users", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("users", 'refresh');
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

        $this->data['all_users'] = $this->Users_modal->all_users();

        $this->load->library('Pdf');
        $this->pdf->SetHeader($arr);
        $this->pdf->SetFooter('||{PAGENO}');
        $this->pdf->load_view('print/print_with_Mpdf', $this->data);
        $this->pdf->Output();
    }
    public function print_with_dompdf($value = '')
    {
        $data['all_users'] = $this->Users_modal->all_users();

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
        $data['user_profile'] = $this->common_model->update_data($user_id, 'users');

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

        // $data['page'] = "users/users/view_users";
        // $this->template->template_view($data);	

        $data['page'] = "users/users/user_profile";
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

            $result = $this->common_model->update($user_id, $data, 'users');

            if ($result) {
                $msg =  "Profile Updated Successfully";
                $this->session->set_flashdata('success', $msg);
                redirect('users/profile', 'refresh');
            } else {
                $msg =  "Profile Updated Successfully";
                $this->session->set_flashdata('error', $msg);
                redirect('users/profile', 'refresh');
            }
        } else {

            $user_id = array('id' => $this->session->userdata('user_id'));

            // get user profile data
            $data['user_profile'] = $this->common_model->update_data($user_id, 'users');

            $data['page'] = "users/users/edit_user_profile";
            $this->template->template_view($data);
        }
    }
    public function update_avatar($value = '')
    {
        $config['upload_path']          = './uploads/blog_images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $new_name                   = time().$_FILES["chang_image"]['name'];
		$config['file_name']        = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('chang_image')) {
            $error = array('error' => $this->upload->display_errors());

            pr($error);
            die();
        } else {
            $data = array('upload_data' => $this->upload->data());

            $image = $image = 'uploads/blog_images/' .$data['upload_data']['file_name'];
        }

        $data = array('user_img' => $image);

        $user_id = $this->session->userdata('user_id');

        $result = $this->common_model->update($user_id, $data, 'users');

        if ($result) {
            $msg =  "Image Updated Successfully";
            $this->session->set_flashdata('success', $msg);
            redirect('users/Profile', 'refresh');
        } else {
            $msg =  "Image Updated Successfully";
            $this->session->set_flashdata('error', $msg);
            redirect('users/Profile', 'refresh');
        }
    }

    	// change password
	public function change_password()
	{
		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		if (!$this->ion_auth->logged_in()) {
			redirect('backoffice/auth/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false) {
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
				'type'    => 'password',
				'required' => 'required',
				'placeholder'    => 'Confirm Password',
				'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
			);
			$data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			// render
			$data['page'] = "backoffice/users/change_password";
			$this->template->template_view($data);
		} else {
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change) {
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('backoffice/auth/logout', 'refresh');
			} else {
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('users/Profile', 'refresh');
			}
		}
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
