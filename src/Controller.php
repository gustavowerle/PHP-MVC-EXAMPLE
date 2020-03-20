<?php

namespace GW01;

class Controller 
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->configModel();
    }

    protected function render(array $data = [], string $view = null){

        if (!$view){
            $view = $this->controllerName() . '/' . debug_backtrace()[1]['function'];
        }

        extract($data);
        require __DIR__ . '/../views/' . $view . '.tpl.php';
    }

    private function controllerName()
    {
        $class = get_class($this); // App\Controllers\UsersController
        $class = explode('\\', $class); // ['App'], ['Controllers'], ['UsersController']
        $class = array_pop($class); // UsersController
        $class = preg_replace('/Controller/', '', $class); //Users
        return strtolower($class); //users
    }

    private function configModel()
    {
        if (!$this->model->getTableName())
        {
            $this->model->setTableName($this->controllerName());
        }
    }
}