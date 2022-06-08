{{-- 
    -Livewire est un framework laravel qui permet de créer des pages web dynamiques sans ecrire du code javascript.
    -Pour installer livewire il faut taper la commande composer require livewire/livewire
    -Pour utiliser livewire il faut taper la commande php artisan make:livewire
    -Pour charger les styles livewire il faut taper la commande @livewireStyles au niveau du head
    -Pour charger les scripts livewire il faut taper la commande @livewireScripts au niveau du body
    -Pour utiliser livewire il faut taper la commande @livewire au niveau du body
    pour creer des composants il faut taper la commande "make:livewire" suivi du titre du composant au niveau du terminal
    _pour appeler un composant livewire sur une page il faut taper la commande @livewire('nom_du_composant') ou <livewire:nom du fichier blade livewire />
        {
        
         -INTEGRER un template denommer adminLTE{
         1-installer adminlte dans Documentation avec la ligne de commande (npm install admin-lte@^3.1 --save;). avant de faire l'installation il faut lancer la commande (npm install).
         2-ajouter le fichier adminlte dans le dossier resources/views/
         3-ajouter le fichier adminlte dans le dossier resources/css/ en tapant la commande import "admin-lte/plugins/css/adminlte";
         4-ajouter le fichier adminlte dans le dossier resources/bootstrap/ en tappant la commande import "admin-lte/plugins/bootstrap/js/bootstrap.bundle";
             5-ajouter le fichier adminlte dans le dossier resources/js/ en tappant la commande import "admin-lte/dist/js/adminlte";
         
    -copier le code du template dans un fichier master.blade.php et supprimer les parties inutiles dans le dossier resources/views/
    -faire appel à la balise link pour styliser le template avec <link rel="stylesheet" href="{{ asset ou mix('css/app.css') }}"> et pareil pour le script avec <script src="{{ asset ou mix('js/app.js') }}">
    -faire appel à la balise script pour charger les composants livewire avec @livewireScripts et pareil pour le style avec @livewireStyles
    appeler le code de la vue master dans les differentes pages souhaitées avec @extends(dossier.fichier) ;
    }


            {                                    1-LES MODELS
                -Les models sont des fichiers qui contiennent des informations sur les tables de la base de données.
                -Pour créer un model il faut taper la commande php artisan make:model nom_du_model.
                -Le model sert a créer des fonctions qui permettent de faire des requêtes dans la base de données,
                 par exemple le model ArticlesModel permet de faire des requêtes sur la table articles.


                                                2-LES MIGRATIONS
                -Les migrations sont des fichiers qui permettent de créer des tables dans la base de données.
                -Pour créer une migration il faut taper la commande php artisan make:migration nom_de_la_migration, par exemple la migration articles_table pour créer la table articles.

                                                3-LES SEEDERS
                -Les seeders sont des fichiers qui permettent de remplir la base de données avec des données dont on a besoin.
                -Pour créer un seeder il faut taper la commande php artisan make:seeder nom_du_seeder.
                -Le seeder sert a remplir la base de données avec des données dont on a besoin.

                                                4-LES FACTORIES
                -Les factories sont des fichiers qui permettent de créer des données dont on a besoin.
                -Pour créer une factory il faut taper la commande php artisan make:factory nom_de_la_factory.

                 
            }

            {
                                                     LES RELATIONS
                                            1-BELONGS TO
                -La relation belongs to est une relation qui permet de lier une table à une autre table pour créer une clé étrangère,
                 par exemple une table articles possède une clé étrangère sur la table categories donc la relation sera belongs to.
            }
 --}}
@extends("layouts.master");

@section('content')

< livewire:counter />

@endsection;