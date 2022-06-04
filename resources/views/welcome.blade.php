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
 --}}
@extends("layouts.master");

@section('content')

< livewire:counter />

@endsection;