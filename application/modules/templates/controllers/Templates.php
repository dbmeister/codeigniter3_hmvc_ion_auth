<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller
{
    function __construct() {
        parent::__construct();  
        
        $this->load->module('auth');
    }
  
    function index($data)
    {
        
        $data['logged_in'] = $this->ion_auth->logged_in();
        $data['is_admin'] = $this->ion_auth->is_admin();
        $data['user'] = $this->ion_auth->user()->row();
        
//        var_dump($user_groups = $this->ion_auth->get_users_groups()->result());
        
      
        //check whether an alternative template or templates have been specified
        if (!isset($data['template']))
        {
            $data['template'] = $this->config->item('jb_template');
        }
      
        //get defaults for template
        $this->load->config($data['template']);
        
        // if no alternative header, content or footer specified, apply template defaults
        if (!isset($data['header']))
        {  
          $data['header'] = $this->config->item('jb_default_header');
        }   
        
        if (!isset($data['content']))
        {   
          $data['content'] = $this->config->item('jb_default_content');
        }
        
        if (!isset($data['footer']))
        {
            $data['footer'] = $this->config->item('jb_default_footer');
        }
        
        //call views
        if (isset($data['ajax']))
        {
            $this->load->view('templates/'.$data['template'].'/'.$data['content'], $data);
        }
        else
        {
            $this->load->view('templates/'.$data['template'].'/'.$data['header'], $data);
            $this->load->view('templates/'.$data['template'].'/'.$data['content'], $data);
            $this->load->view('templates/'.$data['template'].'/'.$data['footer'], $data);
        }
    }

}


/* End of file Templates.php */
/* Location: ./application/modules/templates/controllers/Templates.php */

