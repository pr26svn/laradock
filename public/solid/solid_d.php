<?php
interface IXMLHttpService{
    public function request($url="", $method="", $options=[]);
}
class XMLHTTPRequestServiceCl implements IXMLHttpService{

   public function request($url="", $method="", $options=[]){
        $service=new XMLHTTPRequestService();
        return $service->request($url, $method, $options);
   }
}
class XMLHttpService{
    private $XMLHttpService;
 
    public function __construct( IXMLHttpService $service ) {
      $this->XMLHttpService = $service;
    }
   
    public function read() {
      return $this->XMLHttpService->request();
    }
}

class Http {
    private $service;

    public function __construct(IXMLHttpService $xmlHttpService) {
        $service=$xmlHttpService;
     }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}