-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2018 г., 12:33
-- Версия сервера: 5.6.37
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avtodorogi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL COMMENT 'ссылка на сайт',
  `id_news` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `link`, `id_news`) VALUES
(1, 'Гомельавтодор', 'https://www.gomods.by/', 1000),
(2, 'Бреставтодор', 'http://brestavtodor.by/', 2000),
(3, 'ДСТ-2', 'http://www.dst2.gomel.by/', 3000),
(4, 'Витебскоблдорстрой', 'http://www.vods.vitebsk.by/', 4000),
(5, 'строй-россия', 'https://строй-россия.рф', 5000),
(6, 'РОССИЯ СЕГОДНЯ', 'https://ria.ru', 6000);

-- --------------------------------------------------------

--
-- Структура таблицы `library`
--

CREATE TABLE `library` (
  `id` int(10) UNSIGNED NOT NULL,
  `edition_type` varchar(255) NOT NULL COMMENT 'ТНПА, книга или статья',
  `title` varchar(255) NOT NULL,
  `annotation` text NOT NULL COMMENT 'аннотация, краткое описание',
  `edition_author` varchar(255) NOT NULL,
  `edition_date` date NOT NULL COMMENT 'дата издания',
  `link_download` varchar(255) NOT NULL COMMENT 'ссылка на скачивание',
  `id_autor` int(10) UNSIGNED NOT NULL,
  `id_news` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_author` varchar(255) NOT NULL,
  `pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'дата публикации',
  `link_content` varchar(255) NOT NULL COMMENT 'ссылка на статью, контент'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `id_author`, `pub_date`, `link_content`) VALUES
