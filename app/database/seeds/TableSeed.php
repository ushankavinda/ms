 <?php
 
 class TableSeed extends Seeder {
     
     public function run() {
         $faker = Faker\Factory::create();
         
//         Product::truncate();
//         
//         for($i=0;$i<20;$i++) {
//             $products = Product::create(array(
//                 'name'=> $faker->realText(rand(10,10)),
//                 'catergory' => rand(0,1)
//                 
//             ));
//         }
          $products = DB::table('product')->get();
        AccItems::truncate();
       
        for($i=0;$i<20;$i++) {
            $pro_details = AccItems::create(array(
                'product_id' => $faker->randomNumber($products),
                'model_name'=> $faker->realText(rand(10,10)),
                'name'=> $faker->name(),
                'img_path' => $faker->url()
                 
            ));
         }
        
     }
 }

