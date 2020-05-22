<?php

use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stations')->delete();

        $stations = array(
            //Kiev
            array('name' => 'EcoFactor 811015 "DentLine clinic', 'city_id' => '1', 'address' => 'вулиця Волоська, 20', 'longitude' => '30.518841', 'latitude' => '50.467778', 'phone' => '380505008256', 'cost' => '5 grh/kWt.', 'description' => 'Для початку зарядки, завантажте додаток. Для начала зарядки, загрузите приложение. To start charging, download the application. www.ecofactor.eu/charge-box/', 'ports' => 'Mennekes (Type 2)', 'work_from' => '08:00:00', 'work_to' => '15:00:00'),
            array('name' => 'TOKA #68 Сільпо на Малиновського', 'city_id' => '1', 'address' => 'вулиця Маршала Малиновського, 34', 'longitude' => '30.506968', 'latitude' => '50.503556', 'phone' => '0442226688', 'cost' => 'Согласно ценам в мобильном приложении TOKA Network (https://toka.energy/app/)', 'description' => 'Cтанция находится справа от входа в Сильпо Время работы: 24/7 Парковка: бесплатно Type 1 - зарядный порт с кабелем; Type 2 - разъем Mennekes, для зарядки своим кабелем. Вставьте кабель в зарядную станцию и в электромобиль. После чего запустите процесс зарядки при помощи карты ТОКА или мобильного приложения "TOKA Network". При возникновении вопросов, звоните круглосуточно Call Center +38(044)222-66-88.', 'ports' => 'EV Plug (J1772), Mennekes (Type 2)', 'work_from' => '15:00:00', 'work_to' => '20:00:00'),
            array('name' => '[009] YASNO E-mobility | STRUM 50 kW (Promenada Park)', 'city_id' => '1', 'address' => 'Велика Окружна 4, ТРЦ "Променада Парк"', 'longitude' => '30.360746', 'latitude' => '50.429298', 'phone' => '(080)021-2333', 'cost' => 'DC: 9 UAH/kWh, AC: 4.5 UAH/kWh (плата за час відсутня)', 'description' => 'Увага! За місцем знаходження зарядної станції проводяться ремонтні роботи. Можливість заряджання електромобілів відсутня. Після закінчення ремонтних робіт станція запрацює в нормальному режимі. Просимо врахувати дану інформацію при плануванні маршруту. Суперчарджер 50 kW (CHAdeMO, CCS Combo2) + Type2 / 22 kW (розетка). ', 'ports' => 'CHAdeMO DCFC, Mennekes (Type 2), CCS DCFC', 'work_from' => '00:00:00', 'work_to' => '00:00:00'),
            array('name' => '2344 IONITY by AE type 2 (63A*3) / type 1 (40A) ЖК Новопечерські Липки', 'city_id' => '1', 'address' => 'вул. Михайла Драгомирова, 20', 'longitude' => '30.543652', 'latitude' => '50.409243', 'phone' => '(097)535-7777', 'cost' => 'Cost unknown', 'description' => 'Раді Вас бачити на зарядній станції IONITY, що на сьогоднішній день є найбільшим інвестиційним проектом в частині розміщення і управління мережею зарядних станцій для електромобілів в Україні. Для можливості підключення Вашого електромобіля до зарядної станції, будь-ласка, завантажте мобільний додаток AE Charging Point за наступними посиланнями: для користувачів IOS', 'ports' => 'EV Plug (J1772), Mennekes (Type 2)', 'work_from' => '01:00:00', 'work_to' => '05:00:00'),
            array('name' => 'OKKO Station', 'city_id' => '1', 'address' => 'Броварський проспект, 20-3', 'longitude' => '30.626945', 'latitude' => '50.459534', 'phone' => '(097)123-4321', 'cost' => 'Cost unknown', 'description' => 'Please ask cashier for the Type1 or Type 2 cable if needed. Enjoy your stay at Hot cafe restaurant.', 'ports' => 'EV Plug (J1772), Mennekes (Type 2)', 'work_from' => '06:00:00', 'work_to' => '08:00:00'),
            //Lvov
            array('name' => 'AutoEnterprise 546 Premier Hotel Dnister', 'city_id' => '2', 'address' => 'вул. Матейка, 6', 'longitude' => '24.017508', 'latitude' => '49.836999', 'phone' => '(097)535-7777', 'cost' => '22,50 UAH / hour', 'description' => 'Зарядные станции компании «АвтоЭнтерпрайз» доступны для всех владельцев электромобилей.', 'ports' => '2 EV Plug (J1772)', 'work_from' => '06:00:00', 'work_to' => '15:00:00'),
            //Odessa
            array('name' => 'AutoEnterprise 0527', 'city_id' => '3', 'address' => 'ул. Генерала Цветаева, 3/5', 'longitude' => '30.726612', 'latitude' => '46.463704', 'phone' => '(097)123-4321', 'cost' => '15/h', 'description' => 'Зарядные станции компании «АвтоЭнтерпрайз» доступны для всех владельцев электромобилей.', 'ports' => '2 EV Plug (J1772)', 'work_from' => '06:00:00', 'work_to' => '22:00:00'),
        );

        DB::table('stations')->insert($stations);
    }
}
