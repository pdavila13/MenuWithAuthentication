<?php

//Home
MenuWithAuthentication::menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('paolodavila');

//Another Link
MenuWithAuthentication::menu()
    ->title('Another Link')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu()->title('Multilevel')->icon('fa-calendar-o');
 MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-desktop');
 MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-mobile');

//Últim menu
MenuWithAuthentication::menu()
    ->title('Últim menu')
    ->icon('fa-bell')
    ->url('https://www.google.es');