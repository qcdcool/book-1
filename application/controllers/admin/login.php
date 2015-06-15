<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 后台登陆控制器
 */
class Login extends CI_Controller
{
    /**
     * 登陆默认方法
     * @return [type] [description]
     */
    public function index()
    {
        $this->load->view('admin/login/index');
    }

    /**
     * 验证码
     */
    public function code()
    {
        $config = array(
            'width'    => 80,
            'height'   => 25,
            'codeLen'  => 4,
            'fontSize' => 16,
        );
        $this->load->library('code', $config);

        $this->code->show();

    }

    /**
     * 登陆
     */
    public function login_in()
    {
        $code = $this->input->post('captcha');
        if (!isset($_SESSION)) {
            session_start();
        }
        

        $username = $this->input->post('username');
        $this->load->model('admin_model', 'admin');
        $userData = $this->admin->check($username);

        $passwd = $this->input->post('passwd');

        if (!$userData || $userData[0]['passwd'] != md5($passwd)) {
            error('用户名或者密码不正确');
        }
        
        if (strtoupper($code) != $_SESSION['code']) {
            error('验证码错误');
        }

        $sessionData = array(
            'username'  => $username,
            'uid'       => $userData[0]['uid'],
            'logintime' => time(),
        );

        $this->session->set_userdata($sessionData);

        success('admin/admin/index', '登陆成功');

    }

    /**
     * 退出登陆
     */
    public function login_out()
    {
        $this->session->sess_destroy();
        success('admin/login/index', '退出成功');
    }

}
