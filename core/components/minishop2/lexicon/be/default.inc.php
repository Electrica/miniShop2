<?php
/**
 * Default Belorussian Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */

include_once('setting.inc.php');
$files = scandir(dirname(__FILE__));
foreach ($files as $file) {
    if (strpos($file, 'msp.') === 0) {
        @include_once($file);
    }
}

$_lang['minishop2'] = 'miniShop2';
$_lang['ms2_menu_desc'] = 'Дзіўнае пашырэнне электроннай камерцыі';
$_lang['ms2_order'] = 'Заказ';
$_lang['ms2_orders'] = 'Заказы';
$_lang['ms2_orders_intro'] = 'Панэль кіравання заказамі. Вы можаце выбіраць адразу некалькі заказаў праз Shift або Ctrl';
$_lang['ms2_orders_desc'] = 'Упраўленне заказамі';
$_lang['ms2_settings'] = 'Настройкі';
$_lang['ms2_settings_intro'] = 'Панэль кіравання наладамі магазіна. Тут вы можаце паказаць спосабы аплаты, дастаўкі і статусы заказаў';
$_lang['ms2_settings_desc'] = 'Статусы заказаў, параметры аплаты і дастаўкі';
$_lang['ms2_payment'] = 'Аплата';
$_lang['ms2_payments'] = 'Спосабы аплаты';
$_lang['ms2_payments_intro'] = 'Вы можаце ствараць любыя спосабы аплаты заказаў. Логіка аплаты (адпраўка пакупніка на аддалены сэрвіс, прыём аплаты і да т.п.) рэалізуецца ў класе, які вы пакажаце.<br/>Для метадаў аплаты параметр "клас" абавязковы.';
$_lang['ms2_delivery'] = 'Дастаўка';
$_lang['ms2_deliveries'] = 'Варыянты дастаўкі';
$_lang['ms2_deliveries_intro'] = 'Магчымыя варыянты дастаўкі. Логіка падлічвання кошту дастаўкі ў залежнасці ад адлегласці і вагі рэалізуецца класам, які вы пакажа ў наладах.<br/>Калі вы не пазначыце свой клас, разлік будзе вырабляцца алгарытмам па-змаўчанні.';
$_lang['ms2_statuses'] = 'Статусы заказа';
$_lang['ms2_statuses_intro'] = 'Існуе некалькі абавязковых статусаў заказа: "новы", "аплочаны", "адпраўлены" і "адменены". Іх можна наладжваць, але нельга выдаляць, так як яны неабходныя для працы магазіну. Вы можаце паказаць свае статуты для пашыранай логікі працы з заказамі.<br/>Статус можа быць канчатковым, гэта значыць, што яго нельга пераключыць на іншы, напрыклад "адпраўлены" і "адменены". Статус можа быць зафіксаваны, гэта значыць, з яго нельга пераключацца на больш раннія статусы, напрыклад "аплочаны" нельга пераключыць на "новы".';
$_lang['ms2_vendors'] = 'Вытворцы тавараў';
$_lang['ms2_vendors_intro'] = 'Спіс магчымых вытворцаў тавараў. Тое, што вы сюды дадасце, можна выбраць у поле "vendor" тавару.';
$_lang['ms2_link'] = 'Сувязь тавараў';
$_lang['ms2_links'] = 'Сувязі тавараў';
$_lang['ms2_links_intro'] = 'Спіс магчымых сувязяў тавараў адзін з адным. Тып сувязі характарызуе, як менавіта яна будзе працаваць, яго нельга ствараць, можна толькі выбраць з спісу.';
$_lang['ms2_option'] = 'Ўласцівасць тавараў';
$_lang['ms2_options'] = 'Ўласцівасці тавараў';
$_lang['ms2_options_intro'] = 'Спіс магчымых уласцівасцяў тавараў. Дрэва катэгорый выкарыстоўваецца для фільтрацыі уласцівасцяў выбраных катэгорый.<br/>Каб прызначыць катэгорыях адразу некалькі опцый, выберыце іх праз Ctrl (Cmd) або Shift.';
$_lang['ms2_options_category_intro'] = 'Спіс магчымых уласцівасцяў тавараў у дадзенай катэгорыі.';
$_lang['ms2_default_value'] = 'Значэнне па змаўчанні';
$_lang['ms2_customer'] = 'Пакупнік';
$_lang['ms2_all'] = 'Усе';
$_lang['ms2_type'] = 'Тып';

