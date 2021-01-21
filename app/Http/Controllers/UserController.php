<?php 
    namespace App\Http\Controllers;
    
    //use App\User;
    // use App\Models\User;    //your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser; //standardized code for api response
    use Illuminate\Http\Request;  //handling http request in lumen 
    use DB;
    use App\Services\User1Service;
    
    Class User1Controller extends Controller {     
        use ApiResponser;

        private $request;

        public function __construct(Request $request){
            $this->request = $request;
        }


        public function getUsers(){   
        }

        public function index(){
        }
        
        public function addUser(Request $request){
        }

        public function show($id){
        }

        public function update(Request $request, $id){
        }

        public function delete($id){
        }


    }
