<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class LandingController extends CI_Controller {

  	public function __construct(){

  		parent::__construct();
        $this->load->helper(array('url_helper', 'form'));
        $this->load->model('billing_model');
        //s$this->load->library('facebook', array('appId' => '509089349297322', 'secret' => 'd5ebc1a729130240e1a01be0b734359f'));
        $this->load->library(array('session', 'form_validation','session'));
  	
  	}
    
        public function index()
	    {
	    	$data['page_title'] = 'Agreegate on Discounts';
	    	$data['carousel_css'] = 'asset/css/full-slider.css';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['smart_fixed_nav']='asset/css/smart-fixed-nav.css';
	    	$data['logo_nav']= 'asset/css/logo-nav.css';
	    	//Gets all product listing in our DB
	    	$data['first'] = $this->billing_model->get_one(1);
	    	$data['products'] = $this->billing_model->get_all();
	    	
		    $this->load->view('templates/header',$data);
		    $this->load->view('templates/navbar');
		    $this->load->view('templates/signup_login');
		    $this->load->view('templates/carousel');
		    $this->load->view('first_explain_section_view');
		    $this->load->view('second_example_view');
		    $this->load->view('third_items_view');
		    $this->load->view('first_parallax_image');
		    $this->load->view('wishlist');
		    $this->load->view('second_parallax');
		    $this->load->view('supply_section');
		    $data['parallax'] ='asset/js/parallax.min.js';
		    $data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['smart_nav_js']= 'asset/js/smart-fixed-nav.js';
		    $this->load->view('footer',$data);
	    }

	    public function category(){

	    	$data['page_title']= 'category';

	    } 

	    public function location_upload(){

	    	$this->form_validation->set_rules('location', 'Distribution Location', 'required');

	    	if($this->form_validation->run() == FALSE){

                  echo validation_errors();

             }else{

                $location = $this->input->post('location');
                $id = $this->session->id;

                $this->billing_model->set_location($location,$id); 
                $this->session->location = $location;           

                echo 'YES'; 
                
            }

	    } 

	    public function demand()
	    {

	    	$data['page_title'] = 'Agreegate on Demand';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';


            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('templates/demand_view');
            
            

	    	$data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
		    
            
            $this->load->view('templates/multistep-indicator'); 
            $this->load->view('demand_form');
		    $this->load->view('footer',$data);

	    }
	    public function share()
	    {

	    	$data['page_title'] = 'Agreegate on Sharing';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';


            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('templates/demand_view');
            
            

	    	$data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
		    
            
            $this->load->view('templates/multistep-indicator-share'); 
            $this->load->view('share');
		    $this->load->view('footer',$data);

	    }
        public function preview()
        {

            $data['page_title'] = 'Agreegate on Sharing';
            $data['cart_css']= 'asset/css/interactive-cart.css';
            $data['carousel_css']= '';
            $data['logo_nav']= '';
            $data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';


            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('templates/demand_view');
            
            

            $data['jquery'] ='asset/js/jquery.js';
            $data['bootstrap'] ='asset/js/bootstrap.min.js';
            $data['validator'] ='asset/js/validator.js';
            $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
            $data['main'] ='asset/js/main.js';
            $data['cart']= 'asset/js/interactive-cart.js';
            $data['modal']= 'asset/js/signin_modal.js';
            $data['blog']= 'asset/js/clean-blog.min.js';
            $data['animated']= 'asset/js/animatedHeadlines.js';
            
            
            $this->load->view('templates/multistep-indicator-preview'); 
            $this->load->view('preview_body');
            $this->load->view('footer',$data);

        }

	    public function location(){
          
            $data['page_title'] = 'Agreegate on Location';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';

            $this->load->view('templates/header',$data);
            $this->load->view('templates/signup_login');
            $this->load->view('gmaps_location');


            $data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
            $this->load->view('templates/demand_nav');
         //   $data['gmaps'] = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDTnGcqMNAkoZRcSQSeqCUZLyu3MYeKywo&v=3&callback=initMap';
            

		    $this->load->view('templates/multistep-indicator-location'); 
            $this->load->view('custom-map');

		    $this->load->view('footer',$data);

	    } 
        
        public function display(){
                   
            $data['page_title'] = 'Agreegate on Choices';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';
            $data['cat_css']='asset/css/category.css';

            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('templates/category_view');


            $data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
            $data['gmaps'] = '';
            

		    
            $this->load->view('category_body');
            $this->load->view('category_description');
            $this->load->view('category_rounded_imgs');

		    $this->load->view('footer',$data);
            

        }

        public function updateCart(){
            

        	$this->session->count = $this->input->post('count');
        	$this->session->total = $this->input->post('total');

        	$id = $this->input->post('id');
        	$count = $this->session->count;
        	
        	$productName = $this->input->post('productName');
            $imageSource = $this->input->post('imageSource');
            $price = $this->input->post('price');

            
          
           $items = array(
                  'items'.$id =>array(	
            	  'name' => $productName,
            	  'imageSource'=> $imageSource,
                  'price' => $price
               ) 
            );

             
            
            
           if($count == 1){
            //$this->session->unset_userdata('products');
                $this->session->set_userdata('products',$items);
            
            }else{
               
                 
                $this->session->products += $items;
            } 	

        
            

        	echo 'TRUE';
        }

        public function deleteCartItem(){
            

        	$this->session->count = $this->input->post('count');
        	$this->session->total = $this->input->post('total');

        	//get correct product id
        	
        	$productName = $this->input->post('productName');
            $imageSource = $this->input->post('imageSource');
            $price = $this->input->post('price');

            //define $id;
            $id = $this->billing_model->getItemId($productName);
            
            
            
          
           $items = array(
                  'items'.$id =>array(	
            	  'name' => $productName,
            	  'imageSource'=> $imageSource,
                  'price' => $price
               ) 
            );

             
            unset($this->session->products,$items);
             	
 

        	print_r($items);
        }

        public function payment(){


            $data['page_title'] = 'Agreegate on Payment';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';
            $data['cat_css']='asset/css/category.css';

            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('payment_header');
            $this->load->view('templates/multistep-indicator-payment');
            $this->load->view('payment_body');


            $data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
            $data['gmaps'] = '';
      
		    $this->load->view('footer',$data);
            
  
        }

        public function order(){


            $data['page_title'] = 'Agreegate on Orders';
	    	$data['cart_css']= 'asset/css/interactive-cart.css';
	    	$data['carousel_css']= '';
	    	$data['logo_nav']= '';
	    	$data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';
            $data['cat_css']='asset/css/category.css';

            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('payment_header');
            $this->load->view('payment_body');


            $data['jquery'] ='asset/js/jquery.js';
		    $data['bootstrap'] ='asset/js/bootstrap.min.js';
		    $data['validator'] ='asset/js/validator.js';
		    $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
		    $data['main'] ='asset/js/main.js';
		    $data['cart']= 'asset/js/interactive-cart.js';
		    $data['modal']= 'asset/js/signin_modal.js';
		    $data['blog']= 'asset/js/clean-blog.min.js';
		    $data['animated']= 'asset/js/animatedHeadlines.js';
            $data['gmaps'] = '';
      
		    $this->load->view('footer',$data);
            
  
        }

        public function created_orders(){
                   
            $data['page_title'] = 'Agreegate on Choices';
            $data['cart_css']= 'asset/css/interactive-cart.css';
            $data['carousel_css']= '';
            $data['logo_nav']= '';
            $data['smart_fixed_nav']= '';
            $data['animate_heads']= 'asset/css/animatedHeadlines.css';
            $data['multisteps_indicator']= '';
            $data['cat_css']='asset/css/category.css';
            $data['demand_orders'] = $this->billing_model->get_all_orders();

            $this->load->view('templates/header',$data);
            $this->load->view('templates/demand_nav');
            $this->load->view('templates/signup_login');
            $this->load->view('templates/category_view');


            $data['jquery'] ='asset/js/jquery.js';
            $data['bootstrap'] ='asset/js/bootstrap.min.js';
            $data['validator'] ='asset/js/validator.js';
            $data['scrolly'] ='asset/js/jquery.scrolly.min.js';
            $data['skel']= 'asset/js/skel.min.js';
            $data['main'] ='asset/js/main.js';
            $data['cart']= 'asset/js/interactive-cart.js';
            $data['modal']= 'asset/js/signin_modal.js';
            $data['blog']= 'asset/js/clean-blog.min.js';
            $data['animated']= 'asset/js/animatedHeadlines.js';
            $data['gmaps'] = '';
            

            
            $this->load->view('created_orders');
            //$this->load->view('category_description');
            //$this->load->view('category_rounded_imgs');

            $this->load->view('footer',$data);
            

        }
  }

?>