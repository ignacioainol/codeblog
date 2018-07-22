<?php

class Posts extends CI_Controller{

	function __construct(){
		parent::__construct();
			$this->load->model('Post_model');
		}
	
	public function index(){
		$data['title'] = 'Latests Posts';
		$data['posts'] = $this->Post_model->get_posts();	

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL){
		$data['post'] = $this->Post_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create',$data);
			$this->load->view('templates/footer');
		}else{
			$this->Post_model->create_post();
			redirect('posts');
		}

	}

	public function delete($id){
		$this->Post_model->delete_post($id);
		redirect('posts');
	}
}
