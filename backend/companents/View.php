<?php
namespace backend\companents;

class View
{

    private static $_view;

    public $view;

    public $view_path = '';

    public $attr = [];

    public function render($folder, $view, $attr = null)
    {
        if(!empty(ob_get_contents())){
            ob_end_clean();
        }
        ob_start();
        $this->view_path = '../views' . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $view . '.php';
        if(is_file($this->view_path)){
            $this->view_folder = $folder;
            if(isset($attr) && is_array($attr)){
                $this->attr = $attr;
                extract($attr, EXTR_OVERWRITE);
            }
            include $this->view_path;
        }else{
            throw new \Exception('File: ' . $this->view_path . ' not exist!');
        }
    }

}
