<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    
    $this->load->library(['form_validation', 'session']);
    
	$this->load->database();
	$this->load->helper('string');
	$this->load->model('Site_model', 'site');
	
	
    }
    public function bookAppointment()
	{
	  	$this->load->view('book_an_appointment');
	}
	public function ErectileDysfunction()
	{
	   // echo "ere";die;
	  	$this->load->view('erectile_dysfunction');
	}
	public function diabeticRetinopathy()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetic_retinopathy');
	}
	public function diabetesFootCare()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetes_foot_care');
	}
	public function diabeticKidney()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetic_kidney');
	}
	public function diabetesHeart()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetes_heart');
	}
	public function diabetesDental()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetes_dental');
	}
	public function labServiceAtHome()
	{
	   // echo "ere";die;
	  	$this->load->view('lab_service_at_home');
	}
	public function Patient_education()
	{
	   // echo "ere";die;
	  	$this->load->view('Patient_education');
	}
	public function courierOfMedicine()
	{
	   // echo "ere";die;
	  	$this->load->view('courier_of_medicine');
	}
	public function physiotheraph()
	{
	   // echo "ere";die;
	  	$this->load->view('physiotheraph');
	}
	public function individualTreatment()
	{
	   // echo "ere";die;
	  	$this->load->view('individual_treatment');
	}
	public function cgms()
	{
	   // echo "ere";die;
	  	$this->load->view('cgms');
	}
	public function diabetes_reversal()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetes_reversal');
	}
	public function diabetesDiet()
	{
	   // echo "ere";die;
	  	$this->load->view('diabetes_diet');
	}
	public function pnemococal()
	{
	   // echo "ere";die;
	  	$this->load->view('pnemococal');
	}
	public function fluVaccine()
	{
	   // echo "ere";die;
	  	$this->load->view('flu-vaccine');
	}
	
	public function index()
	{
	   // $data['notifications'] = $this->site->getNotifications();
	   // $data['banners'] = $this->site->getBanners();
	   // echo "<pre>";print_r($data);die;
		$this->load->view('index');
	}
	
	public function admissionEnquiry()
	{
	   
    
    // Get form input data
    $studentName = $this->input->post('fname');
    $mobile = $this->input->post('phone');

    $data = [
        'studentName' => $studentName,
        'mobile' => $mobile,
        'enquiryDate' => date('Y-m-d'),
        'comments'=>'Admission Enquiry'
    ];

    $inserted = $this->site->insertAdmission($data);

    if ($inserted) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching us. Will get back to you soon..']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to submit form. Please try again.']);
    }
	}
// 	public function contactUs()
// 	{
// 	  $studentName = $this->input->post('fname');
//     $mobile = $this->input->post('mobile');
//     $email = $this->input->post('email');
//     $comments = $this->input->post('comments');

//     $data = [
//         'studentName' => $studentName,
//         'mobile' => $mobile,
//         'email'=>$email,
//         'enquiryDate' => date('Y-m-d'),
//         'comments'=>$comments
//     ];

//     $inserted = $this->site->insertAdmission($data);

//     if ($inserted) {
//         echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching us. Will get back to you soon..']);
//     } else {
//         echo json_encode(['status' => 'error', 'message' => 'Failed to submit form. Please try again.']);
//     }  
// 	}
	public function about()
	{
		$this->load->view('about');
	}
	public function book_an_appointment()
	{
		$this->load->view('book_an_appointment');
	}
	public function cleanings_and_preventive_care()
	{
		$this->load->view('cleanings_and_preventive_care');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function courier_of_medicine()
	{
		$this->load->view('courier_of_medicine');
	}
	public function diabetes_dental()
	{
		$this->load->view('diabetes_dental');
	}
	public function diabetes_diet()
	{
		$this->load->view('diabetes_diet');
	}
	public function diabetes_foot_care()
	{
		$this->load->view('diabetes_foot_care');
	}
	public function diabetes_heart()
	{
		$this->load->view('diabetes_heart');
	}
	public function diabetic_kidney()
	{
		$this->load->view('diabetic_kidney');
	}
	public function diabetic_retinopathy()
	{
		$this->load->view('diabetic_retinopathy');
	}
	public function doctor()
	{
		$this->load->view('doctor');
	}
	public function doctors_info()
	{
		$this->load->view('doctors_info');
	}
	public function early_detection()
	{
		$this->load->view('early_detection');
	}
	public function erectile_dysfunction()
	{
		$this->load->view('erectile_dysfunction');
	}
	public function flu_vaccine()
	{
		$this->load->view('flu_vaccine');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
	public function founder_message()
	{
		$this->load->view('founder_message');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function head_links()
	{
		$this->load->view('head_links');
	}
	public function header()
	{
		$this->load->view('header');
	}
// 	public function index()
// 	{
// 		$this->load->view('index');
// 	}
	public function individual_treatment()
	{
		$this->load->view('individual_treatment');
	}
	public function lab_service_at_home()
	{
		$this->load->view('lab_service_at_home');
	}
	public function medicine_home_delivery()
	{
		$this->load->view('medicine_home_delivery');
	}
	
	public function service()
	{
		$this->load->view('service');
	}
	public function venkateswarlu()
	{
		$this->load->view('venkateswarlu');
	}
}