$_lang['ms2_btn_create'] = 'Стварыць';
$_lang['ms2_btn_copy'] = 'Скапіяваць';
$_lang['ms2_btn_save'] = 'Сохранить';
$_lang['ms2_btn_edit'] = 'Змяніць';
$_lang['ms2_btn_view'] = 'Прагляд';
$_lang['ms2_btn_delete'] = 'Выдаліць';
$_lang['ms2_btn_undelete'] = 'Аднавіць';
$_lang['ms2_btn_publish'] = 'Уключыць';
$_lang['ms2_btn_unpublish'] = 'Адключыць';
$_lang['ms2_btn_cancel'] = 'Адмена';
$_lang['ms2_btn_back'] = 'Назад (alt + &uarr;)';
$_lang['ms2_btn_prev'] = 'Папярэдні тавар (alt + &larr;)';
$_lang['ms2_btn_next'] = 'Наступны тавар (alt + &rarr;)';
$_lang['ms2_btn_help'] = 'Дапамога';
$_lang['ms2_btn_duplicate'] = 'Зрабіць копію тавару';
$_lang['ms2_btn_addoption'] = 'Дадаць';
$_lang['ms2_btn_assign'] = 'Прызначыць';

$_lang['ms2_actions'] = 'Дзеянні';
$_lang['ms2_search'] = 'Пошук';
$_lang['ms2_search_clear'] = 'Ачысціць';

$_lang['ms2_category'] = 'Катэгорыя тавараў';
$_lang['ms2_category_tree'] = 'Дрэва катэгорый';
$_lang['ms2_category_type'] = 'Катэгорыя тавараў';
$_lang['ms2_category_create'] = 'Дадаць катэгорыю';
$_lang['ms2_category_create_here'] = 'Катэгорыю з таварамі';
$_lang['ms2_category_manage'] = 'Кіраванне таварамі';
$_lang['ms2_category_duplicate'] = 'Капіяваць катэгорыю';
$_lang['ms2_category_publish'] = 'Апублікаваць катэгорыю';
$_lang['ms2_category_unpublish'] = 'Прыбраць з публікацыі';
$_lang['ms2_category_delete'] = 'Выдаліць катэгорыю';
$_lang['ms2_category_undelete'] = 'Аднавіць катэгорыю';
$_lang['ms2_category_view'] = 'Паглядзець на сайце';
$_lang['ms2_category_new'] = 'Новая катэгорыя';
$_lang['ms2_category_option_add'] = 'Дадаць характарыстыку';
$_lang['ms2_category_option_rank'] = 'Парадак сартавання';
$_lang['ms2_category_show_nested'] = 'Паказваць укладзеныя тавары';

$_lang['ms2_product'] = 'Тавар магазіна';
$_lang['ms2_product_type'] = 'Тавар магазіна';
$_lang['ms2_product_create_here'] = 'Тавар магазіна';
$_lang['ms2_product_create'] = 'Дадаць тавар';

$_lang['ms2_option_type'] = 'Тып уласцівасці';

$_lang['ms2_frontend_currency'] = 'руб.';
$_lang['ms2_frontend_weight_unit'] = 'кг.';
$_lang['ms2_frontend_count_unit'] = 'шт.';
$_lang['ms2_frontend_add_to_cart'] = 'Дадаць у кошык';
$_lang['ms2_frontend_tags'] = 'Тэгі';
$_lang['ms2_frontend_colors'] = 'Колеры';
$_lang['ms2_frontend_color'] = 'Колер';
$_lang['ms2_frontend_sizes'] = 'Памеры';
$_lang['ms2_frontend_size'] = 'Памер';
$_lang['ms2_frontend_popular'] = 'Папулярны тавар';
$_lang['ms2_frontend_favorite'] = 'Рэкамендаваць';
$_lang['ms2_frontend_new'] = 'Новы';
$_lang['ms2_frontend_deliveries'] = 'Варыянты дастаўкі';
$_lang['ms2_frontend_delivery'] = 'Дастаўка';
$_lang['ms2_frontend_payments'] = 'Спосабы аплаты';
$_lang['ms2_frontend_payment'] = 'Аплата';
$_lang['ms2_frontend_delivery_select'] = 'Выберыце дастаўку';
$_lang['ms2_frontend_payment_select'] = 'Выберыце аплату';
$_lang['ms2_frontend_credentials'] = 'Дадзеныя атрымальніка';
$_lang['ms2_frontend_address'] = 'Адрас дастаўкі';

$_lang['ms2_frontend_comment'] = 'Каментарый';
$_lang['ms2_frontend_receiver'] = 'Атрымальнік';
$_lang['ms2_frontend_email'] = 'Email';
$_lang['ms2_frontend_phone'] = 'Тэлефон';
$_lang['ms2_frontend_index'] = 'Паштовы індекс';
$_lang['ms2_frontend_country'] = 'Краіна';
$_lang['ms2_frontend_region'] = 'Рэгіён / Вобласць';
$_lang['ms2_frontend_city'] = 'Горад';
$_lang['ms2_frontend_street'] = 'Вуліца';
$_lang['ms2_frontend_building'] = 'Дом';
$_lang['ms2_frontend_room'] = 'Кватэра';

