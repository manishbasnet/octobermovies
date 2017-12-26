<?php namespace ManishBasnet\Movies\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ManishBasnet\Movies\Models\User;
// use ManishBasnet\Movies\Models\Userinfo;
use ManishBasnet\Movies\Models\userrole;

// use ManishBasnet\Movies\Models\Userinfo;

class Userinfo extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
    }





    // public function index($id=null){ $this->asExtension('ListController')->index(); }


    // public function index(){

    	// username from user model

    	// $users = Db::table('manishbasnet_movies_user')->get();

    	// foreach ($users as $user) {
    		
    	// 	echo $user->username->toJson() . "<br>" ; 
    	// }




    	// $users = Db::select('select * from users where active = ?', [1]);


    	// $test = Db::select('SELECT manishbasnet_movies_user.username, manishbasnet_movies_userinfo.name, manishbasnet_movies_userinfo.address, manishbasnet_movies_userinfo.phone FROM manishbasnet_movies_user INNER JOIN manishbasnet_movies_userinfo ON manishbasnet_movies_user.id = manishbasnet_movies_userinfo.id');

    	// dd($test);


    	//raw query
    	// SELECT manishbasnet_movies_user.username, manishbasnet_movies_userinfo.name, manishbasnet_movies_userinfo.address, manishbasnet_movies_userinfo.phone FROM manishbasnet_movies_user INNER JOIN manishbasnet_movies_userinfo ON manishbasnet_movies_user.id = manishbasnet_movies_userinfo.id


//     	SELECT manishbasnet_movies_userrole.role, manishbasnet_movies_user.username
// FROM manishbasnet_movies_userrole
// LEFT JOIN manishbasnet_movies_user ON manishbasnet_movies_userrole.id = manishbasnet_movies_user.id
// GROUP BY manishbasnet_movies_userrole.role;


    	// $usersinfo = Db::table('manishbasnet_movies_userinfo')->get();

    	// dd($userinfo);

    	// foreach ($usersinfo $userinfo) {
    	// 	# code...

    	// 	echo $userinfo->name;
    	// }





    	// return 'hello';
    	// $user = Db::table('manishbasnet_movies_user')->where('username','manish')->first();

    	// echo $user->username;

    	// $userinfo = Db::table('manishbasnet_movies_userinfo')->get();

    	// dd($userinfo);

    	// echo $users->username;

    	// dd($user);



    // }



    // post api 

//     public function create(){


//     	return 'hello';
// $sql = Db::INSERT("INSERT INTO manishbasnet_movies_user (username, password)
// VALUES ('John', 'manish')");

// dd($sql);


//   }


    public function create(Request $request){

//     	$sql = Db::INSERT("INSERT INTO manishbasnet_movies_user (username, password)
// VALUES ('John', 'manish')");

    	$postData = json_decode($request->getContent(),1);

    	if (isset($postData['username'],$postData['password'],$postData['name'],$postData['address'],$postData['phone'])) {

			$role=\ManishBasnet\Movies\Models\Userrole::where('role_code','ADMIN')->first();
			if (!$user = \ManishBasnet\Movies\Models\User::where('username',$postData['username'])->first()) {
				# code...
				$user = new \ManishBasnet\Movies\Models\User;

				$user->username = $postData['username'];
				$user->password =  md5($postData['password']);
				$user->role_id = $role->id;
				$user->save();
				
			}else{
				$user->username = $postData['username'];
				$user->password =  md5($postData['password']);
				$user->role_id = $role->id;
				$user->save();
			}

			if (!$userinfo = \ManishBasnet\Movies\Models\Userinfo::where('user_id',$user->id)->first()) {
					# code...
					$userinfo = new \ManishBasnet\Movies\Models\Userinfo;
					$userinfo->name = $postData['name'];
					$userinfo->address = $postData['address'];
					$userinfo->phone = $postData['phone'];
					$userinfo->user_id = $user->id;
					$userinfo->save();
				}else{
					$userinfo->name = $postData['name'];
					$userinfo->address = $postData['address'];
					$userinfo->phone = $postData['phone'];
					$userinfo->user_id = $user->id;
					$userinfo->save();
				}

    		$data['status']='success';
    		$data['msg'] = 'User created';
    		

    	} else {
    		$data['status'] = 'fail';
    		$data['msg'] = 'Invalid request';
    	}


    	return new JsonResponse($data);
   
	}


	// check for user login and generate token

	public function checkUser(Request $request){

        $checkData = json_decode($request->getContent(),1);

        if (isset($checkData['username'], $checkData['password'])) {
            # code...

            if ($user = \ManishBasnet\Movies\Models\User::where('username',$checkData['username'])->where('password', md5($checkData['password']))->first()) {
            	// var_dump($user->id);die;
                # code...

                // $usertoken = new \ManishBasnet\Movies\Models\User;
                
                // $usertoken= $user->id().uniqid();
                $usertoken = md5(uniqid().$user->id);
                $user->token=$usertoken;
                $user->save();

                // $usertoken->token = md5(uniqid(rand()), true);

                // $usertoken->save();

                
               $data['status']='success';
    	   $data['msg'] = 'User logined in';

            }
            else {

        	$data['status'] = 'fail';
    		$data['msg'] = 'Check Username and password';
        }
        
        
           

        } else {

        	$data['status'] = 'fail';
    		$data['msg'] = 'Invalid request';
        }
        
	return new JsonResponse($data);
		
	}


}
