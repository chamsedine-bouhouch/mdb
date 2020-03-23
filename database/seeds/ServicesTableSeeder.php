<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$services= [
			[
	        'titre' => 'Installation Prise',
	        'categorie' => 'electricite',
	        'type' => 'installation',
	        'description' => "Demander une nouvelle installation d'un prise",
	        'prix' => 30,
	        'image' => 'reparationPrise.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
	        [
	        'titre' => 'Réparation Prise',
	        'categorie' => 'electricite',
	        'type' => 'depannage',
	        'description' => "Demander une nouvelle installation d'un prise",
	        'prix' => 20,
	        'image' => 'reparationPrise.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
	        [
	        'titre' => 'Entretien Chaudière ',
	        'categorie' => 'chauffage',
	        'type' => 'depannage',
	        'description' => "Un entretien régulier garanti votre sécurité",
	        'prix' => 60,
	        'image' => 'entretienChaudiere.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
	        [
	        'titre' => 'Installation Lampe ',
	        'categorie' => 'electricite',
	        'type' => 'installation',
	        'description' => "Demander une nouvelle installation d'une lampe",
	        'prix' => 20,
	        'image' => 'installerLampe.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
	        [
	        'titre' => 'Recharge Gaz ',
	        'categorie' => 'climatisation',
	        'type' => 'depannage',
	        'description' => "Recharger votre climatiseur en gaz",
	        'prix' => 60,
	        'image' => 'recharge_Gaz.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
	        [
	        'titre' => 'Réparation Robinet ',
	        'categorie' => 'plomberie',
	        'type' => 'depannage',
	        'description' => "Demander une intervention pour votre robinet",
	        'prix' => 60,
	        'image' => 'réparationRobinet.jpg',
	        'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
	        ],
    	];

    	foreach($services as $service){
    		// DB::table('services')->insert($service);
    		Service::create($service);
    	}







    }
}
