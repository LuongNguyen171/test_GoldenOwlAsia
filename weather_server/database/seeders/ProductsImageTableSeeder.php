<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // product id 1
        DB::table('product_Images')->insert([
            "productId" => 1,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b7d9211c-26e7-431a-ac24-b0540fb3c00f/air-force-1-07-shoes-WrLlWX.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 1,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/00375837-849f-4f17-ba24-d201d27be49b/air-force-1-07-shoes-WrLlWX.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 1,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3cc96f43-47b6-43cb-951d-d8f73bb2f912/air-force-1-07-shoes-WrLlWX.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 1,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/33533fe2-1157-4001-896e-1803b30659c8/air-force-1-07-shoes-WrLlWX.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 1,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/82aa97ed-98bf-4b6f-9d0b-31a9f907077b/air-force-1-07-shoes-WrLlWX.png"
        ]);

        //product id 2

        DB::table('product_Images')->insert([
            "productId" => 2,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2b050e6a-4647-4647-babb-32b1fa8d33a6/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 2,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a56f1cff-1334-477b-926e-b07e4fcb4729/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 2,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/24fc445c-b42f-42f2-b134-ae849cba631e/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 2,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6c39c260-aeb3-48cd-aaee-5f013c1b1016/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 2,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8d5f1979-2516-4047-9e5a-16024e7eb54e/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png"
        ]);
        //product id 3
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/06f07a18-b639-4297-9641-2a99f848368d/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/4a667467-fece-4b1e-8384-6a9e0d5b4b42/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/6930da28-144e-4b0e-93c7-af2642a78af3/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c8fb7767-0127-485b-b200-2628115f59cc/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/7273b974-3382-44f6-bcf9-e70c3d92af8c/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/29a722ec-7d51-4c1f-b32b-ae5a698b6ac1/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 3,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fb5ce315-dde5-401a-a4ec-e9b2a29604ae/jordan-1-low-alt-se-younger-shoes-6ksx5c.png"
        ]);
        //product id 4
        DB::table('product_Images')->insert([
            "productId" => 4,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c82501e4-317d-4cc4-bd10-e7c947ce31a0/gamma-force-shoes-CbTnH1.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 4,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/af0740bf-bab6-4a1d-93ea-dd4115b936fb/gamma-force-shoes-CbTnH1.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 4,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9653f191-51fb-43df-aa85-398ae44d1295/gamma-force-shoes-CbTnH1.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 4,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/53692ee7-26db-4e4f-906f-45eeebc46ec4/gamma-force-shoes-CbTnH1.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 4,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/816b5cee-74cb-4e1e-ba3f-f8b0c3828a9a/gamma-force-shoes-CbTnH1.png"
        ]);
        //product id 5
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/bf877156-a080-457b-bc96-7d7c76378165/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/1589eadc-716d-4a28-b1c9-e46875598797/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/4d6ab3d5-ee83-46ec-ab67-d5f3f3317053/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/7eab1ad6-836b-43ef-9613-bc4c7d9be749/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/1486600c-6495-4366-ba93-aea6d52dd29e/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 5,
            "productImage" => "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/b27380b4-9674-4e7e-b626-989cd1ab6b47/air-jordan-xxxviii-fiba-older-shoes-jsK87k.png"
        ]);
        //product id 6

        DB::table('product_Images')->insert([
            "productId" => 6,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_369579_1_b6a85794a20d4a438432545f596be9d8_master.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 6,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_369579_3_07222294d7834cfeb5e0b12b21c837ad.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 6,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_369579_4_58705f4d01bb4973bd81e9ccb1e67bc0_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 6,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_369579_5_d39a889b5584454ea27960b91f8344d7_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 6,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_369579_6_7fe3721130ac49b3855b0184fef962c7_small.jpg"
        ]);

        //product id 7

        DB::table('product_Images')->insert([
            "productId" => 7,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_378916_2_1824d1f55ea2416c8945199c3d4a1fa2_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 7,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_378916_4_04b9c99b0d1e4a5794625960b5e29fdd_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 7,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_378916_5_97824fbc916343178044cff6f58a097f_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 7,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_378916_6_46cf6b1c73d04c1f980f9a74b4983c8b_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 7,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_378916_7_ab838efee5944f4e8cd8df1993f23cb8_small.jpg"
        ]);

        //product id 8
        DB::table('product_Images')->insert([
            "productId" => 8,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_393771_2_ca522ee645eb4ea089df0a9a334acf94_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 8,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_393771_4_223fed33df704d8da4d270b37c7fdea3_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 8,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_393771_5_03820b696de7439e8788d87632e73400_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 8,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_393771_6_994c94551ff34f4bbd5173621d71e900_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 8,
            "productImage" => "https://product.hstatic.net/1000284478/product/01_393771_7_56a508ee16404ca6b6dd6f24e5ef6f79_small.jpg"
        ]);
        //product id 9
        DB::table('product_Images')->insert([
            "productId" => 9,
            "productImage" => "https://product.hstatic.net/1000284478/product/02_393161_2_d18107fb5d1042429065e6c70c9f7502_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 9,
            "productImage" => "https://product.hstatic.net/1000284478/product/02_393161_3_f3cf93c9a08747aea5a526711698c943_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 9,
            "productImage" => "https://product.hstatic.net/1000284478/product/02_393161_4_7e9ca110fbab4afc95ca1b43f3016b17_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 9,
            "productImage" => "https://product.hstatic.net/1000284478/product/02_393161_5_4a7520f077994ef193def2d1d31e0de5_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 9,
            "productImage" => "https://product.hstatic.net/1000284478/product/02_393161_6_db3e72c6908d4b739a51d85fe3cc19fb_small.jpg"
        ]);
        //product id 10
        DB::table('product_Images')->insert([
            "productId" => 10,
            "productImage" => "https://product.hstatic.net/1000284478/product/20_195234_1_dd1779bb6fee4ea9bfef51a57f6905b2_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 10,
            "productImage" => "https://product.hstatic.net/1000284478/product/21_195234_1_837c7580c7fb4ac89e78e3e57304e116_small.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 10,
            "productImage" => "https://product.hstatic.net/1000284478/product/11_195234_1_0c0a4a7e618f481cabba40d6350985bc_master.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 10,
            "productImage" => "https://product.hstatic.net/1000284478/product/05_195234_1_5c65d7a3540e4622abf99edcc17f0591_master.jpg"
        ]);
        DB::table('product_Images')->insert([
            "productId" => 10,
            "productImage" => "https://product.hstatic.net/1000284478/product/05_195234_1_5c65d7a3540e4622abf99edcc17f0591_master.jpg"
        ]);
    }
}
