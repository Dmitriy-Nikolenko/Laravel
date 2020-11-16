<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//
//    public $news = [
//        1 => [
//            'id' => 1,
//            'title' => 'Минздрав потребовал от врачей согласовывать публичные комментарии о COVID-19',
//            'preview' => 'Министерство здравоохранения РФ разослало подведомственным врачам и медицинским учреждениям указание согласовывать публичные комментарии о коронавирусе COVID-19, пишет «Медуза». ',
//            'text' => 'Министерство здравоохранения РФ разослало подведомственным врачам и медицинским учреждениям указание согласовывать публичные комментарии о коронавирусе COVID-19, пишет «Медуза». Подлинность распоряжения изданию подтвердили в пресс-службе Минздрава.
//                Комментарии и публичные сведения врачам надо согласовывать с пресс-службой Минздрава по электронной почте или по телефону. В ведомстве пояснили, что информационная повестка вокруг коронавируса перегружена — появляются малополезные факты, предположения и прогнозы. «Было принято решение обратить внимание внештатных специалистов и подведомственных учреждений министерства на необходимость координации работы со средствами массовой информации»,— приводит издание комментарий министерства.',
//            'photo' => 'https://cdn.pixabay.com/photo/2016/11/23/15/03/close-up-1853400_960_720.jpg',
//            'categoryId' => 1
//
//        ],
//        2 => [
//            'id' => 2,
//            'title' => 'Врачи обвинили девочку с редкой формой рака крови в симуляции симптомов.',
//            'preview' => 'Врачи восемь раз отправляли домой девочку с редкой формой рака крови из района английского Ноттингема Бичдейл, графство Ноттингемшир, и обвиняли ребенка в том, что он симулирует симптомы. Об этом сообщает The Mirror.',
//            'text' => 'Врачи сделали девочке рентген и взяли анализы крови, но не выявили никаких отклонений. Они предположили, что у Элизабет может быть переходный синовит бедра, который часто встречается у детей после болезни. Эмма знала, что ее дочь не болела, и начала беспокоиться, что у ребенка может быть ранний артрит, так как сама страдает от этого заболевания.
//                            Примерно через шесть недель девочка снова проснулась с криками боли. На этот раз у нее болела левая нога. Врач осмотрел ребенка и сказал, что причиной боли может быть болезнь роста. После этого он отправил мать и ребенка домой. Аналогичная ситуация повторялась в течение многих недель.',
//            'photo' => 'https://cdn.pixabay.com/photo/2020/06/26/14/38/doctor-5342890_960_720.jpg',
//            'categoryId' => 1
//        ],
//        3 => [
//            'id' => 3,
//            'title' => 'Онкологи снова будут выезжать в сельские районы Астраханской области',
//            'preview' => 'В Астраханской области возобновили «Дни онколога». Каждую среду специалисты областного онкологического диспансера будут выезжать в сельские районы области.',
//            'text' => 'В среду, 28 октября, гинеколог-онколог, общий онколог, врач-методист примут жителей Володарского района. Бригада специалистов будет работать на базе районной больницы,.
//                           «Преимущественно планируется осмотреть пациентов с целью отбора на лечение в онкодиспансер. Поскольку в сегодняшних непростых условиях не все сельские жители могут приехать на консультацию в областной центр»,
//                           — сказал министр здравоохранения Астраханской области Алексей Спирин.',
//            'photo' => 'https://cdn.pixabay.com/photo/2014/12/10/20/48/medic-563423_960_720.jpg',
//            'categoryId' => 1
//        ],
//        4 => [
//            'id' => 4,
//            'title' => 'Академик Лядов рассказал о реабилитации после рака',
//            'preview' => 'В ХХI веке рак все чаще называют хроническим заболеванием: при многих видах онкологии уже придуманы различные методики, не только улучшающие прогноз пациентов, но и дающие надежду на выздоровление.',
//            'text' => 'В ХХI веке рак все чаще называют хроническим заболеванием: при многих видах онкологии уже придуманы различные методики, не только улучшающие прогноз пациентов, но и дающие надежду на выздоровление. Поэтому проблема реабилитации пациентов после онкологических заболеваний все чаще обсуждается в мире. В России это направление медицины только начинает развиваться. О том, что такое онкореабилитация, кому она нужна и как изменились представления о том, что можно пациентам после рака, а чего нельзя, в эксклюзивном интервью «МК» рассказал известный хирург и реабилитолог, академик РАН Константин Викторович ЛЯДОВ.',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/02/01/13/52/analysis-2030261_960_720.jpg',
//            'categoryId' => 1
//        ],
//
//        5 => [
//            'id' => 5,
//            'title' => 'Милан» может подписать нападающего «Реала',
//            'preview' => 'Форвард «Реала» Брахим Диас может стать игроком «Милана» на полноценной основе.',
//            'text' => 'Форвард «Реала» Брахим Диас может стать игроком «Милана» на полноценной основе, сообщает Calcio Mercato.
//                           По данным источника, 21-летний испанец, который сейчас пребывает в аренде в «Милане», по окончании годичной аренды может подписать с клубом полноценный контракт.
//                           В нынешнем сезоне серии А Диас провел 3 матча и забил 1 мяч.',
//            'photo' => 'https://cdn.pixabay.com/photo/2015/03/14/18/34/soccer-673599_960_720.jpg',
//            'categoryId' => 2
//        ],
//        6 => [
//            'id' => 6,
//            'title' => 'Сефери поделился ожиданиями от боя с Гассиевым',
//            'preview' => ' Албанский боксер Нури Сефери заявил, что приложит все усилия для победы в поединке с россиянином Муратом Гассиевым.',
//            'text' => 'Албанский боксер Нури Сефери заявил, что приложит все усилия для победы в поединке с россиянином Муратом Гассиевым.
//                            Экс-чемпион WBA и IBF в первом тяжелом весе Гассиев в субботу дебютирует в тяжелом весе в бою против албанца Нури Сефери. У россиянина трижды менялся соперник перед этим поединком: боксер мог встретиться с американцем Кевином Джонсоном и другим албанцем Сефером Сефери.',
//            'photo' => 'https://cdn.pixabay.com/photo/2012/10/25/23/32/boxing-62867_960_720.jpg',
//            'categoryId' => 2
//        ],
//        7 => [
//            'id' => 7,
//            'title' => 'В КХЛ троллят НХЛ за плагиат',
//            'preview' => '«Салават Юлаев» пошутил над «Даллас Старз». Речь идёт об «украденной» форме.',
//            'text' => 'Форма – лицо любой спортивной команды, в том числе хоккейной. Помните знаменитую пословицу «Встречают по одёжке, а провожают по уму»? Первая её часть косвенно связана с причинами разгорающегося спора между некоторыми командами КХЛ и НХЛ. Каждый клуб заинтересован в том, чтобы хоккеисты не только здорово играли, но и красиво выглядели. Учитывая, что на каждом матче работают фотографы, а встречи показывают по телевидению.',
//            'photo' => 'https://cdn.pixabay.com/photo/2013/04/05/14/12/hockey-100729_960_720.jpg',
//            'categoryId' => 2
//        ],
//        8 => [
//            'id' => 8,
//            'title' => '«Было волнительно, аж потряхивало»',
//            'preview' => 'Трусова, Щербакова и Косторная показали новые программы. Кто из них станет лидером сборной России?',
//            'text' => '12 и 13 сентября в Москве прошли контрольные прокаты сборной России по фигурному катанию,
//                где спортсмены впервые показали программы на новый сезон. Самый большой ажиотаж традиционно вызвали выступления девушек-одиночниц.
//                В какой форме Анна Щербакова, последняя взрослая фигуристка группы Этери Тутберидзе?
//                Что изменилось в катании Александры Трусовой и Алены Косторной, перешедших в академию Евгения Плющенко?
//                Сколько четверных прыжков выучила Елизавета Туктамышева? «Лента.ру» — о сюрпризах, которые преподнесла болельщикам сборная России,
//                вероятных фаворитах сезона и трудностях первых серьезных выступлений после карантина.',
//            'photo' => 'https://cdn.pixabay.com/photo/2019/10/06/02/53/figure-skating-4529180_960_720.jpg',
//            'categoryId' => 2
//        ],
//        9 => [
//            'id' => 9,
//            'title' => 'Перспективы интеграции России и Белоруссии',
//            'preview' => 'Вопросы интеграции России и Белоруссии будут приниматься только на обоюдной основе, заявил в ходе выступления на форуме "Россия зовет!"
//                              президент России Владимир Путин.',
//            'text' => 'Вопросы интеграции России и Белоруссии будут приниматься только на обоюдной основе, заявил в ходе выступления на форуме "Россия зовет!" президент России Владимир Путин.
//                           "Без всякого сомнения, это должно быть сделано, если будет что-то делаться, исключительно на добровольной основе с нашей и
//                           со стороны наших белорусских друзей и партнеров, исходя их того, как обе стороны оценивают свои национальные интересы в той
//                           или другой сфере, в сфере политики или в сфере экономики", - сказал он.',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/10/13/11/49/putin-2847423_960_720.jpg',
//            'categoryId' => 3
//        ],
//        10 => [
//            'id' => 10,
//            'title' => 'Эрдоган и Алиев созвонились и обсудили ситуацию в Карабахе',
//            'preview' => 'Президенты Турции и Азербайджана Тайип Эрдоган и Ильхам Алиев обсудили по телефону происходящее в Нагорном Карабахе',
//            'text' => 'Разговор глав государств начался с того, что Алиев поздравил Эрдогана с Днем Республики.
//                            После этого политики стали обсуждать ситуацию в Нагорном Карабахе и другие региональные проблемы.
//                            «Эрдоган вновь заявил о полной поддержке Азербайджана», — сообщила администрация Эрдогана. Подробности беседы Алиева и Эрдогана не раскрываются.',
//            'photo' => 'https://cdn.pixabay.com/photo/2019/01/29/11/20/handshake-3962172_960_720.jpg',
//            'categoryId' => 3
//        ],
//        11 => [
//            'id' => 11,
//            'title' => 'Выборы в США как война на поражение.',
//            'preview' => 'Американская предвыборная гонка вышла на финальную стадию, при этом, судя
//                                по заявлениям, волнам компромата и прочим массовым акциям, и интригам',
//            'text' => 'Американская предвыборная гонка вышла на финальную стадию, при этом, судя по заявлениям,
//                            волнам компромата и прочим массовым акциям, и интригам, нынешняя президентская кампания в
//                            Штатах больше напоминает войну. При этом войну не только на поле агитации и пропаганды, но и в сфере важнейших кадровых решений
//                            администрации нынешнего президента США, Дональда Трампа. И одно из таких решений, все же, реализованное, американские
//                            демократы могут смело записывать себе в качестве большой, если не ключевой победы.
//                            Речь идет о назначении в Верховный Суд США Эми Кони Барретт.
//                            Поскольку в стане демократов это назначение, да еще и проведенное до президентских выборов вызвало настоящую истерику.',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/09/01/13/30/trump-2704264_960_720.jpg',
//            'categoryId' => 3
//        ],
//        12 => [
//            'id' => 12,
//            'title' => 'В Кремле не назвали дату визита Путина в Сербию.',
//            'preview' => 'Дата визита президента России Владимира Путина в Сербию окончательно еще не определена, в ноябре этой поездки не будет.
//                Об этом в среду, 28 октября, сообщил пресс-секретарь главы российского государства Дмитрий Песков.',
//            'text' => '«Окончательная дата не была еще определена. В ноябре не будет», — сказал Песков «Интерфаксу».
//                            15 июня Путин провел телефонный разговор с президентом Сербии Александром Вучичем по поводу
//                            поездки российского лидера в Белград на церемонию освящения храма святого Саввы, которая, предположительно,
//                            должна состояться осенью 2020 года. В ходе разговора Путин также подчеркнул готовность
//                            России защищать интересы Сербской православной церкви.',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/07/22/15/48/flag-2529076_960_720.jpg',
//            'categoryId' => 3
//        ],
//
//        13 => [
//            'id' => 13,
//            'title' => 'Мужчина с ножом напал на полицейских в Авиньоне',
//            'preview' => 'Еще один мужчина с ножом, выкрикивая исламские лозунги, напал на правоохранителей
//                              во французском Авиньоне. При задержании он был убит, сообщают французские СМИ.',
//            'text' => 'Еще один мужчина с ножом, выкрикивая исламские лозунги, напал на правоохранителей во французском Авиньоне.
//                            При задержании он был убит, сообщают французские СМИ.
//                            Напомним, это уже не первое нападение во Франции за сутки.
//                            Так, в Ницце во время нападения погибли три человека, как минимум одна из жертв была обезглавлена.
//                            Инцидент произошел возле церкви.
//                            Подозреваемый был задержан в течение 10 минут после нападения,
//                            однако никакой информации о нем - ни имени, ни национальности, ни возраста - пока нет.',
//            'photo' => 'https://cdn.pixabay.com/photo/2019/05/18/19/37/france-4212403_960_720.jpg',
//            'categoryId' => 4
//        ],
//        14 => [
//            'id' => 14,
//            'title' => 'В Тамбовской области мужчина поджег дом',
//            'preview' => 'В городе Котовске Тамбовской области 31-летний мужчина поджег дом, в котором находились его супруга и трое детей
//                                7, 10 и 12 лет. ',
//            'text' => 'В городе Котовске Тамбовской области 31-летний мужчина поджег дом, в котором находились его супруга и трое детей 7, 10 и 12 лет. Как рассказали в ГУ МЧС России по региону, сообщение о возгорании поступило в службу спасения около часу ночи 29 октября. Пожар произошел в двухквартирном жилом доме общей площадью 90 кв. метров. Полностью потушить его удалось к 3 часам 48 минутам силами двух отделений пожарной части. Огонь уничтожил квартиру площадью 45 «квадратов».
//                Вскоре стало известно, что еще до прибытия пожарных в местную больницу обратилась 30-летняя жительница загоревшегося дома вместе со своими тремя детьми.
//                     Им удалось самостоятельно выбраться из горящей квартиры. У всех диагностировали ожоги разной степени тяжести.
//                    Пострадавших отправили в Тамбов. Женщину и двоих детей госпитализировали в реанимационное отделение с ожогами,
//                    еще один ребенок находится в общем отделении.',
//            'photo' => 'https://cdn.pixabay.com/photo/2019/07/08/11/50/fire-4324586_960_720.jpg',
//            'categoryId' => 4
//        ],
//        15 => [
//            'id' => 15,
//            'title' => 'Два человека погибли в ДТП в Дагестане',
//            'preview' => 'Два человека погибли, малолетний ребенок получил травмы в результате ДТП в Хасавюртовском районе Дагестана.
//                                По предварительной информации, авария случилась из-за сердечного приступа у водителя,
//                                сообщили в четверг в пресс-службе МВД по Дагестану.',
//            'text' => 'Два человека погибли, малолетний ребенок получил травмы в результате ДТП в Хасавюртовском районе Дагестана. По предварительной информации, авария случилась из-за сердечного приступа у водителя, сообщили в четверг в пресс-службе МВД по Дагестану.
//                            "29 октября в Хасавюртовском районе на 18-м км автодороги Хасавюрт - Гребенская
//                            у 77-летнего водителя, управлявшего автомобилем Audi-100, по предварительной информации,
//                            из-за острой сердечной недостаточности произошел приступ, мужчина скончался за рулем. В результате автомашина съехала с проезжей части и врезалась в дерево. Два пассажира автомобиля, 28-летняя женщина и ее
//                            годовалый ребенок с различными травмами были доставлены в больницу Хасавюрта, где женщина скончалась".',
//            'photo' => 'https://cdn.pixabay.com/photo/2016/05/22/18/50/accident-1409011_960_720.jpg',
//            'categoryId' => 4
//        ],
//        16 => [
//            'id' => 16,
//            'title' => 'Ураган «Зета» в США',
//            'preview' => 'Ураган «Зета» обрушился на побережье американского штата Луизиана.
//                                Основной удар стихии пришелся на берег в 100 километрах к юго-западу от Нового Орлеана. ',
//            'text' => 'Ураган «Зета» обрушился на побережье американского штата Луизиана. Основной удар стихии пришелся на берег в 100 километрах к юго-западу от Нового Орлеана. По данным Национального центра США по наблюдению за ураганами, скорость ветра в пределах урагана превышает 48 метров в секунду. В настоящее время он продолжает
//                           двигаться в северо-восточном направлении со скоростью 39 километров в час.
//                           В Луизиане без электричества остались более 446 тысяч жителей.',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/02/27/08/50/cyclone-2102397_960_720.jpg',
//            'categoryId' => 4
//        ]
//
//    ];
//
//    public $categories = [
//        1 => [
//            'id' => 1,
//            'name' => 'Медицина',
//            'title' => 'Больницы, Вирусы, Ковид2019',
//            'photo' => 'https://cdn.pixabay.com/photo/2016/11/23/15/03/close-up-1853400_960_720.jpg'
//        ],
//        2 => [
//            'id' => 2,
//            'name' => 'Спорт',
//            'title' => 'Футбол. Гонки, Хоккей, Баскетбол',
//            'photo' => 'https://cdn.pixabay.com/photo/2017/07/02/19/24/dumbbells-2465478_960_720.jpg'
//        ],
//        3 => [
//            'id' => 3,
//            'name' => 'Политика',
//            'title' => 'Внутренняя, внешняя политика',
//            'photo' => 'https://cdn.pixabay.com/photo/2019/10/21/12/01/newspapers-4565916_960_720.jpg'
//        ],
//        4 => [
//            'id' => 4,
//            'name' => 'Происшествия',
//            'title' => 'МВД. Задержания. Аресты',
//            'photo' => 'https://cdn.pixabay.com/photo/2020/05/13/12/16/accident-5167244_960_720.jpg'
//        ]
//    ];
//
//    public function getCategory()
//    {
//        $category = [];
//        foreach ($this->categories as $item) {
//            array_push($category, $item);
//        }
//        return $category;
//    }
//
//    public function getNews($category)
//    {
//        $news = [];
//        foreach ($this->news as $value) {
//            if ($value['categoryId'] == $category) {
//                array_push($news, $value);
//            }
//        }
//        return $news;
//    }
//
//    public function getNewsForCategoryId($id)
//    {
//
//        $news = [];
//        foreach ($this->news as $value) {
//            if ($value['id'] == $id) {
//                array_push($news, $value);
//            }
//
//        }
//        return $news[0];
//    }
}
