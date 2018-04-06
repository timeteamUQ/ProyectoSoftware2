<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'tipod' 		=> 'documento',
				'identificacion' => '1094952608',
				'nombre' 	=> 'mateo henao rodriguez',
        'telefonor' 	=> '73701270',
				'telefonoc' 		=> '3176996558',
        'direccionr' 	=> 'asturias',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'estudiante',
        'email' 	=> 'mateo@hotmail.com',
        'user' 	=> 'teopc',
				'password' 	=> \Hash::make('mateoo'),
				'tipo' 		=> 'administrador',
				'active' 	=> 1,
				
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '001',
        'nombre' 	=> 'andres mancilla',
        'telefonor' 	=> '0127',
        'telefonoc' 		=> '317',
        'direccionr' 	=> 'llanitos',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'dormir',
        'email' 	=> 'mancilla@hotmail.com',
        'user' 	=> 'mancilla',
        'password' 	=> \Hash::make('mancilla'),
        'tipo' 		=> 'administrador',
        'active' 	=> 1,
      
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '002',
        'nombre' 	=> 'pipe otalvaro',
        'telefonor' 	=> '01270',
        'telefonoc' 		=> '3173',
        'direccionr' 	=> 'el valencia',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'comer',
        'email' 	=> 'otalvaro@hotmail.com',
        'user' 	=> 'otalvaro',
        'password' 	=> \Hash::make('otalvaro'),
        'tipo' 		=> 'administrador',
        'active' 	=> 1,
        
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '003',
        'nombre' 	=> 'stiven amaya',
        'telefonor' 	=> '012701',
        'telefonoc' 		=> '31731',
        'direccionr' 	=> 'colinas',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'mirar',
        'email' 	=> 'amaya@hotmail.com',
        'user' 	=> 'amaya',
        'password' 	=> \Hash::make('amaya'),
        'tipo' 		=> 'administrador',
        'active' 	=> 1,
       
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'NIT',
        'identificacion' => '1',
        'nombre' 	=> 'cliente 1',
        'telefonor' 	=> '1',
        'telefonoc' 		=> '1',
        'direccionr' 	=> 'direccion 1',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'profesion1',
        'email' 	=> 'cliente1@hotmail.com',
        'user' 	=> 'cliente1',
        'password' 	=> \Hash::make('cliente1'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,
       
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '2',
        'nombre' 	=> 'cliente 2',
        'telefonor' 	=> '2',
        'telefonoc' 		=> '2',
        'direccionr' 	=> 'direccion 2',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'profesion2',
        'email' 	=> 'cliente2@hotmail.com',
        'user' 	=> 'cliente2',
        'password' 	=> \Hash::make('cliente2'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,
       
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
      [
        'tipod' 		=> 'documento',
        'identificacion' => '3',
        'nombre' 	=> 'cliente 3',
        'telefonor' 	=> '3',
        'telefonoc' 		=> '3',
        'direccionr' 	=> 'direccion 3',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindio',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'profesion3',
        'email' 	=> 'cliente3@hotmail.com',
        'user' 	=> 'cliente3',
        'password' 	=> \Hash::make('cliente3'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,
       
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
		);

		User::insert($data);
    }
}
