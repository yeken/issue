<?
require_once(dirname(__FILE__)."/front_init.php");
class Home extends Front_init
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['section'] = "home";
		$this->load->view("front/index.php", $this->data);
	}

	public function coloracion()
	{
		$this->data['section'] = "coloracion";
		$this->load->view("front/coloracion.php", $this->data);
	}

	public function decoloracion()
	{
		$this->data['section'] = "decoloracion";
		$this->load->view("front/coloracion.php", $this->data);
	}

	public function tratamientos()
	{
		$this->data['section'] = "tratamientos";
		$this->load->view("front/coloracion.php", $this->data);
	}

	public function issue_mundo()
	{
		$this->data['section'] = "issue_mundo";
		$this->data['title'] = "Issue en el mundo";
		$this->load->view("front/about.php", $this->data);
	}

	public function issue_about()
	{
		$this->data['section'] = "nosotros";
		$this->data['title'] = "Nosotros";
		$this->load->view("front/about.php", $this->data);
	}

	public function blog()
	{
		$this->data['section'] = "blog";
		$this->data['title'] = "Blog";
		$this->load->view("front/blog.php", $this->data);
	}

	public function detail()
	{
		$this->data['section'] = "detail";
		$this->data['title'] = "Detalle";
		$this->load->view("front/detail.php", $this->data);

	}

	public function contact()
	{
		$this->data['section'] = "contact";
		$this->data['title'] = "Contactenos";
		$this->load->view("front/contact.php", $this->data);

	}
}