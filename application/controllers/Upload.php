<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Upload extends CI_Controller {

  	    public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('upload_model');
                $this->load->library(array('form_validation', 'email', 'session'));
        }

        public function index()
        {
                $config['upload_path']          = './uploads/';//set this path
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if(is_file($config['upload_path']))
                {
                      chmod($config['upload_path'], 777); 
                }
                
                $this->form_validation->set_rules('itemName', 'Item name', 'required');
                $this->form_validation->set_rules('itemDescription', 'Item Description', 'required');
                $this->form_validation->set_rules('itemSize', 'Item Size', 'trim');
                $this->form_validation->set_rules('duration', 'Order duration', 'required');
                $this->form_validation->set_rules('userLocation', 'Location', 'required');

                if($this->form_validation->run() == FALSE){

                  echo validation_errors();

                }else{
                   
                   $name = $this->input->post('itemName');
                   $description = $this->input->post('itemDescription');
                   $size = $this->input->post('itemSize');
                   $duration = $this->input->post('duration');
                   $location = $this->input->post('userLocation');
                
                          if ( ! $this->upload->do_upload('itemImg'))
                            {
                                 $error = array('error' => $this->upload->display_errors());

                                 print_r($error);
                        
                            }
                          else
                          {
                              $data = array('upload_data' => $this->upload->data());

                              $file = $data['upload_data'];
                              $file_path = $file['file_name'];

                              //$no

                              $due_time = strtotime($duration);


                              $due_date  = date('Y/m/d H:i:s', $due_time);

                              $order = array(
                                'item_name'    => $name,
                                'item_description'   => $description,
                                'item_size'   => $size,
                                'duration'   => $duration,
                                'picture'    => $file_path,
                                'order_date' => $due_date,
                                'status'     =>'not approved'
                              );  
                               
                              $order_details = array(
                                'name' => $name, 
                                'description'=> $description,
                                'duration' => $duration,
                                'picture' => $file_path,
                                'date' => $due_date
                              );

                              $this->session->set_userdata('order_details',$order_details);  
            
                              $order_id = $this->upload_model->insert_order($order);

                              $order_details = array(
                                    'serial' => $order_id,
                                    'backers' => 1

                              );

                              $progress_id = $this->upload_model->order_progress($order_details);
                              $this->session->progress_id = $progress_id;

                              $this->session->set_userdata('id',$order_id);
                              
                             
                              if(isset($order_id)){
                                  echo 'YES';
                              }else{
                                echo 'Could not place order.Try again.';
                              }
                          }
              }//end of else             
        }

        public function billing_details()
        {
                
              $this->form_validation->set_rules('customerName','Name','trim|required');
              $this->form_validation->set_rules('customerPhone','Phone','required');
              $this->form_validation->set_rules('customerAddress','Address','required');

              if($this->form_validation->run() == FALSE){
                    
                     echo validation_errors();

              }else{

                $name = $this->input->post('customerName');
                $phone = $this->input->post('customerPhone');
                $address = $this->input->post('customerAddress');

                echo 'Succeessful';

              }
            

        }
  }
?>      