<?php
//digunakan untuk mencegah agar user tidak sembarangan masuk ke menu dengan memanfaatkan url atau mencegah agar user tidak masuk dengan mengutak atik url nya

function is_logged_in()
{
	$ci=get_instance();
	if(!$ci->session->userdata('username')) {
		redirect('Auth');
	}else {
		$role_id=$ci->session->userdata('role_id'); //mengambil role_id 1 atau 2


		$menu=$ci->uri->segment(1); //mengambil segment. contoh : http:/localhost/milos/admin/... segemen(1) adalah admin

		$queryMenu=$ci->db->get_where('mainmenu',['url'=>$menu])->row_array(); //mengambil data dari table user sub menu where firsturl = sesuai segemen : agar mendapatkan menu_id

		

		$menu_id=$queryMenu['id']; //id di dapat

		$userAccess=$ci->db->get_where('user_role_access',[
			'role_id'=>$role_id,
			'mainmenu_id'=>$menu_id]); // ambil data dari table user access where rol_id =role id dan menu id=menu id
		
		if($userAccess->num_rows()<1) { // jika tidak ada, berarti di blok
			redirect('auth/blocked');
			//redirect('auth');
		}
	}

}

function backButtonHandle(){ // 
  $CI =& get_instance();
  $CI->load->library(array('output'));
  $CI->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
  $CI->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
  $CI->output->set_header('Pragma: no-cache');
  $CI->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 }

function check_access($role_id,$menu_id)
{
	//cek akses menu
	$ci=get_instance();
	$ci->db->where('role_id',$role_id);
	$ci->db->where('menu_id',$menu_id);

	$result= $ci->db->get('user_access_menu');

	if ($result->num_rows()>0){
		return "checked='checked'";
	}

}

// MODAL
	function show_my_modal($content='', $id='', $data='', $size='md') {
		$_ci = get_instance();

		if ($content != '') {
			$view_content = $_ci->load->view($content, $data, TRUE);

			return '<div class="modal fade" id="' .$id .'" role="dialog">
					  <div class="modal-dialog modal-' .$size .'" role="document">
					    <div class="modal-content">
					        ' .$view_content .'
					    </div>
					  </div>
					</div>';
		}
	}

		


	//MODAL KONFIRMASI
	function show_my_confirm($id='', $class='', $title='Konfirmasi', $yes = 'Ya', $no = 'Tidak') {
		$_ci = &get_instance();

		if ($id != '') {
			echo   '<div class="modal fade" id="' .$id .'" role="dialog" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
					  <div class="modal-dialog modal-md" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
					            <h4 class="modal-title">' .$title .'</h4>
					              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					          </div>

					        <div class="modal-body">
			                    <p>Are You Sure to Delete the data ?</p>
			                </div>

			                <div class="modal-footer">
			                 <button type="button" class="btn btn-secondary " data-dismiss="modal" >Close</button>
			                  <button class="btn btn-danger ' .$class .'">Delete</button>
			                </div>
					    </div>
					  </div>
					</div>';
		}
	}


		function show_succ_msg($content='', $size='14px') {
		if ($content != '') {
			return   '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' .$size .'">
				        	' .$content
				      	.'</div>
					  </div>
				    </p>';
		}
	}

?>