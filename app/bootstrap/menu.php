<?php

//Home - Using a static method
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('paolodavila');

//Another Link
MenuWithAuthentication::menu('another_link')
    ->title('Another Link')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu('multilevel')->title('Multilevel')->icon('fa-calendar-o');
 MenuWithAuthentication::menu('link1')->title('Link in level 2')->icon('fa-desktop');
 MenuWithAuthentication::menu('link2')->title('Link in level 2')->icon('fa-mobile');

//Últim menu
MenuWithAuthentication::menu('ultim')
    ->title('Últim menu')
    ->icon('fa-bell')
    ->url('https://www.google.es');

//$menuHome = MenuWithAuthentication::menu('home');