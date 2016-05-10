<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 06.05.16
 * Time: 15:21
 */

namespace App;


class View implements \Countable
{
    protected $data = [];
    protected $_myCount = 3;
    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }
    public function __get($k)
    {
        return $this->data[$k];
    }
    public function __isset($k)
    {
        return isset($this->data[$k]);

    }
    public function count()
    {
        // TODO: Implement count() method.
        return count($this->data);

    }

    /**
     * @param $template путь к шаблону
     */
    public function display($template){
        $this->render($template);
    }

    /**
     * @param $template
     * @return  string
     */
    public function render($template){
        ob_start();
        foreach($this->data as $prop=>$value){
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}