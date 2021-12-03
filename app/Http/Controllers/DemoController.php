<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Auth;
class DemoController extends Controller
{
    private $type     =  "products";
    private $singular =  "Product";
    private $plural   =  "Products";
    private $view     =  "demos";
    private $action   =  "/dashboard/products";
    private $db_key   =  "pro_id";
    private $perpage = 2;
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function inputMasking(Request $request)
    {
        $data   = array(
                    "page_title"=>"Input masking",
                    "page_heading"=>"Input masking",
                    "breadcrumbs"=>array("#"=>"Demo Input masking"),
                    "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
                );
        
        
        return view($this->view.'.input-masking',$data);
    }
    public function select2(Request $request)
    {
        $data   = array(
                    "page_title"=>"Select2 Demo",
                    "page_heading"=>"Select2 Demo",
                    "breadcrumbs"=>array("#"=>"Demo Select2 Demo"),
                    "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
                );
        
        
        return view($this->view.'.select2',$data);
    }
    

}
