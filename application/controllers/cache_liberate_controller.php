<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cache_liberate_controller extends Super_cache_controller {
    
    public function __construct() {
        parent::__construct();
        //cargamos todo lo que necesitemos
 
        //llamamos a la función del controlador SuperController removeCache()
        $this->removeCache();
        redirect('welcome');
    }
    
    //más funciones y métodos
}
