<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller
{
    public $mcq = array();

    public $result = 0;

    public function __construct(){
 
    parent::__construct();
    $this->load->helper('url');

    // Load session
    $this->load->library('session');

    // Load Pagination library
    $this->load->library('pagination');

    // Load model
    $this->load->model('Main_model');
  }

 

    



    public function index()
    {  $this->load->library('session');
        $this->session->unset_userdata('user_id');
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }


    public function process()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[subscribers.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|is_unique[subscribers.phone]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
            );
            $insert = $this->db->insert('subscribers', $data);
            $insert_id = $this->db->insert_id();
            $this->load->library('session');
            $this->session->set_userdata('user_id', $insert_id);
            if ($insert) {
                redirect('home/exam');
            }
        }
    }


    public function exam()
    { 
        $this->load->library('session');
        if(empty($this->session->userdata('user_id'))){
            redirect('home');
        }
        $url = 'https://opentdb.com/api.php?amount=10';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
// print_r($response);
  $result = json_decode($response, true);
  $data = array();
  foreach ($result['results'] as $key => $value) {

       array_push($value['incorrect_answers'], $value['correct_answer']);
       shuffle($value['incorrect_answers']);
      
    $data['mcq'][] = array('question' => $value['question'],
                  'question_id' => rand(),
                  'one' => $value['incorrect_answers']['0'],
                  'two' => $value['incorrect_answers']['1'],
                  'three' => $value['incorrect_answers']['2'],
                  'four' =>  $value['incorrect_answers']['3'],
                  'answer' => $value['correct_answer']);
 }
      

    $this->session->set_userdata('all_ques', $data);
     // print_r($data); exit;
       
        $this->load->view('header');
        $this->load->view('exam', $data);
        $this->load->view('footer');
    }


    public function result()
    {
       echo $q1." == ".$item; echo "1<br/>";
       $this->load->library('session');
        if(empty($this->session->userdata('user_id'))){
            redirect('home');
        }
        $this->load->library('session');

        $q1 = $this->input->post('question1');
        $a1 = $this->input->post('answer1');

        $q2 = $this->input->post('question2');
        $a2 = $this->input->post('answer2');

        $q3 = $this->input->post('question3');
        $a3 = $this->input->post('answer3');

        $q4 = $this->input->post('question4');
        $a4 = $this->input->post('answer4');

        $q5 = $this->input->post('question5');
        $a5 = $this->input->post('answer5');

        $q6 = $this->input->post('question6');
        $a6 = $this->input->post('answer6');

        $q7 = $this->input->post('question7');
        $a7 = $this->input->post('answer7');

        $q8 = $this->input->post('question8');
        $a8 = $this->input->post('answer8');

        $q9 = $this->input->post('question9');
        $a9 = $this->input->post('answer9');

        $q10 = $this->input->post('question10');
        $a10 = $this->input->post('answer10');
        $score = array();
           $answers = $a1.",".$a2.",".$a3.",".$a4.",".$a5.",".$a6.",".$a7.",".$a8.",".$a9.",".$a10 ; 
    foreach ($_POST['all_ques'] as $key => $item) {

            if ($q1 == $item) {
                 
                if ($a1 == $_POST['all_ans'][$key]) {
                    
                    $score1 = 1;
                    
                } else {
                    $score1 = 0;
                  
                }
            } elseif ($q2 == $item) {
                 
                if (strcmp($a2 == $_POST['all_ans'][$key]) == 0) {
                    $score2 = 1;
                   
                } else {
                    $score2 = 0;
                  
                }
            } elseif ($q3 == $item) {
                  
                if (strcmp($a3 == $_POST['all_ans'][$key]) == 0) {
                   $score3 = 1;
                   
                } else {
                    $score3 = 0;
                    
                }
            }
            elseif ($q4 == $item) {
                 
                if (strcmp($a4 == $_POST['all_ans'][$key]) == 0) {
                    $score4 = 1;
                    
                } else {
                    $score4= 0;
                    
                }
            }
            elseif ($q5 == $item) {
               
                if (strcmp($a5 == $_POST['all_ans'][$key]) == 0) {
                    $score5 = 1;
                   
                } else {
                    $score5 = 0;
                   
                }
            }
            elseif ($q6 == $item) {
                
                if (strcmp($a6 == $_POST['all_ans'][$key]) == 0) {
                   $score6 = 1;
                    
                } else {
                    $score6 = 0;
                   
                }
            }
            elseif ($q7 == $item) {
                 
                if (strcmp($a7 == $_POST['all_ans'][$key]) == 0) {
                    $score7 = 1;
                    
                } else {
                    $score7 = 0;
                    
                }
            }
            elseif ($q8 == $item) {
                 
                if (strcmp($a8 == $_POST['all_ans'][$key]) == 0) {
                    $score8 = 1;
                
                } else {
                    $score8 = 0;
                    
                }
            }

              elseif ($q9 == $item) {
              
                if (strcmp($a9 == $_POST['all_ans'][$key]) == 0) {
                    $score9 = 1;
                    
                } else {
                   $score9 = 0;
                   
                }
            }

              elseif (strcmp($q10 == $item) == 0) {
                
                if ($a10 == $_POST['all_ans'][$key]) {
                    $score10 = 1;
                    
                } else {
                    $score10 = 0;
                    
                }
            }
        }
   
        
        $data['score'] =  $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 ;
           
    if(!empty($this->session->userdata('user_id'))){
        $data = array('score' => $data['score'],'Answer' => $answers);
            $this->db->where('id', $this->session->userdata('user_id'));
            $this->db->update('subscribers',$data);
        }
        $this->load->view('header');
        $this->load->view('result', $data);
        $this->load->view('footer');


    }



  public function loadRecord($rowno=0){

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 10;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Main_model->getrecordCount($search_text);

    // Get records
    $users_record = $this->Main_model->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'index.php/Home/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('admin_view',$data);
 
  }

}
