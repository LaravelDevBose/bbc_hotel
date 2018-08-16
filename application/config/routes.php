<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FrontEnd';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/

$route['index'] 		= 'FrontEnd/index';
$route['about_us'] 		= 'FrontEnd/about_us_page';
$route['services']		= 'FrontEnd/our_service_page';
$route['gallary']		= 'FrontEnd/phote_gallary_page';
$route['other_business']= 'FrontEnd/other_business_page';
$route['singel_busines/(:any)']= 'FrontEnd/singel_busines_page/$1';
$route['materials']		= 'FrontEnd/materials_page';
$route['contact_us'] 	= 'FrontEnd/contacts_us_page';


$route['message-of-md'] = 'FrontEnd/md_message_show';
$route['details_NewsEvent/(:any)'] 	= 'FrontEnd/read_news_event/$1'; 
$route['singel_service/(:any)']		= 'FrontEnd/singel_service_page/$1';
$route['membership/registaion']		= 'FrontEnd/home_page_register_member';
$route['membership/registaion2']	= 'FrontEnd/contact_us_register_member';



/*========== Admin Route List =============*/
/*========== Admin Route List =============*/
/*========== Admin Route List =============*/ 
/*------Admin Login ------*/
$route['admin/login'] = 'Admin/index';
$route['admin/login/check'] = 'Admin/login_data_check';
$route['admin/logout'] = 'Admin/logout';

/*---------- Admin Dashboard ----------*/
$route['dashboard'] = 'Dashboard/index'; 


/*------- Gallary Image ----------*/
$route['gallery_page'] = 'Gallary/gallery_page_view';
$route['gallary_image_store'] = 'Gallary/gallary_image_store';
$route['gallery_image_delete/(:any)'] = 'Gallary/gallery_image_delete/$1';



/* --------- Slider Route ----------*/
$route['sliders'] = 'Slider/slider_page';
$route['slider/store'] = 'Slider/slider_image_store';
$route['slider/delete/(:any)'] = 'Slider/slider_image_delete/$1';


/*------- Logo Route -------------*/

$route['logo_page'] = 'Template/logo_page';
$route['logo/store_update'] = 'Template/logo_store_update';

/*----------- Service and Price route----------*/
$route['service_page'] = 'Service/service_price_page';
$route['service/store'] = 'Service/service_store';
$route['service/edit/(:any)'] = 'Service/service_edit/$1';
$route['service/update/(:any)'] = 'Service/service_update/$1';
$route['service/delete/(:any)'] = 'Service/service_delete/$1';



/*------- News and Event Route -----------*/
$route['event_page'] = 'Event/event_page_view';
$route['event/create'] = 'Event/event_insert_page';
$route['event/store'] = 'Event/news_and_event_store';
$route['event/edit_page/(:any)'] = 'Event/news_and_event_edit/$1';
$route['event/view_page/(:any)'] = 'Event/news_and_event_view/$1';
$route['event/update/(:any)'] = 'Event/news_and_event_update/$1';
$route['event/delete/(:any)'] = 'Event/news_and_event_delete/$1';



/*--------- Other Bussnies----------*/
$route['business'] = 'Business/business_page';
$route['business/store'] = 'Business/business_store_data';
$route['business/edit_page/(:any)'] = 'Business/business_edit_page/$1';
$route['business/view_page/(:any)'] = 'Business/business_view_page/$1';
$route['business/update/(:any)'] = 'Business/business_update_data/$1';
$route['business/delete/(:any)'] = 'Business/business_delete_data/$1';


/*------- Member List Route ---------*/
$route['member_list'] = 'Page/member_list_page';



/*--------- printing Materials----------*/
$route['material_page'] = 'Material/material_page';
$route['material/store'] = 'Material/material_store';
$route['material/delete/(:any)'] = 'Material/material_delete/$1';


/* --------- Template Route ----------*/
$route['about_insert_page'] = 'Page/about_us_page';
$route['about_us/update'] = 'Page/about_us_update';
$route['contact_us_page'] = 'Page/contact_us_page';
$route['contact_us/update'] = 'Page/contact_us_update';

$route['md_message_page'] = 'Template/md_message_page';
$route['md_message/update'] = 'Template/md_message_update';

$route['wellcome_note'] = 'Template/wellcome_note_page';
$route['welcome_note/update'] = 'Template/wellcome_note_update';



/*----------- New Admin Route----------*/
$route['admin_page'] = 'Sub_admin/admin_page';
$route['admin/create'] = 'Sub_admin/create_admin_page';
$route['admin/store'] = 'Sub_admin/store_admin';
$route['admin/edit/(:any)'] = 'Sub_admin/edit_admin_page/$1';
$route['admin/update/(:any)'] = 'Sub_admin/update_admin/$1';
$route['admin/delete/(:any)'] = 'Sub_admin/delete_admin/$1';
$route['password/check'] = 'Sub_admin/old_password_check';


/*---------- News Event ------------------*/