(1, 'Проектирование, строительство, ремонт и содержание автомобильных дорог и искусственных сооружений', 'Основной задачей КУП «Витебскоблдорстрой» является осуществление дорожной деятельности по содержанию, ремонту и развитию (строительству, реконструкции) местных автомобильных дорог, обеспечение безопасного и бесперебойного движения автотранспорта по обслуживаемой местной сети, поддержание сети дорог в проезжаемом состоянии и выполнение комплекса работ по сохранению их технико-эксплуатационных параметров.\r\n\r\n     В настоящее время в состав КУП \"Витебскоблдорстрой\" входят 24 филиала (21 дорожное ремонтно-строительное управление, Управление производственно-технической комплектации, проектный институт \"Витебскдорпроект\" и сельскохозяйственный филиал \"Клевцы\"). На балансе предприятия находится практически 15 тыс. километров дорог, 858 мостов и 199,7 тыс. погонных метров водопропускных труб. Численность работающих на предприятии составляет более 1,7 тыс. человек. ', 'Витебскоблдорстрой', '2018-10-25 21:00:00', ''),
(2, 'Процедура закупки', ' Наименование объекта реконструкции: «Автомобильная дорога Р-16 Тюхиничи –  Высокое – граница Республики Польша (Песчатка), км 20,000 - км 41,000» (II очередь км 28,020 – км 41,322)\r\n\r\nСтрана: Беларусь\r\n\r\nСфера деятельности: Строительство\r\n\r\nИсточник финансирования: Финансирование осуществляется за счет:\r\n\r\n-денежных средств программы ЕИДП ТГС «Польша-Беларусь-Украина» 2014-2020.\r\n\r\n- бюджетных средств РБ.\r\n\r\nТип контракта: работы\r\n\r\nТип уведомления: уведомление с предварительной информацией\r\n\r\nДата публикации: 20 августа 2018 года\r\n\r\nВ рамках реализации программы трансграничного сотрудничества (ПТГС) «Польша-Беларусь-Украина» 2014-2020 действующей в рамках Европейского инструмента добрососедства и партнерства намечается реализация крупного инвестиционного проекта «Улучшение дорожной инфраструктуры приграничного региона посредством обеспечения устойчивого доступа в приграничный регион (модернизация и строительство автомобильной дороги Р-16)» закупкой следующих работ:\r\n\r\nРеконструкция объекта: «Автомобильная дорога Р-16 Тюхиничи –  Высокое – граница Республики Польша (Песчатка), км 20,000 - км 41,000» (II очередь км 28,020 – км 41,322)\r\n\r\nОжидается, что процедура закупки на вышеуказанный контракт начнется в III - IV квартале 2018 года.\r\n\r\nДоговор, будет финансироваться за счет денежных средств в рамках программы ЕИДП ТГС «Польша-Беларусь-Украина» 2014-2020 и бюджетных средств Республики Беларусь.\r\n\r\nПроцедура закупки (подрядные торги в форме открытого конкурса (международный открытый конкурс)) будет подлежать политике и правилам закупок Европейского Союза и Республики Беларусь и будет открыта для фирм из любой из приемлемых стран. \r\n\r\nЗаинтересованные консультанты и подрядчики должны связаться:\r\n\r\nГ-н Муха Евгений Владимирович, главный инженер РУП «Бреставтодор», ул. Воровского, 19, Брест, 220030, Республика Беларусь. Тел .: + 375-162-20-40-56. Факс: + 375-162-20-30-06. E-mail: mail@brestavtodor.by.\r\n', 'Бреставтодор', '2018-08-19 21:00:00', ''),
(3, 'О содержании местных автомобильных дорог ', 'О содержании местных автомобильных дорог в сентябре 2018 года.\r\n\r\nВ ходе содержания дорог ликвидировано ямочности с 01.01.2018 года по местной дорожной сети – 491 159 м2, в том числе  в сентябре 2018 года -  22 185 м2.\r\n', 'Гомельоблдорстрой', '2018-10-25 21:00:00', ''),
(4, 'Информация\r\nо выплате дивидендов по акциям\r\n(по результатам полугодия 2018 года) ', 'Открытое акционерное общество «Дорожно-строительный трест №2, г.Гомель», расположенное по адресу: 246017, г. Гомель, ул. Красноармейская, 28, настоящим информирует, что внеочередным общим собранием акционеров общества 3 августа 2018 года принято решение о выплате дивидендов акционерам общества.\r\n\r\n     Размер дивидендов на акции составляет 20 % прибыли (дохода) Общества.\r\n\r\n     В связи с отсутствием базы для начисления дивидендов по итогам работы ОАО \"ДСТ №2, г.Гомель\" за полугодие 2018 года установить размер дивидендов по группам:\r\n     - на акции, принадлежащие ОАО «Управляющая компания холдинга «Белавтодор» - 00 рубль 00 копеек;\r\n     - на акции, принадлежащие ООО \"Эгал-Инвест\" – 00 рубль 00 копеек;\r\n     - на акции, принадлежащие ОАО \"Ремонтник Плюс\" – 00 рубль 00 копеек;\r\n     - на акции, принадлежащие физическим лицам – 00 рубль 00 копеек.\r\n\r\n     Суммы причитающихся дивидендов за полугодие 2018 года:\r\n     - на акции, принадлежащие ОАО «Управляющая компания холдинга «Белавтодор» - 00 рубль 00 копеек;\r\n     - на акции, принадлежащие ООО \"Эгал-Инвест\" – 00 рубль 00 копеек;\r\n     - на акции, принадлежащие ОАО \"Ремонтник Плюс\" – 00 рубль 00 копеек;\r\n     на акции, принадлежащие физическим лицам – 00 рубль 00 копеек.\r\n\r\n     НС ОАО \"ДСТ №2, г.Гомель\" ', 'ДСТ-2', '2018-08-21 21:00:00', ''),
(5, 'Новейшие дорожные технологии', 'Полноценное развитие дорожной сети невозможно без повышения качества строительства дорог, которое во многом обеспечивается посредством применения новейших технологий. Они предусматривают использование высококачественных материалов и передового оборудования, способствующего повышению производительности труда. \r\n\r\n\r\nВ числе наиболее эффективных инновационных решений можно назвать:\r\n\r\n    Geo Web. Технология, которая основана на применении двух- или трехмерной решетки, выполненной их полиэтиленового полотна. Она создает каркас на дороге, усиливая основание полотна и стабилизируя грунт. В ячейки засыпается грунт, щебень или песок., поверх которых кладется слой асфальта. Это обеспечивает равномерное распределение весовой нагрузки, сокращает вероятность образования трещин и увеличивает межремонтный интервал. Технология Geo Web позволяет успешно возводить дороги в местах со слабым основанием.\r\nDrones Repair Roads. Подразумевает использование дронов для ремонта дорожного покрытия. Беспилотник поднимается над дорогой и сканирует ее поверхность, определяя места повреждения. После этого дрон опускается на проблемное место и заполняет выбоину гудроном или асфальтом, а около заплатки распыляет средство, повышающее долголетие покрытия. Также эти аппараты способны изучать грунтовые основания, собирая спектральные пространственные данные.3D-printer bridge. Основу технологии составляет особая модель промышленного робота со специальным софтом и сварочным устройством. Авторы инновации создали пилотный проект в виде небольшого сварного пешеходного моста в Амстердаме. Также был построен восьмиметровый велосипедный мост, напечатанный на 3D-принтере. Применение этой технологии позволяет уменьшить количество бетона и сократить объемы отходов. В последующем инженеры намерены использовать свои инновационные наработки в сфере дорожного мостостроительства для создания 3D-конструкций.', 'https://строй-россия.рф', '2018-10-27 06:39:21', 'https://строй-россия.рф/%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B8/5124/'),
(6, 'Эксперт: \"Спейснет\" подготовит \"дорожную карту\" космических технологий', 'Оргкомитет \"Спейснет\", созданный в рамках Национальной технологической инициативы (НТИ), разработает дорожную карту развития инновационных космических технологий, рассказал РИА Новости вице-президент Международной ассоциации участников космической деятельности, исполнительный директор оргкомитета \"Спейснет\" Валентин Уваров.\r\n\r\nПо его словам, сейчас в \"Спейснет\" прорабатываются механизмы поддержки стартапов по таким направлениям, как космический транспорт, малые космические аппараты, спутниковые группировки и дистанционное зондирование Земли, космическая связь и навигация, наземная космическая инфраструктура.\r\n\r\nПо мнению Уварова, поддержка частной инициативы поможет снизить риски, прежде всего непрофильные для госкорпорации \"Роскосмос\", которые она не может и не должна нести в отличие от частных компаний, рискующих своим капиталом.\r\n\r\nНТИ — долгосрочная комплексная программа создания условий для обеспечения лидерства российских компаний на новых высокотехнологичных рынках, которые будут определять структуру мировой экономики в ближайшие 15-20 лет. В марте правительство РФ выделило на ее мероприятия 9,633 миллиарда рублей.\r\n', 'РОССИЯ СЕГОДНЯ', '2018-10-23 13:53:00', 'https://ria.ru/science/20181023/1531296027.html');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL COMMENT 'имя',
  `lastName` varchar(255) NOT NULL COMMENT 'фамилия',
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `registr_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `login`, `email`, `birthDate`, `password`, `phoneNumber`, `registr_date`) VALUES
(1, 'Александр', 'Рак', 'Alex_Rak', 'rak@tut.by', '1976-05-11', '12345', 293994563, '2018-10-26 11:31:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `library`
--
ALTER TABLE `library`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
