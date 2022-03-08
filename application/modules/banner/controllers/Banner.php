<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Banner extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('banner_modal', 'common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('backoffice', 'refresh');
        }
    }

    public function index()
    {
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['banners'] = $this->common_model->getAllData('banner');
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $data['page'] = "banner/banner/view_banner";
        $this->template->template_view($data);
    }


    public function banner_add()
    {
        $this->form_validation->set_rules('banner_name', 'Banner Name', 'trim|required');
        if (empty($_FILES['banner_img']['name']))
        {
            $this->form_validation->set_rules('banner_img', 'Banner Image', 'required');
        }

        $data['banner_name'] = $this->input->post('banner_name');
        $data['banner_content'] = $this->input->post('banner_content');
      //  $data['banner_img']  = $this->input->post('banner_img');
        $data['active']  = $this->input->post('active');

        if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	
			$image ='';	
			$config['upload_path']          = './uploads/blog_images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$new_name                   = time().$_FILES["banner_img"]['name'];
			$config['file_name']        = $new_name;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('banner_img')) {
				$error = array('error' => $this->upload->display_errors());

				$msg = $error['error'];
				$this->session->set_flashdata('error', $msg);
				redirect('banner/banner_add', 'refresh');
			} else {
				$data = array('upload_data' => $this->upload->data());
				$image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
			}

            $saveData['banner_name'] = $this->input->post('banner_name');
            $saveData['banner_content'] = $this->input->post('banner_content');
            $saveData['banner_img'] = $image;
            $saveData['active'] = ($this->input->post('active')=='')?0:1;

            if ( $this->common_model->add('banner',$saveData)) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('banner', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                $data['page'] = "banner/banner/banner_add";
                $this->template->template_view($data);
            }
        }else{
            $tables = $this->config->item('tables', 'ion_auth');
            $identity_column = $this->config->item('identity', 'ion_auth');

            $data['page'] = "banner/banner/banner_add";

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('error', $data['message']);
            $this->template->template_view($data);
        }
    }

    public function delete_banner($id)
    {
        $result = $this->common_model->delete(array('id'=>$id),'banner');

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('banner', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('banner', 'refresh');
        }
    }


    public function edit_banner($id)
    {
        $this->form_validation->set_rules('banner_name', 'Banner Name', 'trim|required');
        if (isset($_POST) && !empty($_POST) && $this->form_validation->run() === TRUE) {
            $image ='';
            if (!empty($_FILES["banner_img"]["name"])) {
                
                $config['upload_path']      = './uploads/blog_images/';
                $config['allowed_types']    = 'gif|jpg|png';
                $new_name                   = time().$_FILES["banner_img"]['name'];
                $config['file_name']        = $new_name;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('banner_img')) {
                    $error = array('error' => $this->upload->display_errors());

                    $msg = $error['error'];
                    $this->session->set_flashdata('error', $msg);
                    redirect('banner/edit_banner/'.$id, 'refresh');
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
                }
            } 
            
            if($image ==''){
                $data = array(
                    'banner_name'   => $this->input->post('banner_name'),
                    'banner_content'   => $this->input->post('banner_content'),
                    'active'        => ($this->input->post('active')=='')?0:1
                );
            }else{
                $data = array(
                    'banner_name'       => $this->input->post('banner_name'),
                    'banner_content'       => $this->input->post('banner_content'),
                    'active'            => ($this->input->post('active')=='')?0:1,
                    'banner_img'        => $image
                );
            }

            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // exit;

            if ($this->common_model->update($id, $data,'banner')) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('banner', 'refresh');
            } else {
                $this->session->set_flashdata('errors', $this->ion_auth->errors());
                redirect('banner', 'refresh');
            }
        }else{
            $data['csrf'] = $this->_get_csrf_nonce();
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('errors', $data['message']);
            $banner = $this->common_model->update_data(array('id'=>$id),'banner');
            // echo '<pre>';
            // print_r($banner);
            // echo '</pre>';
            // exit;
            $data['banner_name'] = array(
                'name'  => 'banner_name',
                'id'    => 'banner_name',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('banner_name', $banner->banner_name)
            );

            $data['banner_img'] = $banner->banner_img;
            $data['active'] = $banner->active;
            $data['banner_content'] = $banner->banner_content;
            $data['id'] = $banner->id;
       
            $data['page'] = "banner/banner/edit_banner";
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
    public function deactivate($id)
    {
        $data['active'] = 0;
        $activation = $this->common_model->update($id, $data,'banner');

        if ($activation) {
            // redirect them to the auth page
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect("banner", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("banner", 'refresh');
        }
    }

    // activate the user
    public function activate($id)
    {
        $data['active'] = 1;
        $activation = $this->common_model->update($id, $data,'banner');

        if ($activation) {
            // redirect them to the auth page
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect("banner", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("banner", 'refresh');
        }
    }
 
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
