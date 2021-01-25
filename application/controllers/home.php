<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function lagosdejarinu() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['lagosdejarinu'] = 'active';
        $conteudo['pagina_view'] = 'lagosdejarinu_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function cidadejardim() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['cidadejardim'] = 'active';
        $conteudo['pagina_view'] = 'cidadejardim_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function terrasdesantacruz() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['terrasdesantacruz'] = 'active';
        $conteudo['pagina_view'] = 'terrasdesantacruz_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadeprivacidade() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies() {
        $data['title'] = 'Terra Dourada Incorporações';
        $data['description'] = 'Construindo sonhos. Entregando conquistas.';
        $data['keywords'] = 'empreendimentos, valorização, qualidade, vida, lazer, segurança, melhores, terrenos, terras, douradas';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
