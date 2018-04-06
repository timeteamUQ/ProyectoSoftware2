<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'nombre' => 'Iphone X',
				'direccion' => 'iphone-x',
				'cantidad'  => 15,
				'tipo' 	=> 'celulares',
				'material' 	=> 'aluminio',
				'alto' 	=> '13',
				'ancho'=> '7',
				'profundidad'=> '1.3',
				'color' 			=> 'plateado',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Las nuevas funcionalidades de iOS 11 convierten tu iPhone en un dispositivo más poderoso, inteligente y personal que nunca. Ahora podrás hacer más cosas de forma más rápida y sencilla.',
				'precio' 		=> 430.000,
				'imagen' 		=> 'https://switch.com.my/wp-content/uploads/2017/11/iphonex_spacegray.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Moto Z',
				'direccion' 			=> 'moto-z',
				'cantidad'  => 20,
				'tipo' 			=> 'celulares',
				'material' 			=> 'aluminio',
				'alto' 			=> '14',
				'ancho'=> '4',
					'profundidad'=> '1,2',
				'color' 			=> 'rojo',
				'peso' 		=> 120,
				'descripcion' 	=> 'El Motorola Moto Z es la nueva generación que reemplaza a la serie Moto X e introduce los Moto Mods, carcasas que agregan funcionalidad extra como proyector, parlantes stereo, una extensión de batería y más, o bien personalizarlo con carcasas de cuero, madera o tela.',

				'precio' 		=> 115.000,
				'imagen' 		=> 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/m/o/motoz-3_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Huawei P10',
				'direccion' 			=> 'huawei-p10',
				'cantidad'  => 6,
				'tipo' 			=> 'celulares',
				'material' 			=> 'plastico',
				'alto' 			=> '13',
				'ancho'=> '7',
					'profundidad'=> '0.3',
				'color' 			=> 'blanco',
				'peso' 		=> 75,
				'descripcion' 	=> 'la esencia del Mate 9 en formato compacto con cámara doble mejorada',

				'precio' 		=> 130.000,
				'imagen' 		=> 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/p/1/p10lite7_2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime

			],
			[
				'nombre' 			=> 'Huawei p10',
				'direccion' 			=> 'huawei-p10',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'material' 			=> 'roca',
			'alto' 			=> '18',
				'ancho'=> '9',
					'profundidad'=> '3,2',

				'color' 			=> 'azul',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'ale 2',
				
				'precio' 		=> 475.000,
				'imagen' 		=> 'https://http2.mlstatic.com/celular-huawei-p10-lite-D_NQ_NP_620775-MCO25566596032_052017-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'PC Gamer Xtreme',
				'direccion' 			=> 'Gamer-Xtreme',
				'cantidad'  => 4,
				'tipo' 			=> 'computadores',
				'material' 			=> 'plastico',
				'alto' 			=> '40',
				'ancho'=> '60',
					'profundidad'=> '20',
				'color' 			=> 'negro',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Sistema informático para juegos de nivel de rendimiento
El CyberPowerPC Gamer Xtreme está optimizado para juegos.',

				'precio' 		=> 280.000,
				'imagen' 		=> 'https://http2.mlstatic.com/pc-gamer-xtreme-gxivr8020a4-torre-intel-i5-8gddr4-1t-7200rpm-D_NQ_NP_730594-MCO26440760337_112017-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
],
			[
				'nombre' 			=> 'Xiaomi Redmi Note 4',
				'direccion' 			=> 'xiaomi-redminote4',
				'cantidad'  => 30,
				'tipo' 			=> 'celulares',
				'material' 			=> 'plastico',
				'alto' 			=> '15',
				'ancho'=> '7',
					'profundidad'=> '1',
				'color' 			=> 'plateado',
				'peso' 		=> 175,
				'descripcion' 	=> 'MIUI 8, permite crear dos perfiles separados en su teléfono con Second Space. Utilice diferentes códigos de acceso o huellas dactilares para acceder a ellos, cada uno con su propio fondo de pantalla, aplicaciones, archivos y fotos.',

				'precio' 		=> 275.000,
				'imagen' 		=> 'https://celularescostarica.co.cr/wp-content/uploads/2018/02/Xiaomi-Redmi-Note-4-en-Costa-Rica.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'Nintendo Switch',
				'direccion' 			=> 'nintendo-switch',
				'cantidad'  => 90,
				'tipo' 			=> 'video juegos',
				'material' 			=> 'plastico',
				'alto' 			=> '30',
				'ancho'=> '40',
					'profundidad'=> '5',
				'color' 			=> 'negro',
				'peso' 		=> 275,
				'descripcion' 	=> 'La consola Nintendo Switch está diseñada para acompañarte dondequiera que vayas, transformándose de consola para el hogar a consola portátil en un instante. Así tendrás más ocasiones para disfrutar de tus juegos favoritos como más te guste.',

				'precio' 		=> 275.000,
				'imagen' 		=> 'http://www.nintenderos.com/wp-content/uploads/2018/01/nintendo-switch.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'Nokia 7',
				'direccion' 			=> 'nokia-7',
				'cantidad'  => 300,
				'tipo' 			=> 'celulares',
				'material' 			=> 'aluminio',
				'alto' 			=> '18',
				'ancho'=> '9',
					'profundidad'=> '3,2',
				'color' 			=> 'negro mate',
				'peso' 		=> 2.90,
				'descripcion' 	=> 'KK 2',

				'precio' 		=> 290.000,
				'imagen' 		=> 'https://i.blogs.es/393662/nokia_7-the_design/450_1000.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'Samsung Galaxy S8',
				'direccion' 			=> 'Galaxy-s8',
				'cantidad'  => 37,
				'tipo' 			=> 'celulares',
				'material' 			=> 'plastico',
				'alto' 			=> '30',
				'ancho'=> '40',
					'profundidad'=> '5',
				'color' 			=> 'negro',
				'peso' 		=> 275,
				'descripcion' 	=> '
El Samsung Galaxy S8 corre la versión 7.0 de Android. Como otros modelos de Samsung, cuenta también con una capa de personalización del sistema operativo, en este caso TouchWiz UI.',

				'precio' 		=> 275.000,
				'imagen' 		=> 'https://d2p3an6os91m4y.cloudfront.net/app/public/spree/products/42060/gallery_large/s8.jpg?1508422257',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
			[
				'nombre' 			=> 'Play Station 1',
				'direccion' 			=> 'Play-1',
				'cantidad'  => 300,
				'tipo' 			=> 'video juegos',
				'material' 			=> 'plastico',
				'alto' 			=> '30',
				'ancho'=> '40',
					'profundidad'=> '5',
				'color' 			=> 'negro',
				'peso' 		=> 275,
				'descripcion' 	=> 'es una videoconsola de sobremesa de 32 bits lanzada por Sony Computer Entertainment el 3 de diciembre de 1994 en Japón. Se considera la videoconsola más exitosa de la quinta generación tanto en ventas como en popularidad.',

				'precio' 		=> 480.000,
				'imagen' 		=> 'http://4.bp.blogspot.com/-2pbUEuWi-CU/UtniXdXjgHI/AAAAAAAAbgc/IuQCDkk0iZo/s1600/desarmar-sony-playstation-1-psone-slim.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
				[
				'nombre' 			=> 'Alien Pc',
				'direccion' 			=> 'alien-pc',
				'cantidad'  => 300,
				'tipo' 			=> 'computadores',
				'material' 			=> 'plastico',
				'alto' 			=> '30',
				'ancho'=> '40',
					'profundidad'=> '5',
				'color' 			=> 'negro',
				'peso' 		=> 275,
				'descripcion' 	=> 'Naturalmente, la computadora presenta características excepcionales en todos sus aspectos, como un procesador Haswell-E.',

				'precio' 		=> 980.000,
				'imagen' 		=> 'https://static1.squarespace.com/static/51ede959e4b0de4b8d24e8a9/t/56c741d137013bf807affccb/1455899103274/',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],
				[
				'nombre' 			=> 'teclado laser virtual',
				'direccion' 			=> 'teclado-laser-virtual',
				'cantidad'  => 300,
				'tipo' 			=> 'accesorios computadores',
				'material' 			=> 'plastico',
				'alto' 			=> '30',
				'ancho'=> '40',
					'profundidad'=> '5',
				'color' 			=> 'negro',
				'peso' 		=> 275,
				'descripcion' 	=> 'Teclado de proyección láser para Iphone, Ipad, Smartphone, ordenador portátil o tabletas que operen el bluetooth.',

				'precio' 		=> 80.000,
				'imagen' 		=> 'http://dgvision.com.mx/167-large_default/teclado-laser-virtual.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime
			],

		);

		Product::insert($data);

	}

}