<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Product;
class ExportImportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {     
        return view('pages.exportImport');
    }
    public function exportCsv()
    {
        $user = Auth::user();      
        $Excel = \App::make('excel');
        $products = \App\Product::where('user_id', $user->id)
        ->orderBy('updated_at', 'desc')->get();
        $row=array();
       
foreach ($products as $key => $value) {
    $value->price = $value->price + ($value->price*0.4);
    $row[] = array(
        'post_author'=>1,
    'post_date'=> date($value->created_at),
    'post_date_gmt'=> date($value->created_at),
    'post_content'=> $value->description,
    'post_title'=> $value->name,
    'post_excerpt'=> $value->description,
    'post_status'=> 'private',
    'comment_status'=>'open',
    'ping_status'=>'closed',
    'post_password'=>'',
    'post_name'=> $value->name,
    'to_ping'=>'',
    'pinged'=>'',
    'post_modified'=> date($value->updated_at),
    'post_modified_gmt'=> date($value->updated_at),
    'post_content_filtered'=>'',
    'post_parent'=> 0,   
    'guid'=> '',
    'menu_order'=> 0,
    'post_type'=> 'product',
    'post_mime_type'=>'',
    'comment_count'=>'0',
    'product_type'=> 'simple',
    'backorders'=>'',
    'featured'=>'',
    'length'=>'',
    'manage_stock'=>'',
    'price'=>$value->price,
    'product_url'=>'',
    'purchase_note'=>'',
    'regular_price'=>$value->price,
    'sale_price'=>'',
    'shipping_class'=>'',
    'sku'=>$value->id,
    'sold_individually'=>'',
    'stock'=>10,
    'stock_status'=>'instock',
    'tax_class'=>'',
    'tax_status'=>'',
    'total_sales'=>0,
    'virtual'=>'',
    'visibility'=>'',
    'weight'=>'',
    'height'=>'',
    'width'=>'',
    'default_attributes'=>'',
    'variation_description'=>'',
    'crosssell_ids'=>'',
    'download_expiry'=>'',
    'download_limit'=>'',
    'featured_image'=> $value->image,
    'featured_image_name'=>$value->name,
);
}

        $Excel->create('woo_products', function($excel) use($row) {
            
                // // Set the title
                // $excel->setTitle('Our new awesome title');
            
                // // Chain the setters
                // $excel->setCreator('Maatwebsite')
                //       ->setCompany('Maatwebsite');
            
                // // Call them separately
                // $excel->setDescription('A demonstration to change the file properties');
                $excel->sheet('products', function($sheet) use($row){
                            $sheet->fromArray(
                                $row
                            );
                    
                        });
            })->download('csv');
        return ;
    }
}
