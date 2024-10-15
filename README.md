# Lier l'API CodeIgniter à une application Angular

## Configuration de CodeIgniter

## Configuration de récupération des données de la db

## Dans le fichier "app/Config/Database.php"
public array $default = [
    'DSN'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'ci-secure-api',
    'DBDriver'     => 'MySQLi',
    'DBPrefix'     => '',
    'pConnect'     => false,
    'DBDebug'      => true,
    'charset'      => 'utf8',
    'DBCollat'     => 'utf8_general_ci',
    'swapPre'      => '',
    'encrypt'      => false,
    'compress'     => false,
    'strictOn'     => false,
    'failover'     => [],
    'port'         => 3306,
    // Modifier ce paramètre pour obtenir le type des données, comme il est définit dans la base de données
    'numberNative' => true,
];


## Télécharger et installer la bibliothèque CodeIgniter-CORS 
composer require chriskacerguis/codeigniter-restserver

## Créer manuellement un fichier Middleware "CORSFilter" dans le dossier "app/Filters"
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Cors implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Autoriser les origines spécifiques à accéder à cette API (remplacez * par votre domaine Angular)
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 3600');

        if ($request->getMethod(true) === 'OPTIONS') {
            return service('response');
        }

        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Vous pouvez ajouter des actions après la réponse si nécessaire
        return $response;
    }
}

## Activer le Middleware CORS dans le fichier "app/Config/Filters.php"
public $filters = [
    'cors' => \App\Filters\Cors::class,
];

public $globals = [
    'before' => [
        'cors',
    ],
    'after'  => [
    ],
];


## Configurer les paramètres CORS dans l'ApiController 
public function before(RequestInterface $request, $arguments = null)
{
    // Configuration CORS pour ce contrôleur
    $this->response->setHeader('Access-Control-Allow-Origin', 'http://votre-application-angular.com');
    $this->response->setHeader('Access-Control-Allow-Methods', 'GET, POST');
    $this->response->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    $this->response->setHeader('Access-Control-Max-Age', '3600'); // Durée du cache CORS en secondes
    $this->response->setHeader('Access-Control-Allow-Credentials', 'true');

    if ($request->getMethod(true) === 'OPTIONS') {
        // Réponse immédiate pour les requêtes OPTIONS
        return $this->response;
    }

    return $request;
}

## Créer une application Angular 







