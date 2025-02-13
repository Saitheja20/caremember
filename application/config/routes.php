<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['y'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|s
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

$route['about'] = 'welcome/about';

$route['adult_vaccination'] = 'welcome/adult_vaccination';

$route['cleanings_and_preventive_care'] = 'welcome/cleanings_and_preventive_care';

$route['contact'] = 'welcome/contact';

$route['courier_of_medicine'] = 'welcome/courier_of_medicine';

$route['diabetes_dental'] = 'welcome/diabetes_dental';

$route['diabetes_diet'] = 'welcome/diabetes_diet';

$route['Patient_education'] = 'welcome/Patient_education';

$route['diabetes_foot_care'] = 'welcome/diabetes_foot_care';

$route['diabetes_heart'] = 'welcome/diabetes_heart';

$route['diabetic_kidney'] = 'welcome/diabetic_kidney';

$route['diabetic_retinopathy'] = 'welcome/diabetic_retinopathy';

$route['doctor'] = 'welcome/doctor';

$route['doctors_info'] = 'welcome/doctors_info';

$route['early_detection'] = 'welcome/early_detection';

$route['erectile_dysfunction'] = 'welcome/erectile_dysfunction';

$route['flu_vaccine'] = 'welcome/flu_vaccine';

$route['footer'] = 'welcome/footer';

$route['founder_message'] = 'welcome/founder_message';

$route['gallery'] = 'welcome/gallery';

$route['head_links'] = 'welcome/head_links';

$route['header'] = 'welcome/header';

$route['index'] = 'welcome/index';

$route['individual_treatment'] = 'welcome/individual_treatment';
$route['cgms'] = 'welcome/cgms';
$route['diabetes_reversal'] = 'welcome/diabetes_reversal';

$route['lab_service_at_home'] = 'welcome/lab_service_at_home';

$route['medicine_home_delivery'] = 'welcome/medicine_home_delivery';

$route['physiotheraph'] = 'welcome/physiotheraph';

$route['pnemococal'] = 'welcome/pnemococal';

$route['service'] = 'welcome/service';
$route['bookAppointment'] = 'welcome/bookAppointment';
$route['ErectileDysfunction'] = 'welcome/ErectileDysfunction';
$route['venkateswarlu'] = 'welcome/venkateswarlu';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
