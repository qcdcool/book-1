<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 默认前台控制器
 *
 * 无法继承 Common 控制器
 */
class Home extends CI_Controller
{
    public $category;
    public $title;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('book_model', 'book');
        $this->load->model('category_model', 'cate');

        $this->category = $this->cate->limit_category(4);
        $this->title    = $this->book->title(10);
        // $this->output->enable_profiler(true);
    }

    /**
     * 默认首页显示方法
     */
    public function index()
    {
        // $this->output->cache(5 / 60);

        // 首页文章 - 最新最热
        $data = $this->book->check();

        $data['category'] = $this->category;

        $data['title'] = $this->title;

        // p($data);die;
        $this->load->view('index/home', $data);
    }

    /**
     * 分类页显示
     */
    public function category()
    {
        $data['category'] = $this->category;
        $data['title']    = $this->title;

        $cid          = $this->uri->segment(2);
        $data['book'] = $this->book->category_book($cid);

        $this->load->view('index/category', $data);
    }

    /**
     * 文章阅读页显示
     */
    public function book()
    {
        $bid = $this->uri->segment(2);

        $data['category'] = $this->category;
        $data['title']    = $this->title;

        $data['book'] = $this->book->bid_book($bid);

        // p($data);
        $this->load->view('index/book', $data);
    }

    /**
     * 搜索
     */
    public function search()
    {
        $keyword = $this->input->get('keyword');

        $data['category'] = $this->category;
        $data['title']    = $this->title;
        $data['book']     = $this->book->getByCidAndTitle(null, $keyword);

        $this->load->view('index/category', $data);
    }

}
