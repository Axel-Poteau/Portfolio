<?php

namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projet1 = new Projet();
        $projet1->nom = 'Fractales';
        $projet1->desc = 'Librairie servant à générer des fractales, on y retrouve la suite de Julia et de Mandelbrot, ainsi que des fractales à base de figure géométrique comme le tapis de Sierpinski.';
        $projet1->lang = 'java';
        $projet1->lien = 'https://github.com/Axel-Poteau/Fractals';
        $projet1->save();

        $projet1 = new Projet();
        $projet1->nom = 'Site web événementiel';
        $projet1->desc = "Site web développé pour une entreprise d'événementiel fictif basé à Lens sur les compétitions Esport, créée en première année de BUT pour les examens de fin d'année.";
        $projet1->lang = 'HTML/CSS/JS';
        $projet1->lien = 'https://github.com/Axel-Poteau/Site-web-evenementiel';
        $projet1->save();

        $projet1 = new Projet();
        $projet1->nom = 'Application de gestion de compte';
        $projet1->desc = "Application où l'on retrouve un system de compte avec différentes options pour gérer celui-ci ainsi qu'une interface administratrice afin de gérer tous les comptes.";
        $projet1->lang = 'Laravel';
        $projet1->lien = 'https://github.com/Axel-Poteau/Gestion-compte';
        $projet1->save();

        $projet1 = new Projet();
        $projet1->nom = 'Application de gestion de vente';
        $projet1->desc = "Application servant à gérer des ventes d'une entreprise, leur flotte de véhicules ainsi que le stock d'article et les clients, développé en java pour les examens du semestre 2 en BUT1 .";
        $projet1->lang = 'Java';
        $projet1->lien = 'https://github.com/Axel-Poteau/SAE-Gestion-Vente';
        $projet1->save();

        $projet1 = new Projet();
        $projet1->nom = "CSkinGuess";
        $projet1->desc = "Mini-jeu aillant pour but de deviner le cosmetic venant du jeu counter-strike a l'aide d'indice .";
        $projet1->lang = 'Angular';
        $projet1->lien = 'https://github.com/Axel-Poteau/CSkinGuess/tree/master';
        $projet1->save();


    }
}