$_lang['ms2_frontend_order_cost'] = 'Разам, з дастаўкай';
$_lang['ms2_frontend_order_submit'] = 'Зрабіць заказ!';
$_lang['ms2_frontend_order_cancel'] = 'Ачысціць форму';
$_lang['ms2_frontend_order_success'] = 'Дзякуй за афармленне заказу<b>#[[+num]]</b> на нашым сайце <b>[[++site_name]]</b>!';

$_lang['ms2_message_close_all'] = 'зачыніць усё';
$_lang['ms2_err_unknown'] = 'Невядомая памылка';
$_lang['ms2_err_ns'] = 'Гэта поле абавязковае';
$_lang['ms2_err_ae'] = 'Гэта поле павінна быць унікальна';
$_lang['ms2_err_json'] = 'Гэта поле патрабуе JSON радок';
$_lang['ms2_err_user_nf'] = 'Карыстальнік не знойдзены.';
$_lang['ms2_err_order_nf'] = 'Заказ з такім ідэнтыфікатарам не знойдзены.';
$_lang['ms2_err_status_nf'] = 'Статус з такім ідэнтыфікатарам не знойдзены.';
$_lang['ms2_err_delivery_nf'] = 'Спосаб дастаўкі з такім ідэнтыфікатарам не знойдзены.';
$_lang['ms2_err_payment_nf'] = 'Спосаб аплаты з такім ідэнтыфікатарам не знойдзены.';
$_lang['ms2_err_status_final'] = 'Усталяваны фінальны статус. Яго нельга змяняць.';
$_lang['ms2_err_status_fixed'] = 'Усталяваны фінальны статус. Вы не можаце змяніць яго на больш ранні.';
$_lang['ms2_err_status_wrong'] = 'Няправільны статус заказу.';
$_lang['ms2_err_status_same'] = 'Гэты статус ўжо усталяваны.';
$_lang['ms2_err_register_globals'] = 'Памылка: php параметр <b>register_globals</b> павінен быць выключаны.';
$_lang['ms2_err_link_equal'] = 'Вы спрабуеце дадаць тавару спасылку на самога сябе';
$_lang['ms2_err_value_duplicate'] = 'Вы не ўвялі значэнне або ўвялі паўтор.';

$_lang['ms2_err_gallery_save'] = 'Немагчыма захаваць файл';
$_lang['ms2_err_gallery_ns'] = 'Немагчыма прачытаць файл';
$_lang['ms2_err_gallery_ext'] = 'Няправільнае пашырэнне файла';
$_lang['ms2_err_gallery_thumb'] = 'Не атрымалася згенераваць прэв\'юшкі. Глядзіце сістэмны лог.';
$_lang['ms2_err_gallery_exists'] = 'Такі малюнак ужо ёсць у галерэі тавару.';
$_lang['ms2_err_wrong_image'] = 'Файл не з\'яўляецца карэктным малюнкам.';

$_lang['ms2_email_subject_new_user'] = 'Вы зрабілі заказ #[[+num]] на сайце [[++site_name]]';
$_lang['ms2_email_subject_new_manager'] = 'У вас новы заказ #[[+num]]';
$_lang['ms2_email_subject_paid_user'] = 'Вы аплацілі заказ #[[+num]]';
$_lang['ms2_email_subject_paid_manager'] = 'Заказ #[[+num]] быў аплочаны';
$_lang['ms2_email_subject_sent_user'] = 'Ваш заказ #[[+num]] быў адпраўлены';
$_lang['ms2_email_subject_cancelled_user'] = 'Ваш заказ #[[+num]] быў адменены';

$_lang['ms2_payment_link'] = 'Калі вы выпадкова перапынілі працэдуру аплаты, Вы заўсёды можаце <a href="[[+link]]" style="color:#348eda;">працягнуць яе па гэтай спасылцы</a>.';

$_lang['ms2_category_err_ns'] = 'Катэгорыя не абраная';
$_lang['ms2_option_err_ns'] = 'Ўласцівасць не абрана';
$_lang['ms2_option_err_nf'] = 'Ўласцівасць не знойдзена';
$_lang['ms2_option_err_ae'] = 'Ўласцівасць ўжо існуе';
$_lang['ms2_option_err_save'] = 'Памылка захавання уласцівасці';
$_lang['ms2_option_err_reserved_key'] = 'Такі ключ опцыі выкарыстоўваць нельга';
$_lang['ms2_option_err_invalid_key'] = 'Няправільны ключ для ўласцівасці';