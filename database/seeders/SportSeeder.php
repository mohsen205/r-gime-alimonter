<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sport')->insert([
            'name' => 'Bridge',
             'description' => 'Activez votre chaîne centrale et postérieure (un terme de fantaisie pour le dos de votre corps) avec un pont. C\'est un excellent exercice à utiliser comme échauffement.',
             'deriction' => "Allongez-vous sur le dos, les genoux pliés, les pieds à plat sur le sol et les bras étendus sur les côtés.
                             En poussant vos pieds et en renforçant votre tronc, soulevez vos fesses du sol jusqu'à ce que vos hanches soient complètement étendues, en serrant vos fessiers en haut.
                             Revenez lentement à la position de départ et répétez.",
             'image' => './images/image-1.png'
        ]);
        DB::table('sport')->insert([
            'name' => 'Chair squat',
             'description' => 'Accroupissez-vous pour renforcer vos jambes et votre tronc, ce qui facilitera les mouvements quotidiens. En commençant par une chaise en dessous, vous vous aiderez à maîtriser la bonne forme.',
             'deriction' => "Tenez-vous debout devant la chaise, les pieds écartés de la largeur des épaules, les orteils légèrement pointés.
                                Articuler au niveau de vos hanches et plier les genoux, le bas du dos et le bas jusqu'à ce que vos fesses touchent la chaise, permettant à vos bras de s'étendre devant vous.
                                Poussez vos talons et revenez à la position de départ.",
             'image' => './images/image-2.png'
        ]);
        DB::table('sport')->insert([
            'name' => 'Push Up',
             'description' => 'Un pushup de style débutant, ce mouvement vous aidera à développer votre force avant d\'essayer un pushup standard',
             'deriction' => "Mettez-vous en position de planche haute à partir de vos genoux.
                                En maintenant une ligne droite de la tête aux genoux, pliez les coudes pour vous abaisser au sol. Gardez vos coudes à un angle de 45 degrés.
                                Poussez vers le haut pour commencer.",
             'image' => './images/image-3.png'
        ]);
        
    }
}
