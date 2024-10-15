<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        // Données dynamiques dans la vue
        
        /*
        $data['title']   = 'My Real Title';
        $data['heading'] = 'My Real Heading';

        return view('blog_view', $data);
        */

        // Création d'une boucle
        $data = [
            'todo_list' => ['Clean House', 'Call Mom', 'Run Errands'],
            'title'     => 'My Real Title',
            'heading'   => 'My Real Heading',
        ];

        return view('blog_view', $data);

        /*         
        L'option saveData 
        *****************
        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];
        
        return view('blog_view', $data, ['saveData' => false]);
        */
    }
}