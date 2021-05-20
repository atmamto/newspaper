<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class adminController extends Controller
{
      
        public function __construct()
        {
            $this->middleware('auth');
        }


       public function index(){
   			return view ('backend.index');
   	   }

   	    public function viewCategory(){
   	    	$data = DB::table('categories')->get();
   			return view ('backend.categories.category', ['data'=>$data]);
   	   }

   	    public function editCategory($id){

   	    	$singledata = DB::table('categories')->where('cid', $id)->first();
   	    	if($singledata == Null){
   	    		return redirect('viewcategory');
   	    	}
   	    	$data = DB::table('categories')->get();
   			return view ('backend.categories.editcategory', ['data'=>$data,'singledata'=>$singledata]);
   	   }

   	   public function multipleDelete(){

   	   	$data = Input::except('_token');

	   	   	if($data['bulk-action'] == 0){

	   	   		session::flash('message', 'Please select action you want to perform');
 				       return redirect()->back();
	   	   	}
	   	   	$tb1 = decrypt($data['tbl']);
	   	   	$tblid = decrypt($data['tblid']);

	   	   	if(empty($data['select-data'])){

	   	   		session::flash('message', 'Please select the data you want to delete');
 			        	return redirect()->back();

 			     }
 			     $ids = $data['select-data'];
 			     foreach($ids as $id){
 			     	DB::table($tb1)->where($tblid, $id)->delete();

 			     }
	   	    	session::flash('message', 'Data deleted successfuly');
 		      	return redirect()->back();

   	   }

         public function settings(){

            $data = DB::table('settings')->first();
            if ($data) {
               
               $data->social = explode(',', $data->social);

            }
            return view('backend.settings', ['data' => $data]);
         }

         public function addPost(){
            $categories = DB::table('categories')->get();
            return view ('backend.posts.add-post', ['categories'=>$categories]);
         }

         public function allPosts(){
            $posts = DB::table('posts')->orderby('pid', 'DESC')->paginate(20);
            foreach ($posts as $post) {
              $categories = explode(',', $post->category_id);
              foreach ($categories as $cat) {
                $postcat = DB::table('categories')->where('cid', $cat)->value('title');
                $postcategories[] = $postcat;
                $postcat = implode(', ', $postcategories);

              }
              $post->category_id = $postcat;
              $postcategories = [];
            }
          $published = DB::table('posts')->where('status', 'publish')->count();
          $allposts = DB::table('posts')->count();
          return view('backend.posts.all-posts', ['posts'=>$posts, 'published'=>$published, 
            'allposts'=>$allposts]);
         }

         public function editPost($id){
            $data = DB::table('posts')->where('pid', $id)->first();
            $postcat = explode(',', $data->category_id);
            $categories = DB::table('categories')->get();
            return view ('backend.posts.edit', ['data'=>$data, 'categories'=>$categories, 'postcat'=>$postcat]);
         }

/* this is for page admin */

         public function addPage(){
      
            return view ('backend.pages.add-page');
         }

         public function allPages(){
            $posts = DB::table('pages')->get();

          $published = DB::table('pages')->where('status', 'publish')->count();

          $allposts = DB::table('pages')->count();
          return view('backend.pages.all-pages', ['posts'=>$posts, 'published'=>$published, 
            'allposts'=>$allposts]);
         }

         public function editPage($id){
            $data = DB::table('pages')->where('pageid', $id)->first();
            return view ('backend.pages.edit', ['data'=>$data]);
         }
/* end this is for page admin */

/* start this is for contact form message */

         public function messages(){

            $data = DB::table('messages')->orderby('mid', 'DESC')->paginate(20);
            return view ('backend.messages', ['data'=>$data]);
         }

/* end this is for contact form message */  

/* start this is for Advertisement */

        public function addAdv(){

          return view ('backend.advertisement.add-adv');
        }

        public function allAdv(){

          $data = DB::table('advertisements')->orderby('aid', 'DESC')->get();
          return view ('backend.advertisement.all-advs', ['data'=>$data]);
        }

        public function editAdv($id){

        
          $data = DB::table('advertisements')->where('aid', $id)->first();
          return view ('backend.advertisement.edit-adv', ['data'=>$data]);
        }

/* end this is for Advertisement */

}
