<?php 

class Router
{
    private $pages = array();

    public function addRoute($url, $path)
    {
        $this->pages[$url] = $path;
    }

    public function route($url)
    {
        $path = $this->pages[$url];
        if($path == "") 
        {
            http_response_code(404);
        }

        $file_dir = "methods/" . ucfirst($path);

        if(file_exists($file_dir))
        {
            require $file_dir;
        }
        else {
            http_response_code(405);
        }
    }
}