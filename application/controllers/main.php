<?php

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //下面一行输出调试信息
       	$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
    	$role = $this->session->userdata('role');

        if ($role=="S")
        {
            $this->load->view('htmlhead');
        	$this->load->view('student/index_header');
            $this->load->view('student/index');
            $this->load->view('footer');
        }
        else if ($role=="T")
        {
            $this->load->view('htmlhead');
        	$this->load->view('teacher/index_header');
            $this->load->view('teacher/index');
            $this->load->view('footer');
        }
        else if ($role=="A")
        {
            $this->load->view('htmlhead');
        	$this->load->view('assistant/index_header');
        	$this->load->view('assistant/index');
            $this->load->view('footer');
        }
        else if ($role=="V")
        {
            $this->load->view('htmlhead');
        	$this->load->view('visitor/index_header');
        	$this->load->view('visitor/index');	
            $this->load->view('footer');
        }
    }

}
