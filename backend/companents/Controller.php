<?php


namespace backend\companents;


class Controller
{
    

    public function render($view, $attributes = null)
    {
        try{
            (new View)->render($this->getClassFromPath(), $view, $attributes);
        } catch(\Exception $e){
            (new ErrorHandler())->showError($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
        }

    }

    /**
     * осуществляет перенаправление
     * @param $action
     * @param null $attr
     * @throws \Exception
     */
    public function redirect($action, $attr = null){
        if(is_array($action)){
            (new View)->render($action[0],$action[1], $attr);
            return;
        }
        header('Location: ' . $action);
    }

    /**
     * Возвращает название класса, бъект которого создается
     * в нижнем регистре
     * из строки "\liw\controllers\MainController" делает "main"
     *
     * @return string нижний регистр
     */
    private function getClassFromPath()
    {
        $path = get_class($this);
        $folder = str_replace('controller', '', substr(strrchr(strtolower($path), "\\"), 1));
        return $folder;
    }

}