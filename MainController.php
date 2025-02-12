<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\InformationForCards;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('home');
    }


    public function weapon_check(Request $request)
    {
        $review = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        //$review->email = $request->input("email");
        //$review->subject = $request->input("subject");
        //$review->message = $request->input("message");
        Contact::create($review);
        //$review->save();

        return redirect('/about');
    }

    public function shop(Request $request)
    {
        //foreach ($posts as $post) {
        //dump($post -> title);
        //}
        //protected $table = 'здесь указывается название таблицы';
        //dd($post);


        return view('page_with_weapon');

    }

    public function create_magazine()
    {
        $weapon_array = [
            [
                'description' => '«Глок» — семейство пистолетов, разработанных фирмой «Glock» для нужд Вооружённых сил Австрии. Глок был первым образцом вооружения, разработанным этой фирмой. Получившийся в результате образец оказался довольно удачным и удобным для применения, благодаря чему позднее он был принят на вооружение Вооружённых сил Австрии под обозначением Р80. Позже пистолеты фирмы «Глок» приобрели широкую известность благодаря своим боевым качествам и распространённости в качестве оружия героев различных голливудских фильмов. Оружие данной модели получило широкое распространение по всему миру. Сейчас существует много различных вариантов этого пистолета, которые рассчитаны под разные патроны (9×19 мм Парабеллум, .40 S&W, 10 мм auto, .357 SIG, .45ACP и др.). Особенностью конструкции пистолета является отсутствие флажка предохранителя и курка. Пистолет большей частью сделан из высокопрочного термостойкого — до 200 °C — пластика. Благодаря этому Glock 17 лёгок и чрезвычайно прочен. Принцип действия — «выхватил и стреляй», привычного предохранителя нет, 2 предохранителя находятся внутри, один на спусковом крючке в виде кнопки, выстрел не произойдёт без полного нажатия спускового крючка «безопасного действия». Состоит из 33 частей и неполная разборка происходит за секунды.',
                'price' => 5430,
                'name' => 'Глок 17',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Favatars.dzeninfra.ru%2Fget-zen_doc%2F1947084%2Fpub_5e0dbc5686c4a900b11bbaba_5e0dbccb6f5f6f00ae027d4c%2Fscale_1200&f=1&nofb=1&ipt=0113667e9d46cf5a4e6db3e4734028d7913927407bead4823384d52e33300530&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«Берета 92» — пистолет, разработанный и производимый итальянской фирмой «Beretta». Это оружие стало культовым, будучи широко используемым в различных спецподразделениях, а также знаменитым благодаря фильму «Чисто английское убийство». Пистолет может использовать патроны 9×19 мм Парабеллум. Берета 92 известна своей надёжностью и точностью, она использовалась вооружёнными силами разных стран. Его конструкция предполагает наличие открытого затвора, а также систему двойного действия (DA/SA), что делает его более универсальным.',
                'price' => 4500,
                'name' => 'Берета 92',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcomplaneta.ru%2Fwp-content%2Fuploads%2F2022%2F09%2F4a83f1236a347ab2ba389af82cfafe40.jpg&f=1&nofb=1&ipt=ec5d4137495f576394048c57c65c5a21fdcd09171b4085f96c0ddff3fc9505b3&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«М1911» — пистолет, созданный Джоном Браунингом для армейских нужд США. Он является одним из самых известных и долговечных пистолетов в истории, использовавшимся как вооружение в различных военных и полицейских подразделениях. Пистолет функционирует на патроне .45 ACP и был принят на вооружение в 1911 году. Его конструкция отличается массивной рукояткой и мощным боевым патроном. Пистолет также обладает улучшенной системой безопасности, включая запирательный механизм на спусковом крючке.',
                'price' => 5600,
                'name' => 'М1911',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.redd.it%2Fpf96wumoj5d41.jpg&f=1&nofb=1&ipt=8feaf9dd46c64f2fdb97f5773cf26d6675d387f405f044e82c08b11030ac64a7&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«Смит и Вессон M&P Shield» — современный компактный пистолет, предназначенный для скрытого ношения. Этот пистолет отличается лёгким и компактным дизайном, что делает его удобным для использования в качестве оружия самообороны. Он работает на патронах 9×19 мм Парабеллум, и имеет простую в использовании систему одинарного действия (SA). M&P Shield обладает хорошей точностью и надёжностью при стрельбе.',
                'price' => 4200,
                'name' => 'Смит и Вессон M&P Shield',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fadelbridge.com%2Fwp-content%2Fuploads%2F2023%2F04%2FJPR1374-scaled.jpg&f=1&nofb=1&ipt=9322bc71530295ad66c183ac346b73dc7f73f07f41f59daeb36f8f428981c1fc&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«Рuger SR1911» — это современная версия знаменитого пистолета 1911, улучшенная для комфортного использования в наше время. Известен своей исключительной точностью и долговечностью. Пистолет выполнен из нержавеющей стали и используется для охоты, а также в спортивной стрельбе. Использует патроны .45 ACP, что даёт ему отличную мощность и огневую мощь.',
                'price' => 6500,
                'name' => 'Рuger SR1911',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fadelbridge.com%2Fwp-content%2Fuploads%2F2019%2F08%2Fruger-SR1911-scaled.jpg&f=1&nofb=1&ipt=7f8ea154b59a203a60fc48e4f0395943c9f774e5592ff7869eb715106d89df0a&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«Кольт 1911» — классический пистолет, который служил основным оружием армии США на протяжении многих лет. Это оружие получило признание благодаря своей надёжности и точности, что делает его популярным среди военных и гражданских пользователей. Известен своей солидной конструкцией и долговечностью, а также превосходной эргономикой.',
                'price' => 5400,
                'name' => 'Кольт 1911',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.armurerie-maison-blanche.com%2Fimages%2FImage%2FPistolet-COLT-1911-Competition-serie-cal-45-ACP.jpg&f=1&nofb=1&ipt=157f619ecb4756a9f8a6f6de40ea8421c6b449efbcf7df6e582e7b7f29282245&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => '«Сиг-Сауэр P226» — это немецкий пистолет, известный своей надежностью и высокой точностью. Он широко используется в правоохранительных органах и армии многих стран. Его конструкция включает металлический корпус, улучшенную систему предохранителей и систему двойного действия, что делает его удобным и безопасным в эксплуатации.',
                'price' => 7500,
                'name' => 'Сиг Сагуэр Р226',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fd%2Fd8%2FPistole_SIG_Sauer_P226_S.jpg&f=1&nofb=1&ipt=23d69e36565491a06ba6215524b343fcc417889990ae8357f57a5a77e38fb837&ipo=images',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'description' => '«Хеклер и Кох USP» — пистолет, который является одной из самых успешных моделей в линейке компании H&K. Он используется в различных правоохранительных органах по всему миру. Пистолет отличается продвинутой системой безопасности и высокой точностью. USP предлагает модели, которые могут использовать разные патроны, включая .40 S&W и 9×19 мм Парабеллум.',
                'price' => 8000,
                'name' => 'Хеклер и Кох USP',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fc.wallhere.com%2Fphotos%2F26%2Fc4%2F2560x1440_px_gun_Heckler_And_Koch_Heckler_and_Koch_USP_pistol-1226929.jpg!d&f=1&nofb=1&ipt=181fa7e43b1d08064bdedb8fc4d930101de96fd6a37685ba1e405270e97bda6e&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'description' => 'Револьвер принадлежал легенде американского Дикого Запада шерифу Тумстоуна Уайетту Эрпу. Помимо работы в полиции у Эрпа было еще несколько занятий: он подрабатывал вышибалой, боксерским рефери, владел борделем, салуном и парикмахерской. Будучи служителем закона, он участвовал в одной из самых печально известных и часто экранизированных перестрелок всех времен и народов — перестрелке у кораля «О’кей». Кольт 45-го калибра — то самое оружие, которым Эрп одолел соперников.',
                'price' => 2250000,
                'name' => 'Кольт 45-го калибра',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.komupodarki.ru%2Fpictures%2Fproduct%2Fbig%2F369718_big.png&f=1&nofb=1&ipt=c86bb7a02e5a5152efc312952667b1e8a03ab0b1cbefbf6a8125619a202f4b09&ipo=images',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        InformationForCards::insert($weapon_array);


    }

    public function delete_comments() {
        $post = Contact::all();
        foreach ($post as $comment) {
            $comment->delete();
        }
    }

    public function update()
    {
        $post = InformationForCards::find(1);
        $post->update([
            'description' => 'временно отсутствует',
            'price' => 0
        ]);
        dd('обновлено');
    }

    public function delete()
    {
        $table = InformationForCards::all();
        foreach ($table as $item) {
            $item->delete();

        }
    }


    public function returner_json()
    {
        $post = InformationForCards::all();
        $json = json_encode($post, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return view('page_with_weapon', ['json' => $json]);
    }

    public function  return_json_comments()
    {
        $post = Contact::all();
        return view('weapons', ['comments' => $post]);
    }


    public function return_json_for_shop() {
            $post = InformationForCards::all();
            return response()->json($post, 200, [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public function return_json_for_comments() {
        $post = Contact::all();
        return (response()->json($post, 200, [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    public function logic_for_buying() {
        $money = 0;
        $post = InformationForCards::all();
        foreach ($post as $item) {
            $money += $item->price;
        }
    }
}

