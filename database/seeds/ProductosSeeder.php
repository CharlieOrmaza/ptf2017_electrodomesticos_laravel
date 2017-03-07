<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cargo las categorias de producto

        DB::table('categoria_producto')->insert([
        	[
        	'id' => 1,
            'nombre' => 'Televisores',
            'descripcion' => 'Televisores de todo tipo'
        	],
        	[
        	'id' => 2,
            'nombre' => 'Smatphones',
            'descripcion' => 'Smatphones de todo tipo'
        	],
        ]);

        // Cargo los productos

        DB::table('producto')->insert([
        	[
            'codigo' => 'smart_philips',
            'nombre' => 'Televisor Smart TV Philiphs',
            'descripcion' => 'Televisor Smart TV Philiphs',
            'stock' => 100,
            'categoria_producto_id' => 1
        	],
        	[
            'codigo' => 'smart_samsung',
            'nombre' => 'Televisor Smart TV Samsung',
            'descripcion' => 'Televisor Smart TV Samsung',
            'stock' => 100,
            'categoria_producto_id' => 1
        	],
        	[
            'codigo' => 'smart_sony',
            'nombre' => 'Televisor Smart TV Sony',
            'descripcion' => 'Televisor Smart TV Sony',
            'stock' => 100,
            'categoria_producto_id' => 1
        	],
        	[
            'codigo' => 'tel_nokia',
            'nombre' => 'Smartphone Nokia',
            'descripcion' => 'Smartphone Nokia',
            'stock' => 100,
            'categoria_producto_id' => 2
        	],
        	[
            'codigo' => 'tel_samsung',
            'nombre' => 'Smartphone Samsung',
            'descripcion' => 'Smartphone Samsung',
            'stock' => 100,
            'categoria_producto_id' => 2
        	],
        	[
            'codigo' => 'tel_motorola',
            'nombre' => 'Smartphone Motorola',
            'descripcion' => 'Smartphone Motorola',
            'stock' => 100,
            'categoria_producto_id' => 2
        	]
        ]);
    }
}
