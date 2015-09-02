<?


Class AccountController extends BaseController{

	public function postLogin(){
		$user_name= Input::get('name1');
		$password= Input::get('pwd1');

		echo json_encode('false');
	}
}