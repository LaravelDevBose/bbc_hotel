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

$route['message'] 		= 'FrontEnd/message';
$route['booking']		= 'FrontEnd/booking';
$route['search/room_type'] = 'FrontEnd/serach_room_type';
$route['person_info']	= 'FrontEnd/person_info_page';
$route['booking/store']	= 'FrontEnd/booking_store_data';
$route['bookig/complete'] = 'FrontEnd/booking_complete_message';

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
$route['package_page'] = 'Package/package_page_view';
$route['package/create'] = 'Package/package_insert_page';
$route['package/store'] = 'Package/package_store';
$route['package/edit_page/(:any)'] = 'Package/package_edit/$1';
$route['package/view_page/(:any)'] = 'Package/package_view/$1';
$route['package/update/(:any)'] = 'Package/package_update/$1';
$route['package/delete/(:any)'] = 'Package/package_delete/$1';


/*------- Member List Route ---------*/
$route['booking_list'] = 'Page/Booking_list_page';



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
/*----------- Service and Price route----------*/
$route['area_page'] = 'Area/area_price_page';
$route['area/store'] = 'Area/area_store';
$route['area/edit/(:any)'] = 'Area/area_edit/$1';
$route['area/update/(:any)'] = 'Area/area_update/$1';
$route['area/delete/(:any)'] = 'Area/area_delete/$1';


$route['room_type_page'] = 'RoomType/room_type_page';
$route['room_type/store'] = 'RoomType/room_type_store';
$route['room_type/edit/(:any)'] = 'RoomType/room_type_edit/$1';
$route['room_type/update/(:any)'] = 'RoomType/room_type_update/$1';
$route['room_type/delete/(:any)'] = 'RoomType/room_type_delete/$1';

$route['area_room_type'] = 'Area/area_wish_room_type';
$route['area_room_type/store'] = 'Area/area_wish_room_type_store';
$route['area_room_type/delete/(:any)'] = 'Area/area_wish_room_type_store/$1';
