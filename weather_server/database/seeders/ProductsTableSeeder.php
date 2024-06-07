<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('products')->truncate();
        ////-----------------------------Nike----------------------------------

        DB::table('products')->insert([
            'productTmName' => 'Nike',
            'styleId' => 1,
            'productName' => 'Nike Air Force 1 07',
            'productImage' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e6da41fa-1be4-4ce5-b89c-22be4f1f02d4/air-force-1-07-shoes-WrLlWX.png',
            'productStatus' => true,
            'productPrice' => 2929000,
            'productQuantity' => 123,
            'productSoldQt' => 145,
            'productInfor' => 'Giới hạn (1) cặp cho mỗi người tiêu dùng
            Chữ ® có thể xuất hiện một hoặc hai lần trên lưỡi giày và/hoặc lót giày do Nike thực hiện thay đổi. Về mặt này, sản phẩm bạn mua có thể trông khác với sản phẩm được mô tả trên Nike.com hoặc NikeApp.',
            'productIntro' => 'Sự rạng rỡ vẫn tồn tại trong Nike Air Force 1 07, phiên bản bóng rổ nguyên bản mang đến sự thay đổi mới mẻ về những gì bạn biết rõ nhất: lớp phủ được khâu bền, lớp hoàn thiện gọn gàng và lượng đèn flash hoàn hảo giúp bạn tỏa sáng.',
            'productDiscount' => 10,
        ]);

        DB::table('products')->insert([
            'productTmName' => 'Nike',
            'styleId' => 1,
            'productName' => 'LeBron XXI Tahitian',
            'productImage' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d1afa947-6fd1-492c-90e9-5373c5b5ca1f/lebron-xxi-tahitian-younger-older-basketball-shoes-Q0HDBH.png',
            'productStatus' => true,
            'productPrice' => 4079000,
            'productQuantity' => 125,
            'productSoldQt' => 145,
            'productInfor' => 'Sự khác biệt giữa LeBron này và phiên bản dành cho người lớn? Chúng tôi đã lựa chọn tính linh hoạt cao hơn ở phần bàn chân trước thay vì bổ sung nhiều Air hơn để phù hợp với trẻ em, hoàn hảo cho trò chơi đang phát triển của bạn. Bộ phận Air Zoom được đặt ở phía dưới ở gót chân giúp tăng thêm khả năng giảm chấn khi bạn bước xuống từ việc bám ván, chụp ảnh và chuyển sang cấp độ tiếp theo trong trò chơi của mình.',
            'productIntro' => 'Lần trước, LeBron đã lật ngược kịch bản trận đấu đánh giày của mình mà chỉ có Nhà vua mới có thể làm được. Bản encore thậm chí còn hay hơn. Với các bộ phận Air Zoom và đệm mềm, LeBron XXI (còn được gọi là LeBron 21) mang đến cho bạn sự linh hoạt và sức mạnh mà không cần quá nhiều trọng lượng để làm bạn chậm lại. Lý tưởng cho các cuộc chạy vòng, đột phá nhanh và chạy đua lên xuống sân, chúng giúp bạn tiếp tục chơi ở đỉnh cao của trận đấu cho đến khi tiếng còi cuối cùng vang lên. Bạn đã sẵn sàng chơi chưa?',
            'productDiscount' => 10,
        ]);
        DB::table('products')->insert([
            'productTmName' => 'Nike',
            'styleId' => 2,
            'productName' => 'Jordan 1 Low Alt SE',
            'productImage' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c20f2863-b035-4e29-adc4-1a27ade828a6/air-jordan-1-low-se-older-shoes-HPgPbg.png',
            'productStatus' => true,
            'productPrice' => 2809000,
            'productQuantity' => 135,
            'productSoldQt' => 147,
            'productInfor' => 'Những lợi ích

            Phần trên bền được làm từ da lộn và dệt.
            Các bộ Nike Air-Sole được đóng gói cung cấp lớp đệm nhẹ.
            Đế ngoài bằng cao su rắn mang lại cho bạn lực kéo hàng ngày.
            
            Thông tin chi tiết sản phẩm
            
            Logo đôi cánh được dập ở gót chân
            Logo Swoosh được khâu xuống
            Thiết kế Jumpman trên lưỡi
            Đế xốp
            Lực kéo cao su
            Màu sắc hiển thị: Nâu/Dây/Cánh Buồm/Nâu
            Phong cách: FB2216-200
            Quốc gia/Khu vực xuất xứ: Indonesia',
            'productIntro' => 'Bạn đã bao giờ nhìn vào một quả trứng cá và nghĩ, "Ồ, tuyệt quá!"? Với những màu sắc được kết hợp từ thiên nhiên, chiếc AJ1 này tôn vinh mọi thứ ở ngoài trời. Tất nhiên, bạn vẫn có được tất cả các đặc điểm thiết kế cổ điển, như phần trên chắc chắn và đế Nike Air. Và nó đi kèm với một túi dây rút có thể tháo rời — đề phòng trường hợp bạn tìm thấy một quả đấu đặc biệt thú vị mà bạn muốn giữ lại.',
            'productDiscount' => 10,
        ]);

        DB::table('products')->insert([
            'productTmName' => 'Nike',
            'styleId' => 1,
            'productName' => 'Nike Gamma Force',
            'productImage' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/da82bd45-5d45-45c9-a066-575684f12515/gamma-force-shoes-CbTnH1.png',
            'productStatus' => true,
            'productPrice' => 2649000,
            'productQuantity' => 135,
            'productSoldQt' => 234,
            'productInfor' => 'Lớp trên lớp phong cách chiều—đó là một lực lượng cần được tính đến. Mang lại sự thoải mái và tính linh hoạt, những cú đá này bắt nguồn từ văn hóa bóng rổ truyền thống. Chất liệu cổ áo thể hiện sự tôn kính đối với môn thể thao cổ điển trong khi nền tảng tinh tế nâng tầm diện mạo của bạn theo đúng nghĩa đen. Gamma Force đang tạo nên di sản của riêng mình: phong cách cung đình có thể đeo cả ngày, dù bạn đi đâu.',
            'productIntro' => 'Lớp trên lớp phong cách chiều—đó là một lực lượng cần được tính đến. Mang lại sự thoải mái và tính linh hoạt, những cú đá này bắt nguồn từ văn hóa bóng rổ truyền thống. Chất liệu cổ áo thể hiện sự tôn kính đối với môn thể thao cổ điển trong khi nền tảng tinh tế nâng tầm diện mạo của bạn theo đúng nghĩa đen. Gamma Force đang tạo nên di sản của riêng mình: phong cách cung đình có thể đeo cả ngày, dù bạn đi đâu.

            Màu sắc hiển thị: Trắng/Xám khói nhạt/Trắng đỉnh/Malachite
            Phong cách: DX9176-106',
            'productDiscount' => 10,
        ]);

        DB::table('products')->insert([
            'productTmName' => 'Nike',
            'styleId' => 2,
            'productName' => 'Air Jordan XXXVIII FIBA',
            'productImage' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/889ef13a-6c68-406c-badd-713ccddc74f7/air-jordan-xxxviii-older-shoes-69P5Hc.png',
            'productStatus' => true,
            'productPrice' => 3959000,
            'productQuantity' => 233,
            'productSoldQt' => 454,
            'productInfor' => 'Court mobility

            You want quicker cuts, speedier sprints and all-over court control. The low-to-the-court Zoom Air Strobel unit helps you get there.
            
            
            Strength + security
            
            The embroidery in the upper is designed to help you feel extra secure while criss-crossing the court. Your skills, plus supportive, lightweight mesh? A winning combo.',
            'productIntro' => 'Khi nói đến môn thể thao vòng, Jordan Brand đã tạo được danh tiếng toàn cầu với tư cách là nhà sáng tạo và cộng tác viên. AJ XXXVIII này vinh danh Liên đoàn Bóng rổ Quốc tế—cơ quan quản lý bóng rổ trên toàn thế giới. Giống như ánh sáng trắng chứa mọi màu sắc có thể, lớp ngoài nổi bật che giấu phần đế được trang trí bằng tất cả các màu sắc của logo FIBA ​​​​sống động. Sự táo bạo, từ trong ra ngoài.',
            'productDiscount' => 10,
        ]);
        //---------------------------PUMA-----------------------------------------------
        DB::table('products')->insert([
            'productTmName' => 'Puma',
            'styleId' => 1,
            'productName' => 'sneakers unisex Sportstyle RS X Reinvention',
            'productImage' => 'https://product.hstatic.net/1000284478/product/20_369579_2_8ca2e4a5571840339598aeab8467a89d_large.jpg',
            'productStatus' => true,
            'productPrice' => 3499000,
            'productQuantity' => 233,
            'productSoldQt' => 434,
            'productInfor' => 'Đôi giày sneakers Sportstyle RS X Reinvention nằm trong bộ sưu tập giày RS của Puma, được mệnh danh là "huyền thoại của thế kỷ 80 đã trở lại và hoàn thiện hơn bao giờ hết". Những thiết kế này đều được lấy cảm hứng từ thập kỷ 80, mang đậm vẻ cổ điển để tôn vinh phiên bản gốc nhưng được cải tiến với một lớp đế giữa siêu nhẹ nhằm nâng cấp sự êm ái, cũng như đem đến cho bạn cảm giác tự tin và thoải mái trên mọi địa hình.',
            'productIntro' => 'Thương hiệu: Puma
            Xuất xứ: Đức
            Giới tính: Unisex
            Kiểu dáng: Giày sneakers cổ thấp
            Màu sắc: White/Pink,...
            Chất liệu: Vải dệt kim, Da
            Đế: Cao su
            Thiết kế:
            
            Phom ôm chân, dễ dàng di chuyển
            Công nghệ RS thập niên 80
            Đế cao su có rãnh chống trượt trượt giúp tăng độ bám
            Lớp lót siêu nhẹ, siêu êm và đàn hồi tốt
            Màu sắc trẻ trung, hiện đại dễ dàng phối với nhiều trang phục và phụ kiện',
            'productDiscount' => 12,
        ]);

        //
        DB::table('products')->insert([
            'productTmName' => 'Puma',
            'styleId' => 1,
            'productName' => 'unisex MB.03 Toxic Basketball',
            'productImage' => 'https://product.hstatic.net/1000284478/product/01_378916_2_1824d1f55ea2416c8945199c3d4a1fa2_large.jpg',
            'productStatus' => true,
            'productPrice' => 4199000,
            'productQuantity' => 586,
            'productSoldQt' => 343,
            'productInfor' => 'Giày bóng rổ MB.03 Toxic Basketball chắc chắn sẽ là trợ thủ đắc lực giúp bạn chinh phục mọi cuộc chơi. Với thiết kế độc đáo và đầy phá cách cùng phần lót đệm đàn hồi, tất cả đã tạo nên một tổng thể đặc sắc không chỉ giúp bạn trở nên linh động, nhanh nhẹn hơn, mà còn thay bạn dễ dàng ghi lại những dấu ấn mạnh mẽ mỗi khi ở trên sân đấu.',
            'productIntro' => 'Thương hiệu: Puma
            Xuất xứ: Đức
            Giới tính: Unisex
            Kiểu dáng: Giày bóng rổ
            Màu sắc: Purple/Green
            Chất liệu: 70.66% Textile, 29.34% Synthetic
            Lớp lót: 100% Textile
            Đế giữa: 100% Synthetic
            Đế ngoài: 98.30% Rubber, 1.70% Synthetic',
            'productDiscount' => 12,
        ]);
        //
        DB::table('products')->insert([
            'productTmName' => 'Puma',
            'styleId' => 2,
            'productName' => 'sneakers nữ cổ thấp RS X Efekt Lux',
            'productImage' => 'https://product.hstatic.net/1000284478/product/01_393771_2_ca522ee645eb4ea089df0a9a334acf94_large.jpg',
            'productStatus' => true,
            'productPrice' => 3799000,
            'productQuantity' => 343,
            'productSoldQt' => 233,
            'productInfor' => 'Đôi giày sneakers RS X Efekt Lux thuộc dòng giày RS-X đã từng tạo nên cơn sóng trong làng thời trang thể thao, giờ đây đã quay trở lại với thiết kế độc đáo hơn chỉ dành riêng cho phái nữ. Với sự kết hợp của nhiều chất liệu vải cao cấp tạo nên độ hoàn thiện êm ái và thoải mái tối đa, RS X Efekt Lux sẽ đem lại cho bạn một trải nghiệm đáng kinh ngạc.',
            'productIntro' => 'Thương hiệu: Puma
            Xuất xứ: Đức
            Giới tính: Nữ
            Kiểu dáng: Giày sneakers cổ thấp
            Màu sắc: Pink/White
            Chất liệu: 72.60% Leather - cow, 15.90% Textile, 11.50% Synthetic
            Lớp lót: 100% Textile
            Đế: Cao su
            Thiết kế:
            
            Phom ôm chân, dễ dàng di chuyển
            Đế giữa RS thoải mái và đế ngoài cao su có độ bám tốt
            Màu sắc trẻ trung, hiện đại dễ dàng phối với nhiều trang phục và phụ kiện',
            'productDiscount' => 12,
        ]);
        //
        DB::table('products')->insert([
            'productTmName' => 'Puma',
            'styleId' => 3,
            'productName' => 'sneakers unisex cổ thấp RS X Games',
            'productImage' => 'https://product.hstatic.net/1000284478/product/02_393161_2_d18107fb5d1042429065e6c70c9f7502_large.jpg',
            'productStatus' => true,
            'productPrice' => 3499000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Đôi giày sneakers RS X Efekt Lux thuộc dòng giày RS-X đã từng tạo nên cơn sóng trong làng thời trang thể thao, giờ đây đã quay trở lại với thiết kế độc đáo hơn chỉ dành riêng cho phái nữ. Với sự kết hợp của nhiều chất liệu vải cao cấp tạo nên độ hoàn thiện êm ái và thoải mái tối đa, RS X Efekt Lux sẽ đem lại cho bạn một trải nghiệm đáng kinh ngạc.',
            'productIntro' => 'Thương hiệu: Puma
            Xuất xứ: Đức
            Giới tính: Unisex
            Kiểu dáng: Giày sneakers cổ thấp
            Màu sắc: White/Black
            Chất liệu: 49% Synthetic, 44% Textile, 7% Rubber
            Lớp lót: 100% Textile
            Đế: Cao su
            Thiết kế:
            
            Phom ôm chân, dễ dàng di chuyển
            Công nghệ RS đệm thoải mái
            Đế cao su có rãnh chống trượt trượt giúp tăng độ bám
            Màu sắc trẻ trung, hiện đại dễ dàng phối với nhiều trang phục và phụ kiện',
            'productDiscount' => 12,
        ]);
        //
        DB::table('products')->insert([
            'productTmName' => 'Puma',
            'styleId' => 3,
            'productName' => 'sneakers nam cổ thấp Softride Enzo NXT',
            'productImage' => 'https://product.hstatic.net/1000284478/product/20_195234_2_3eadeabd10394232922cc729660b4c56_large.jpg',
            'productStatus' => true,
            'productPrice' => 2199000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Đôi giày sneakers RS X Efekt Lux thuộc dòng giày RS-X đã từng tạo nên cơn sóng trong làng thời trang thể thao, giờ đây đã quay trở lại với thiết kế độc đáo hơn chỉ dành riêng cho phái nữ. Với sự kết hợp của nhiều chất liệu vải cao cấp tạo nên độ hoàn thiện êm ái và thoải mái tối đa, RS X Efekt Lux sẽ đem lại cho bạn một trải nghiệm đáng kinh ngạc.',
            'productIntro' => 'Thương hiệu: Puma
            Xuất xứ: Đức
            Giới tính: Unisex
            Kiểu dáng: Giày sneakers cổ thấp
            Màu sắc: White/Black
            Chất liệu: 49% Synthetic, 44% Textile, 7% Rubber
            Lớp lót: 100% Textile
            Đế: Cao su
            Thiết kế:
            
            Phom ôm chân, dễ dàng di chuyển
            Công nghệ RS đệm thoải mái
            Đế cao su có rãnh chống trượt trượt giúp tăng độ bám
            Màu sắc trẻ trung, hiện đại dễ dàng phối với nhiều trang phục và phụ kiện',
            'productDiscount' => 12,
        ]);
        //id 11

        DB::table('products')->insert([
            'productTmName' => 'Vans',
            'styleId' => 3,
            'productName' => 'Giày Vans Sk8-Hi Tapered Vans X Disney',
            'productImage' => 'https://product.hstatic.net/200000265619/product/vn0009qpdnm__2_faa5f3ab988641739e731e9658e94c04_medium.jpg',
            'productStatus' => true,
            'productPrice' => 1890000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Cùng bước vào Thế giới Disney qua lăng kinh Off The Wall, item Disney X Vans Old Skool làm gợi lại các bộ phim hoạt hình của nhà Disney qua các nhân vật hoạt hình theo phong cách hoài niệm. Disney x Vans Sk8-Hi làm nổi bật dàn nhân vật phản diện Disney lôi cuốn nhưng thường bị hiểu lầm. Từ Ursula và Cruella đến Jafar và Hades, đôi giày cao cổ kỳ lạ này giúp tôn vinh độ nhận diện vượt thời gian của Disney.',
            'productIntro' => 'Suốt 100 năm qua, Disney vẫn đã và đang tiếp tục kể những câu chuyện để truyền cảm hứng cho những người sáng tạo. Từ thế hệ này sang thế hệ khác, nó đã có sức ảnh hưởng đến văn hóa đại chúng và đã gắn kết chúng ta với nhau. Đến năm nay, Vans tự hào kỷ niệm những câu chuyện và những nhân vật Disney đã được lọt vào mắt xanh của khán giả trên toàn Thế giới suốt một thế kỷ qua trong BST Disney X Vans này.',
            'productDiscount' => 12,
        ]);
        //id 12
        DB::table('products')->insert([
            'productTmName' => 'Vans',
            'styleId' => 3,
            'productName' => 'Giày Vans Sk8-Hi Vans X Disney',
            'productImage' => 'https://product.hstatic.net/200000265619/product/vn0009qpdnm__2_faa5f3ab988641739e731e9658e94c04_medium.jpg',
            'productStatus' => true,
            'productPrice' => 2070000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Cùng bước vào Thế giới Disney qua lăng kinh Off The Wall, item Disney X Vans Old Skool làm gợi lại các bộ phim hoạt hình của nhà Disney qua các nhân vật hoạt hình theo phong cách hoài niệm. Disney x Vans Sk8-Hi làm nổi bật dàn nhân vật phản diện Disney lôi cuốn nhưng thường bị hiểu lầm. Từ Ursula và Cruella đến Jafar và Hades, đôi giày cao cổ kỳ lạ này giúp tôn vinh độ nhận diện vượt thời gian của Disney.',
            'productIntro' => 'Suốt 100 năm qua, Disney vẫn đã và đang tiếp tục kể những câu chuyện để truyền cảm hứng cho những người sáng tạo. Từ thế hệ này sang thế hệ khác, nó đã có sức ảnh hưởng đến văn hóa đại chúng và đã gắn kết chúng ta với nhau. Đến năm nay, Vans tự hào kỷ niệm những câu chuyện và những nhân vật Disney đã được lọt vào mắt xanh của khán giả trên toàn Thế giới suốt một thế kỷ qua trong BST Disney X Vans này.',
            'productDiscount' => 12,
        ]);
        //id 13
        DB::table('products')->insert([
            'productTmName' => 'Vans',
            'styleId' => 3,
            'productName' => 'Giày Vans Authentic Vans X Disney',
            'productImage' => 'https://product.hstatic.net/200000265619/product/vn0009pvbim__web_1_6ab3ec795d5c47f898892099ea59efde_medium.jpg',
            'productStatus' => true,
            'productPrice' => 2025000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Cùng bước vào Thế giới Disney qua lăng kinh Off The Wall, item Disney X Vans Old Skool làm gợi lại các bộ phim hoạt hình của nhà Disney qua các nhân vật hoạt hình theo phong cách hoài niệm. Disney x Vans Sk8-Hi làm nổi bật dàn nhân vật phản diện Disney lôi cuốn nhưng thường bị hiểu lầm. Từ Ursula và Cruella đến Jafar và Hades, đôi giày cao cổ kỳ lạ này giúp tôn vinh độ nhận diện vượt thời gian của Disney.',
            'productIntro' => 'Suốt 100 năm qua, Disney vẫn đã và đang tiếp tục kể những câu chuyện để truyền cảm hứng cho những người sáng tạo. Từ thế hệ này sang thế hệ khác, nó đã có sức ảnh hưởng đến văn hóa đại chúng và đã gắn kết chúng ta với nhau. Đến năm nay, Vans tự hào kỷ niệm những câu chuyện và những nhân vật Disney đã được lọt vào mắt xanh của khán giả trên toàn Thế giới suốt một thế kỷ qua trong BST Disney X Vans này.',
            'productDiscount' => 12,
        ]);
        //id 14
        DB::table('products')->insert([
            'productTmName' => 'Vans',
            'styleId' => 3,
            'productName' => 'Giày Vans Knu Skool Knu Franchise',
            'productImage' => 'https://product.hstatic.net/200000265619/product/vn0009qcbgj_-web-1_58f6f62cfd604778bbacc07d1ccad322_medium.jpg',
            'productStatus' => true,
            'productPrice' => 2160000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Cùng bước vào Thế giới Disney qua lăng kinh Off The Wall, item Disney X Vans Old Skool làm gợi lại các bộ phim hoạt hình của nhà Disney qua các nhân vật hoạt hình theo phong cách hoài niệm. Disney x Vans Sk8-Hi làm nổi bật dàn nhân vật phản diện Disney lôi cuốn nhưng thường bị hiểu lầm. Từ Ursula và Cruella đến Jafar và Hades, đôi giày cao cổ kỳ lạ này giúp tôn vinh độ nhận diện vượt thời gian của Disney.',
            'productIntro' => 'Suốt 100 năm qua, Disney vẫn đã và đang tiếp tục kể những câu chuyện để truyền cảm hứng cho những người sáng tạo. Từ thế hệ này sang thế hệ khác, nó đã có sức ảnh hưởng đến văn hóa đại chúng và đã gắn kết chúng ta với nhau. Đến năm nay, Vans tự hào kỷ niệm những câu chuyện và những nhân vật Disney đã được lọt vào mắt xanh của khán giả trên toàn Thế giới suốt một thế kỷ qua trong BST Disney X Vans này.',
            'productDiscount' => 12,
        ]);
        //id 15
        DB::table('products')->insert([
            'productTmName' => 'Vans',
            'styleId' => 3,
            'productName' => 'Giày Vans Old Skool Ballistic',
            'productImage' => 'https://product.hstatic.net/200000265619/product/vn0007nt9dk__web_1_a95d1e4e927d402a81d6299c84b4427a_medium.jpg',
            'productStatus' => true,
            'productPrice' => 2070000,
            'productQuantity' => 559,
            'productSoldQt' => 123,
            'productInfor' => 'Cùng bước vào Thế giới Disney qua lăng kinh Off The Wall, item Disney X Vans Old Skool làm gợi lại các bộ phim hoạt hình của nhà Disney qua các nhân vật hoạt hình theo phong cách hoài niệm. Disney x Vans Sk8-Hi làm nổi bật dàn nhân vật phản diện Disney lôi cuốn nhưng thường bị hiểu lầm. Từ Ursula và Cruella đến Jafar và Hades, đôi giày cao cổ kỳ lạ này giúp tôn vinh độ nhận diện vượt thời gian của Disney.',
            'productIntro' => 'Suốt 100 năm qua, Disney vẫn đã và đang tiếp tục kể những câu chuyện để truyền cảm hứng cho những người sáng tạo. Từ thế hệ này sang thế hệ khác, nó đã có sức ảnh hưởng đến văn hóa đại chúng và đã gắn kết chúng ta với nhau. Đến năm nay, Vans tự hào kỷ niệm những câu chuyện và những nhân vật Disney đã được lọt vào mắt xanh của khán giả trên toàn Thế giới suốt một thế kỷ qua trong BST Disney X Vans này.',
            'productDiscount' => 12,
        ]);
    }
}
