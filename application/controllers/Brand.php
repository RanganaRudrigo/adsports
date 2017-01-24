<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/18/2016
 * Time: 10:49 AM
 */
class Brand extends Front_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
        $this->load->model('Category_model', 'category');
        $this->load->model('Subcategory_model', 'subcategory');

        $this->load->model('Brand_model', 'brand');

        $this->load->helper("url");
        $this->load->library('pagination');

        $this->load->helper('download');


    }


    function index()
    {
        $d['brands'] = $this->brand->order_by('Order', 'ASC')->get_all();

        $this->view('brands', $d);


    }

    function product_index(){


        $d['total_count'] = $this->product->count_by([]);
        $d['count'] = $this->product->count_by([]);
//        $d['one_category'] = $this->category->get($CategoryId);
        $d['category_list'] = $this->category->order_by("Order", "ASC")->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "Products/";
        $config["total_rows"] = $this->product->count_by([]);

        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] ='<li  >';
        $config["num_tag_close"] ='</li>';
        $config["next_tag_open"] ='<li  >';
        $config["next_tag_close"] ='</li>';

        $config["prev_tag_open"] ='<li  >';
        $config["prev_tag_close"] ='</li>';

//        $config['next_link'] = 'Next';
//        $config['prev_link'] = 'Previous';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


//        $this->db->join('brand','product.BrandId=brand.BrandId');
//        $this->db->join('category','product.CategoryId=category.CategoryID');
//        $this->db->select("product.*,brand.BrandTitle,category.CategoryTitle");
        $d['pages']=round($choice);
        $d['products'] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*8)->get_all();

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p(($page));

//        p($this->db->last_query());
//        p($this->uri->segment(2));
//        p($CategoryId);

//        $this->view('product',$d);
        $this->view('all_product',$d);


    }

    function product_sub_category($CategoryId){

//        p($CategoryId);

        $d['total_count'] = $this->product->count_by(['SubCategoryId'=>$CategoryId]);

        $d['count'] = $this->product->get_many_by(['SubCategoryId'=>$CategoryId]);


        $d['one_sub_category'] = $this->subcategory->get($CategoryId);
        $d['one_category'] = $this->category->get($d['one_sub_category']->CategoryId);
//        p($this->db->last_query());
        $d['category_list'] = $this->category->order_by("Order", "ASC")->get_all();

//        ============================================================================
        $config["base_url"] = base_url() . "Product/".url_title($this->uri->segment(2)).'/'.url_title($this->uri->segment(3)).'/'.$CategoryId;
        $config["total_rows"] = $this->product->count_by(['SubCategoryId'=>$CategoryId]);

        $config["per_page"] = 8;
        $config["uri_segment"] = 5;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] ='<li>';
        $config["num_tag_close"] ='</li>';
        $config["next_tag_open"] ='<li>';
        $config["next_tag_close"] ='</li>';
        $config["prev_tag_open"] ='<li>';
        $config["prev_tag_close"] ='</li>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 1;
        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*8)->get_many_by(['SubCategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();

        $d['pages']=round($choice);
        $d['main_cate']=' <li><a href="'.base_url('Products/').url_title($d['one_category']->CategoryTitle).'/'.$d['one_category']->CategoryId .'"> '.$d['one_category']->CategoryTitle.' </a></li>';
        $d['main_cate_sub']=' <li><a href="'.base_url('Product/').url_title($d['one_category']->CategoryTitle).'/'.$d['one_sub_category']->SubCategoryTitle .'/'.$d['one_sub_category']->SubCategoryId.'"> '.$d['one_sub_category']->SubCategoryTitle.' </a></li>';

        $d['link'] = "";

//        p($this->db->last_query());
//        p($this->uri->segment(5));
//        p($d['one_category']->CategoryTitle);

        $this->view('product',$d);
//        $this->view('product');


    }


    function brand_category($CategoryId){

//        p($CategoryId);

        $d['total_count'] = $this->product->count_by(['BrandId'=>$CategoryId]);
//        p($this->db->last_query());
        $d['one_sub_category'] = $this->subcategory->get($CategoryId);
//        p($this->db->last_query());
        $d['count'] = $this->product->get_many_by(['BrandId'=>$CategoryId]);
        $d['one_brand'] = $this->brand->get($CategoryId);
        $d['category_list'] = $this->category->order_by("Order", "ASC")->get_all();


//        ============================================================================
        $config["base_url"] = base_url() . "Brand/".url_title($this->uri->segment(2)).'/'.$d['one_brand']->BrandId;
        $config["total_rows"] = $this->product->count_by(['BrandId'=>$CategoryId]);

        $config["per_page"] = 8;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] ='<li>';
        $config["num_tag_close"] ='</li>';
        $config["next_tag_open"] ='<li>';
        $config["next_tag_close"] ='</li>';
        $config["prev_tag_open"] ='<li>';
        $config["prev_tag_close"] ='</li>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;

        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*8)->get_many_by(['BrandId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['pages']=round($choice);

//        $d['main_cate']=' <li><a href="'.base_url('Products/').url_title($d['one_category']->CategoryTitle).'/'.$d['one_category']->CategoryId .'"> '.$d['one_category']->CategoryTitle.' </a></li>';
        $d['main_cate_sub']='';

        $d['link'] = "";

//        p($this->db->last_query());
//        p($this->uri->segment(3));
//        p($d['total_count']);

        $this->view('brand',$d);
//        $this->view('product');


    }




    function detail($ProductId)
    {

//        p($ProductId);

//        $d['details']=$this->product->join('category')->join('sub_category')
//        ->fields("{$this->product->table()}.* , CategoryTitle,SubCategoryTitle ")
//        ->get_by(['ProductId' => $ProductId]);

        $d['details'] = $this->product->get($ProductId);

//        p($this->db->last_query());

        $d['related_products'] = $this->product->limit(5)->order_by('rand()')->get_many_by(['CategoryId' => $d['details']->CategoryId]);

        $d['one_sub_category'] = $this->subcategory->get($d['details']->SubCategoryId);
        $d['one_category'] = $this->category->get($d['details']->CategoryId);

//        p($this->db->last_query());

        $d['main_cate']=' <li><a href="'.base_url('Products/').url_title($d['one_category']->CategoryTitle).'/'.$d['one_category']->CategoryId .'"> '.$d['one_category']->CategoryTitle.' </a></li>';

        if($d['details']->SubCategoryId != 0){
            $d['main_cate_sub']=' <li><a href="'.base_url('Product/').url_title($d['one_category']->CategoryTitle).'/'.url_title($d['one_sub_category']->SubCategoryTitle) .'/'.$d['one_sub_category']->SubCategoryId.'"> '.$d['one_sub_category']->SubCategoryTitle.' </a></li>';
        }else{
            $d['main_cate_sub']=' ';
        }






//        p($this->db->last_query());
//
//
////        p($d['one_category']);
//        p($d['details']);

        $this->view('detail', $d);
//        $this->view('detail');


    }


}