<?php

namespace MenuWithAuthentication\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

/**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 14/12/15
 * Time: 17:10
 */
class SidebarComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with('menu', $this->getSideBarMenu());
    }

    /**
     * @return array
     */
    private function getSideBarMenu() {
        //$menu = MenuWithAuthentication::instance(1)->getMenu();
        //return array($menu);
        return array();
    }
}