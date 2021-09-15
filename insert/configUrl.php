<?php

class configUrl {

    private $Url;
    private $Urlconjunto;
    private $Urlcontroller;
    private $Urlparametro;
    private static $Format;

    public function __construct() {

        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->limparUrl();
            $this->Urlconjunto = explode("/", $this->Url);
            if (isset($this->Urlconjunto[0])) {
                $this->Urlcontroller = $this->slugController($this->Urlconjunto[0]);
            } else {
                $this->Urlcontroller = "home";
            }

            if (isset($this->Urlconjunto[1])) {
                $this->Urlparametro = $this->Urlconjunto[1];
            } else {
                $this->Urlparametro = null;
            }
            echo "URL:" . $this->Url . "<br>";
            echo "CONTROLER:" . $this->Urlcontroller . "<br>";
        } else {
            $this->Urlcontroller = "home";
            $this->Urlcontroller = null;
        }
    }

    private function limparUrl() {
        $this->Url = strip_tags($this->Url);
        $this->Url = trim($this->Url);
        $this->Url = rtrim($this->Url, "/");

        self::$Format = array();
        self::$Format['a'] = 'ÁàâãÓÒôÔõÕÉéÈèÊêÚúÙùÍíÌì†‡ˆ‰Š‹Œ�Ž��—™š›œ�žŸ¡¢£¤¥¦§¨©ª«¬­®°±² ³µ¶ ';
        self::$Format['b'] = 'aaaaOoooooeeeeeeuuuuiiii-----------------------------------------';

        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }

    private function slugController($slugController) {
        $Urlcontroller = strtolower($slugController);

        $Urlcontroller = explode("-", $Urlcontroller);
        $Urlcontroller = implode(" ", $Urlcontroller);

        $Urlcontroller = ucwords($Urlcontroller);
        $Urlcontroller = str_replace(" ", "", $Urlcontroller);

        return $Urlcontroller;
    }

    public function carregar() {

        if($this->Urlcontroller ==="SobreEmpresa"){
            require '../destackAssociados/app/sts/Controllers/' . $this->Urlcontroller . '.php';
        $carregar = new SobreEmpresa();
        }else if($this->Urlcontroller ==="Cliente"){
            require '../destackAssociados/app/sts/Controllers/' . $this->Urlcontroller . '.php';
        $carregar = new Cliente();
        }elseif($this->Urlcontroller ==="Fornecedor"){
            require '../destackAssociados/app/sts/Controllers/' . $this->Urlcontroller . '.php';
        $carregar = new Fornecedor();
        }else {
             require '../destackAssociados/app/sts/Controllers/Home.php';
        $carregar = new Home();
        }
        
        
        
        
        
        
    }

}
