

@extends('main')

@section('content')

<h2 class="text-white pb-3">Fonctionnement de l'application</h2>
<p class="text-white">Cette carte de Mars affiche les zones à plus ou moins forte concentration de minerais dangereux.
    On a pour le moment reporté la présence de 3 minerais : Klingon, Chomdu et Perl. Le niveau de danger d'une zone est calculé en fonction de la dangerosité du minerai, mais aussi de sa concentration.
    Il existe 10 niveaux de dangerosité représentés par le dégradé de rouge à gauche. 
</p>
<p class="text-white">
    La combinaison des colons néo-marsiens est équipée de capteurs qui permettent d'évaluer la concentration 
    de minerai à un endroit. Cela permet de rentrer les données déjà calculées directement dans le tableau, 
    une aubaine pour les développeurs de l'appli en sérieux manque de temps.
</p>
<p class="text-white">
    Pour reporter une zone, il suffit de remplir le formulaire accessible via le bouton rouge en homepage. 
    La géolocalisation se fait en calculant les latitude et longitude d'une zone, avec un chiffre compris
    entre 1 et 12.
</p>
<p class="text-white">
    Pour voir la liste des minerais et leur description, suivez le lien Minerais dans l'en-tête.
    Vous pouvez également ajouter un nouveau minerai.
<p class="text-white">
    Enfin, il est à noté que le principe de responsive ne s'applique plus sur Mars, cette application ne peut donc être utilisée que sur desktop.
</p>

@endsection