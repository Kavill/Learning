<?php

interface iURL{
    
    public function __construct($url);
    public function getProtocol();
    public function getHost();
    public function getPath();
    
}

class url implements iUrl{
    
    protected $url;
    private $protocol;
    private $host;
    private $path;
    
    public function __construct($url) {
        $this->url = $url;
        self::parseUrl();
    }
    
    private function parseUrl(){
        $pUrl = parse_url($this->url);
        
        $this->protocol = (!empty($pUrl['scheme'])) ? $pUrl['scheme'] : '- Brak protokołu -';
        $this->host = (!empty($pUrl['host'])) ? $pUrl['host'] : '- Brak hosta -';
        $this ->path = (!empty($pUrl['host'])) ? $pUrl['path'] : '- Brak ścieżki -';
    }
    
    public function getProtocol(){
        return $this->protocol;
    }
    
    public function getHost(){
        return $this->host;
    }
    
    public function getPath(){
        return $this->path;
    }
    
}

$obj = new url("https://www.wp.pl/wiadomosci");
echo $obj->getProtocol()."<br/>";
echo $obj->getHost()."<br/>";
echo $obj->getPath()."<br/>"

?>