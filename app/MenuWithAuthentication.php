<?php
/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

/**
 * Class MenuWithAuthentication
 * @package MenuWithAuthentication
 */
class MenuWithAuthentication {

    /**
     * @var null - Static attribute
     */
    protected static $instance = null;

    /**
     * @var MenuItem[]
     */
    protected $menu;


    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct(){
    }

    /**
     * @param $id
     * @return MenuItem
     * Static method
     */
    public static function menu($id) {
        return new MenuItem($id);
    }

    /**
     * @return null|static
     * Function used in SidebarComposer -> getSideBarMenu
     */
    public static function instance() {
        //Objects to verify that a unique
        if(is_null(static::$instance)) {
            //Singleton: object ensure that you generate yourself once
            return static::$instance = new static;
        }

        //Variable that is stored at the same statically
        return static::$instance;
    }

    /**
     * @return mixed
     * returns a list of menu items
     */
    public function getMenu() {
        return $this->menu->items();
    }
}