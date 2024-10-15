<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */

    /*
     // Définir un service 
    public static function routes($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('routes');
        }

        return new \App\Router\MyRouteCollection(static::locator(), config('Modules'));
    }
    
    
    Paramètres d'autorisation 
    *************************
    
    Possibilité de transmettre un paramètre à la classe lors de l'instanciation.
    On veut que cette classe puisse trouver les vues sur APPATH . 'vues/'. On souhaite 
    qu'on puisse avoir la possiblité de modifier ce chemin, si ses besoins l'exigent.    
    public static function renderer($viewPath = APPPATH . 'views/')
    {
        $renderer = \Config\Services::renderer('/shared/views/');
        return new \CodeIgniter\View\View($viewPath);
    }

    public static function postManager()
    {
        $postManager = \Config\Services::postManager();
    }
    */
}
