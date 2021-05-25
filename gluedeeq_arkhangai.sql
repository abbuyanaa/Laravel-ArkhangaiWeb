-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 03:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkhangai`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Үйл явдлын мэдээ'),
(4, 'Уулзалт, хурлын мэдээ'),
(5, 'Ярилцлага'),
(6, 'Гадаад харилцаа'),
(7, 'Дүрстэй мэдээ'),
(8, 'Фото мэдээ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `body`, `image`, `datetime`) VALUES
(3, 3, '​Олон улсын эмэгтэйчүүдийн эрхийг хамгаалах өдрийг тохиолдуулан “Даашинзтай Бүсгүй-2019” арга хэмжээ болно', '<p style=\"text-align: justify;\">Дархан хотын уран бүтээлч залуучууд нэгдэн &ldquo;ГЭР БҮЛИЙН ХӨГЖЛИЙГ ДЭМЖИХ&rdquo; жилийн хүрээнд гуравдугаар сарын найман буюу &ldquo;Олон улсын эмэгтэйчүүдийн эрхийг хамгаалах&rdquo; өдрөөр зорилтот бүлгийн хоёр ээжид дэм өгөх зорилготой &ldquo;Даашинзтай Бүсгүй-2019&rdquo; хайр дүүрэн цэнгүүнийг зохион байгуулах гэж байна. Тус арга хэмжээ нь нийгэмдээ сайн сайхан зүйлсийг бүтээн, залуучуудын санаачилга дээр тулгуурлан ашгийн бус байдлаар явагдахаараа онцлогтой. Өнөөдөр /2019.03.01/ зохион байгуулагчид тус арга хэмжээний талаар хэвлэлийнхэнд мэдээлэл өгсөн юм. Ерөнхийдөө Зорилтот бүлгийн 270 гаруй өрхийн судалгаан дээр үндэслэн 10 өрхийг сонгож, улмаар 2 ээжийг тус арга хэмжээний үеэр баярлуулах ажээ. &ldquo;Даашинзтай Бүсгүй-2019&rdquo; хайр дүүрэн цэнгүүн гуравдугаар сарын наймны 18:00 цагт &ldquo;Event Yak Hall&rdquo; ресторанд болно. Дэлгэрэнгүй мэдээллийг 8808-8400, 8804-6266 дугаараас лавлана уу.&nbsp;</p>', 'images/2019_03_02_1551515982_IMG_9259.JPG', '2019-03-02 16:39:42'),
(4, 4, '“ОРОН НУТГИЙН ӨӨРИЙН ӨМЧИЙН ЭД ХӨРӨНГИЙГ ТҮРЭЭСЛЭХ ЖУРАМ”-ЫГ ШИНЭЧЛЭН БОЛОВСРУУЛАХАД ОЛОН НИЙТИЙН САНАЛЫГ ТУСГАВ', '<p style=\"text-align: justify;\">Аймгийн ИТХ-ын дэргэдэх Иргэний танхим, аймгийн Орон нутгийн өмчийн газар хамтран Дархан-Уул аймгийн &ldquo;Орон нутгийн өөрийн өмчийн эд хөрөнгийг түрээслэх журам&rdquo;-ыг шинэчлэн боловсруулах ажиллагаанд олон нийтийн саналыг тусгах нь хэлэлцүүлгийг /2019.02.28/ зохион байгуулав.</p>\r\n<p style=\"text-align: justify;\">Орон нутгийн өөрийн өмчийн эд хөрөнгийг түрээслэх журам&rdquo; нь &ldquo;Орон нутгийн өөрийн өмчийн эд хөрөнгийг түрээслэх журам&rdquo;-ыг баталснаар орон нутгийн өмчит хуулийн этгээдийн өмч хөрөнгийн баримтлах бодлого, өмчийн менежмент, нийгмийн хариуцлагыг сайжруулах, өмч хөрөнгийн үр өгөөжийг нэмэгдүүлэх зорилготой бөгөөд мөн Захиргааны Ерөнхий хуулийн 62.2-т &ldquo;Нийтийн ашиг сонирхол, хүний эрх, хууль ёсны ашиг сонирхлыг хөндөх тохиолдолд захиргааны хэм хэмжээний актын төсөлд нийтийн санаа бодлыг тусгах зорилгоор хэлэлцүүлэг зохион байгуулж, оролцох боломжоор хангах бөгөөд эрх, хууль ёсны ашиг сонирхол нь хөндөгдөх бүлгийн хүрээнд хэлэлцүүлэг заавал хийнэ.&rdquo; хэмээн заасны дагуу аймгийн ИТХ-ын Тэргүүлэгчдийн 2017 оны 40 дүгээр тогтоолыг хүчингүй болгож, дахин олон нийтээр хэлэлцүүлж байгаа юм.</p>\r\n<p style=\"text-align: justify;\">Хэлэлцүүлгийн эхэнд &ldquo;Орон нутгийн өөрийн өмчийн эд хөрөнгийг түрээслэх журам&rdquo;-ыг шинэчлэн боловсруулах төслийг Орон нутгийн өмчийн газрын ахлах мэргэжилтэн М.Хүрэлбаатар танилцууллаа.</p>\r\n<p style=\"text-align: justify;\">Орон нутгийн өмчийн газраас &ldquo;Орон нутгийн өөрийн өмчийн эд хөрөнгийн түрээслэх журам&rdquo;-ыг батлуулснаар орон нутгийн өмчийн хуулийн этгээдийн барилга байгууламж, машин, тоног төхөөрөмжийн ашиглалт, хадгалалт хамгаалалтыг сайжруулах, өмчийн үр өгөөж нэмэгдүүлэх, төсвийн хөрөнгийг хэмнэх ач холбогдолтой юм.</p>', 'images/2019_03_02_1551516042_2b092bc1-56b2-4cc1-a345-353f6e1a9833.jpg', '2019-03-02 16:40:42'),
(6, 5, '#UNLOCK 1: Асар их хүчийг бий болгох чадвартайгаас гадна хэзээ ч өөрчилж болдгоороо онцлог тэр зүйл', '<ul>\r\n<li style=\"text-align: justify;\">Сэтгэлгээ гэж юу вэ?</li>\r\n</ul>\r\n<p style=\"text-align: justify;\">Аливаа хүний ажиллаж, амьдарч буй орчин,&nbsp;ойр дотны хүмүүс болон эцэг, эхээс&nbsp;авсан хүмүүжил зэрэг олон зүйлээс олж авсан хувь хүний итгэл үнэмшлийг хэлдэг аж.</p>\r\n<p style=\"text-align: justify;\">Итгэл үнэмшил нь&nbsp; хүний тархинд орших агаад асар их хүчийг&nbsp;бий болгох чадвартайгаас гадна&nbsp;хэзээ ч&nbsp;өөрчилж&nbsp;болдгоороо онцлог зүйл&nbsp;хэмээн Стэнфордын Их Сургуулийн профессор Кэрол Двэк тэмдэглэжээ.</p>\r\n<p style=\"text-align: justify;\">iKon.mn энэ долоо хоногоос эхлүүлэн UNLOCK подкастын хамт олонтой хамтран подкастын&nbsp;бичмэл тэмдэглэлүүдийг хүргэх болсон талаар<a href=\"https://ikon.mn/opinion/1id1\">&nbsp;мэдээлсэн.</a></p>\r\n<p style=\"text-align: justify;\">Хамгийн эхний ном бол&nbsp;Стэнфордын Их Сургуулийн сэтгэл зүйн профессор багш Кэрол Двэкийн бичсэн&nbsp;<strong>\"MINDSET\"&nbsp;</strong>буюу \"Сэтгэлгээ\".</p>\r\n<div class=\"ikon-block-container\" style=\"text-align: justify;\">Хамгийн эхэнд онцолсон учир нь&nbsp;&nbsp;<strong>\"MINDSET\"&nbsp;</strong>нь<strong>&nbsp;</strong>Unlock подкастын хамт олонд&nbsp;их таалагдсан, олон зүйлийг ухааруулсан номуудын нэгт зайлшгүй багтдаг тул энэ дугаарыг сонсож амжаагүй байгаа хүмүүст зориулан ийнхүү санал болгож байна.</div>\r\n<p style=\"text-align: justify;\"><u><strong>ШУУД СОНСОХ: Дугаар18 \"Mindset\" Кэрол Двэк</strong></u></p>\r\n<div class=\"ik_embed_div\" style=\"text-align: justify;\" contenteditable=\"false\"><iframe src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/347076993&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\" width=\"100%\" height=\"300\" frameborder=\"no\" scrolling=\"no\" data-mce-fragment=\"1\"></iframe></div>\r\n<p style=\"text-align: justify;\">Номын зохиолч болох&nbsp;Кэрол Двэк олон жилийн хугацаанд маш олон оюутан, залуус&nbsp;болон бизнесийн салбарынханд сэтгэл зүйн хичээл, лекц орж ажиглалт хийсний үр дүнд энэхүү номыг бүтээжээ.</p>\r\n<p style=\"text-align: justify;\">Тэрбээр хүний сэтгэлгээг хоёр төрөлд ангилсан бөгөөд эдгээр хоёр сэтгэлгээ нь хүний амьдралын бүхий л түвшний харилцаа, ажил амьдрал, ирээдүйд хэрхэн нөлөөлдөг талаар бичсэн байна.</p>\r\n<p style=\"text-align: justify;\">Сэтгэлгээний хоёр төрөлд:</p>\r\n<ol style=\"text-align: justify;\">\r\n<li><u><strong>ТОГТМОЛ СЭТГЭЛГЭЭ&nbsp;</strong></u>/fixed mindset/ болон</li>\r\n<li><u><strong>ӨСӨН ХӨГЖИХ СЭТГЭЛГЭЭ&nbsp;</strong></u>/growth mindset/ байдаг гэжээ.</li>\r\n</ol>\r\n<h5 style=\"text-align: justify;\">&nbsp;\"MINDSET\" НОМООС АВАХ ДӨРВӨН ГОЛ САНАА</h5>\r\n<p style=\"text-align: justify;\">1. Тогтмол болон өсөн хөгжих сэтгэлгээний ялгаа</p>\r\n<ul style=\"text-align: justify;\">\r\n<li>\r\n<p><strong>Тогтмол сэтгэлгээ&nbsp;</strong>гэдэг нь аливаа хүний зан чанар эсвэл чадвар нь анх төрөх үедээ байсан шиг тэр хэвээрээ л үлддэг хэмээн боддог сэтгэлгээг хэлнэ. Ж нь,&nbsp;бидний хэлж заншсанаар энэ хүүхэд төрөлхийн хөгжмийн эсвэл тоо бодох авьяастай гэж хэлдгийг дурдаж болно.</p>\r\n</li>\r\n<li><strong>Харин өсөн хөгжих сэтгэлгээ</strong>&nbsp;нь тогтмол сэтгэлгээний эсрэг бөгөөд уйгагүй&nbsp;хөдөлмөрлөж, сургуулилт хийж, хичээл зүтгэл гаргасны үр дүнд хэзээ ч өөрчлөх боломжтой чадвар/мэдлэг/үзэл бодол&nbsp;тэрхүү сэтгэлгээг хэлдэг байна.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\">Тогтмол сэтгэлгээ нь өсөн хөгжих сэтгэлгээтэй харьцуулахад хүмүүст илүү давамгайлж илэрдэг талаар зохиолч онцолсон байдаг. Учир нь бидний амьдарч буй&nbsp;нийгэм хувь хүмүүст тогтмол сэтгэлгээ суулгах өгөгдлийг цаанаас нь өгч иржээ.</p>\r\n<p style=\"text-align: justify;\">Тухайлбал, спорт эсвэл урлагийн салбарт амжилт үзүүлж, манлайлж буй хүмүүсийг нийгмийн дийлэнх нь бурхнаас заяасан авьяастай хүмүүс гэж хардгаар энэ сэтгэлгээг зохиолч нотолжээ.</p>\r\n<p style=\"text-align: justify;\">Гэвч энэ нь өрөөсгөл ойлголт бөгөөд тэр хүний урт хугацааны туршид гаргасан хичээл зүтгэлийг харалгүйгээр ийнхүү дүгнэдэг нь нийгэм дэх ТОГТМОЛ СЭТГЭЛГЭЭний илрэл аж.</p>\r\n<p style=\"text-align: justify;\">Үүний бодит жишээ бол&nbsp;дэлхийн сагсан бөмбөгийн домог болсон Майкл Жорданы амжилт.&nbsp;Ихэнх хүн&nbsp;түүнийг төрөлхийн сагсан бөмбөг тоглох авьяастай хэмээн боддог ч тэрбээр амьдралынхаа олон жилийн туршид асар их тэвчээр, хичээл зүтгэл, хөдөлмөр гаргасны үр дүнд ийнхүү домогт тамирчин болсон гэдэг талаар нь хардаггүйг дурджээ.</p>\r\n<h5 style=\"text-align: justify;\">2. ХҮҮХДЭЭ ХЭРХЭН ӨСӨН ХӨГЖИХ СЭТГЭЛГЭЭТЭЙ БОЛГОХ ВЭ?</h5>\r\n<p style=\"text-align: justify;\">Өмнө дурдсанчлан сэтгэлгээг хүн ойр дотны хүмүүсээсээ олж авдаг. Үүнтэй холбогдуулан хүүхдээ өсгөхдөө тогтмол сэтгэлгээтэй гэхээс илүүтэй хэрхэн өсөн хөгжиж, цаашид илүү их зүйлийг бүтээх эрмэлзэлтэй хүн болгох талаар мөн тус номонд дурдсан байдаг.</p>\r\n<p style=\"text-align: justify;\">Эцэг,&nbsp;эхчүүд хүүхдээ бага байхаас нь эхлүүлэн ямар нэгэн зүйл сурч, амжилт гаргах үед нь миний хүү угаасаа л авьяастай, мундаг учраас ингээд чадаж байна гэж магтах нь элбэг байдгийг та бүхэн мэдэж байгаа байх. Гэвч энэ нь хүүхдийг&nbsp;тогтмол сэтгэлгээтэй болгоход нөлөөлдөг бөгөөд хүүхэд дараа нь би угаасаа л ийм мундаг эсвэл төрөхөөсөө л би ингэж чаддаг байсан гэсэн бодолтой болоход нөлөөлдөг байна.</p>\r\n<p style=\"text-align: justify;\">Харин үүний оронд хүүхдээ өсөн хөгжих сэтгэлгээтэй болгохын тулд ямар нэгэн зүйл дээр ахиц, дэвшил гаргах үед нь&nbsp;<em>миний хүү өмнөхөөсөө илүү сайн болсон байна, цаашид ч мөн илүү хичээж үүнээс илүү амжилт гаргахыг хичээгээрэй&nbsp;</em>гэх талаас нь урамшуулах нь ирээдүйд тогтмол сэтгэлгээтэй болгоход нь тусалдаг талаар онцолжээ. Өөрөөр хэлбэл аливаа зүйлээс гарч буй&nbsp;<strong>АХИЦ</strong>ыг нь илүү тодотгож, урамшуулахыг зохиолч зөвлөж байна.</p>\r\n<h5 style=\"text-align: justify;\">3. МАНЛАЙЛАГЧ ХҮНИЙ СЭТГЭЛГЭЭ</h5>\r\n<div class=\"ikon-block-container\" style=\"text-align: justify;\">\r\n<p>Манлайлагч хүн&nbsp;өсөн дэвших сэтгэлгээтэй, бэрхшээлээс эмээдэггүй, өөрийгөө болон бусдыг өсөн дэвшиж хөгжихөд дэмжиж, тусалдаг байх мөн эргэн тойрондоо өсөн дэвших орчин, уур амьсгалыг бий болгодог хүнийг хэлнэ хэмээн зохиолч бичжээ.</p>\r\n</div>\r\n<p style=\"text-align: justify;\">Хоёр сэтгэлгээний ялгааг зохиолч нийгэм болоод хүүхэд сурган хүмүүжүүлэхээс гадна ажил, бизнесийн орчинд хэрхэн илэрдэг талаар мөн бичсэн байдаг.</p>\r\n<p style=\"text-align: justify;\">Тогтмол сэтгэлгээтэй манлайлагч хүний төрөлхийн авьяас, чадварт итгэдэг бөгөөд төрөлхийн ийм чадвартай хүмүүс л бусдыг удирдаж, өөрчлөлтийг авчирдаг хэмээн боддог аж.</p>\r\n<p style=\"text-align: justify;\">Ийм төрлийн манлайлагчид бусдаас ирж буй шүүмжлэл, санал хүсэлтийг хүлээж авахдаа муу, илүү хаалттай байх хандлагатай байхаас гадна&nbsp;алдаа гаргахаас айдаг ба гаргасан тохиолдолд бусад руу чихэх хандлагатай байдгийг онцолжээ.</p>\r\n<p style=\"text-align: justify;\">Харин өсөн хөгжих сэтгэлгээтэй манлайлагчид бусдын болоод өөрийнхөө хичээл зүтгэлд итгэдэг бөгөөд ямар ч хүн хангалттай хичээл зүтгэл гаргаж чадвал удирдагч болж, бусдад үлгэр дуурайл үзүүлж чаддаг хэмээн боддогоороо ялгаатай.</p>\r\n<p style=\"text-align: justify;\">Үүний тод жишээгээр зохиолч&nbsp;General Electric -ийн гүйцэтгэх захирал асан Жак Вэлшийг онцолжээ.</p>\r\n<div class=\"ikonmedia margin-bottom16  medialoaded\" style=\"text-align: justify;\" contenteditable=\"false\"><img class=\"thumb\" src=\"https://content.ikon.mn/news/2019/3/1/1c60f0_d07a841e-ad23-11e7-a59f-3f0acc6080af_ph.jpg\" /><img class=\"ikonlazy loaded\" src=\"https://content.ikon.mn/news/2019/3/1/1c60f0_d07a841e-ad23-11e7-a59f-3f0acc6080af_x974.jpg\" data-action=\"zoom\" />\r\n<div class=\"ikonarsave\">&nbsp;</div>\r\n</div>\r\n<p class=\"phalf\" style=\"text-align: justify;\">Тэрбээр 1980 онд анх тус компанийн гүйцэтгэх захирлаар&nbsp; томилогдож байсан ба тухайн үед&nbsp;компанийн зах зээл дах&nbsp;үнэлгээ 14 тэрбум доллар байжээ. Тэр үеэс хойш 20 жилийн хугацаанд компанийг удирдсаны үр дүнд компанийн үнэлгээг 490 тэрбум доллар хүртэл болгон өсгөж, компанидаа асар их өөрчлөлтийг авчирж байсан талаар өгүүлжээ.</p>\r\n<p style=\"text-align: justify;\">Түүний гаргасан энэхүү өөрчлөлтийг зохиолч номондоо илүү дэлгэрэнгүй тайлбарласан&nbsp;бөгөөд түүнийг захирал болохоос өмнө компанийн удирдлага ажилчдадаа зөвхөн тогтмол сэтгэлгээгээр удирддаг байжээ. Харин Жак удирдах болсноор компанийг тэр чигээр нь өсөн дэвшиж, хөгжих сэтгэлгээгээр удирдаж эхэлснээр ийнхүү тус компанийн түүхэнд байгаагүй эерэг үр дүнг авчирсан байна.</p>\r\n<h5 style=\"text-align: justify;\">4. ХАРИЛЦАА БА СЭТГЭЛГЭЭ</h5>\r\n<p class=\"phalf\" style=\"text-align: justify;\">Энэхүү номонд зохиолч сэтгэлгээний ялгаатай байдлыг хосуудын&nbsp;хооронд хэрхэн илэрдэг талаар хөнджээ.</p>\r\n<p style=\"text-align: justify;\">Тогтмол сэтгэлгээтэй хосуудын хооронд аливаа асуудал гарахад тухайн хүмүүс бие биерүүгээ буруугаа чихэж, нөгөө хүнийхээ зан чанарыг өөрчлөгдөхгүй хэмээн хардаг аж.</p>\r\n<p style=\"text-align: justify;\">Харин өсөн дэвших сэтгэлгээтэй хосуудын харилцаа хамтдаа хөгжиж, бие биенээсээ суралцаж, өөрчлөгдөж, илүү өсөн дэвшиж харилцаагаа улам баталгаажуулж байдаг бөгөөд ийм төрлийн сэтгэлгээтэй хүмүүсийн харилцаа илүү удаан үргэлжлэх хандлагатай байдаг талаар мөн дурджээ.</p>\r\n<p style=\"text-align: justify;\"><strong>\"MINDSET\"</strong>&nbsp;хүн бүрт өсөн хөгжиж, дэвших сэтгэлгээг өөрт суулгахад анхаарах зөвлөгөөнүүдийг тус тус өгснөөрөө хувь хүний хөгжилд үнэтэй хувь нэмэр оруулахуйц бүтээл болсноороо алдаршсан байна. Хамгийн чухал зүйл бол өсөн дэвжих сэтгэлгээг та хэдэн насандаа ч өөрт төлөвшүүлэх боломжтойг зохиолч онцолжээ.</p>', 'images/2019_03_02_1551551607_1c60f0_d07a841e-ad23-11e7-a59f-3f0acc6080af_x974.jpg', '2019-03-03 02:33:27'),
(7, 8, 'Софт волейболын аймгийн аварга шалгаруулах тэмцээний дүн гарав', '<pre>Монголын Мастеруудын Биеийн Тамир Спортын Дархан-Уул аймгийн салбар хорооны 2019 оны ажлын төлөвлөгөөний дагуу Дархан-Уул аймгийн &ldquo;Спортлог Дарханчууд&rdquo; дэд хөтөлбөрийн хүрээнд &ldquo;Софт волейбол&rdquo;-ын аймгийн аварга шалгаруулах тэмцээнийг тус аймгийн дөрвөн</pre>', 'images/2019_03_03_1551572658_7.jpg', '2019-03-03 08:24:18'),
(8, 7, 'Оюутан цэргийн бүртгэл ирэх сарын нэгнээс эхэлнэ', '<pre>&ldquo;Оюутан цэрэг&rdquo; цэргийн мэргэжил олгох сургалтад хамрагдах оюутнуудыг 2019 оны 03 дугаар сарын 01-12-ны өдрүүдэд өөрийн сургууль дээрх оюутны зөвлөлдөө бүртгүүлэх юм байна.</pre>', 'images/2019_03_03_1551572714_58dbec179a7be53062f22bfc2f20854a_x3.jpg', '2019-03-03 08:25:14'),
(9, 4, '“Төмөр замчдын бахархал 70 жил” арга хэмжээ боллоо', '<pre>Хүмүүнлэг ардчилсан нийгмийн үзэл санаанд тулгуурлан төмөр замчин залуучуудын нийтлэг эрх ашгийг хамгаалах, шударга ёс, эв нэгдлийг хангах, боловсрол ёс зүйг дээшлүүлэх, залуучуудын нөхөрлөлийг бэхжүүлэх, дотоод, гадаад хамтын ажиллагааг хөгжүүлэх,</pre>', 'images/2019_03_03_1551572793_IMG_8483.JPG', '2019-03-03 08:26:33'),
(10, 4, '101 НАСТАЙ БУУРАЙД МОНГОЛ УЛСЫН ЕРӨНХИЙЛӨГЧИЙН БЭЛГИЙГ ГАРДУУЛАВ', '<p>&ldquo;Ахмад настны нийгмийн хамгааллын тухай хууль&rdquo; - ийн 2 дугаар бүлгийн 6.2-т сар шинийн баярыг тохиолдуулан тухайн нутаг дэвсгэрийн хамгийн өндөр настанд аймаг, нийслэл, сум, дүүрэг, баг, хорооны Засаг даргын,</p>', 'images/2019_03_03_1551572871_IMG_7902.JPG', '2019-03-03 08:27:51'),
(11, 6, 'Нууцаас гарч нийтэд ил болж буй Засгийн газрын 32-р тэмдэглэлийн зарим хэсгийг ил болгов', '<p style=\"text-align: justify;\">ЗГХЭГ-ын дарга Л.Оюун-Эрдэнэ \"Эрдэнэт Үйлдвэр\"-ийн&nbsp;49 хувийг худалдаж авахтай холбоотой зарим нууц материалыг ил болгохоо мэдэгдсэн. Ингэхдээ ЭҮ-ийн 49 хувийг зарахтай холбоотой Засгийн газрын&nbsp;анхны хуралдааны нууц гэх&nbsp;<a href=\"https://ikon.mn/n/1ifp\" target=\"_blank\">32-р тэмдэглэлийг нээлттэй болгох гэж байна.</a></p>\r\n<div class=\"fb-quote fb_iframe_widget\" style=\"text-align: justify;\" data-layout=\"quote\"><iframe title=\"fb:quote Facebook Social Plugin\" src=\"https://www.facebook.com/v2.8/plugins/quote.php?app_id=1410230139213728&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Df2229effe1641f8%26domain%3Dikon.mn%26origin%3Dhttps%253A%252F%252Fikon.mn%252Ff1ca6c3dd6cfc84%26relation%3Dparent.parent&amp;container_width=680&amp;href=https%3A%2F%2Fikon.mn%2Fn%2F1iiy&amp;layout=quote&amp;locale=mn_MN&amp;sdk=joey\" name=\"f1f00985da2fa7c\" width=\"1000px\" height=\"1000px\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-mce-fragment=\"1\"></iframe></div>\r\n<p style=\"text-align: justify;\">Тухайн протокол нь Төрийн нууцын хуулиар нууц дардас дарсан байсныг нууцаас гаргасан юм. Төрийн нууц материалыг хэн бугай нь ч ярьж, ил гаргаж болдоггүй. Эс бөгөөс 8 жилийн ялтай. Тиймээс хууль, хяналтынхан ярьж хэлэлцэж болох материал ил болж байгаа нь энэ аж.</p>\r\n<p style=\"text-align: justify;\">Тус&nbsp;&nbsp;протокол нь 2016 оны 6-р сарын 9-ний өдрийн&nbsp;хурал юм байна. Энэ нь Ч.Сайханбилэгийн ЗГ хойд хөршөөс ЭҮ-ийн&nbsp;49 хувийг худалдаж авах давуу эрхээсээ татгалзаж, дөнгөж байгуулагдсан үйл ажиллагаагүй \"Монголын зэс корпораци\"-д худалдах тухай нууц горимоор хуралдсан хуралдаан байжээ.</p>\r\n<p style=\"text-align: justify;\">Өмнө нь&nbsp;<a href=\"https://ikon.mn/n/v3g\" target=\"_blank\">Засгийн газар 2016 оны 6-р сарын 16 өдрийн буюу хоёр дахь нууц хуралдааны протоколыг ил болгосон</a>&nbsp;байсан юм. ЗГ-ын энэ удаа ил болгосон нууц протокол нь Худалдаа Хөгжлийн банк,&nbsp;Монголын зэс корпораци хоёр удирдлага санхүүгийн хувьд нэг гэдэг нь нотлогдож байгаа ажээ.</p>\r\n<p style=\"text-align: justify;\"><em>Нууцаас гарч буй тэмдэглэлийн хэсгийг харвал:</em></p>\r\n<div class=\"ikonmedia margin-bottom16  medialoaded\" style=\"text-align: justify;\" contenteditable=\"false\"><img class=\"thumb\" src=\"https://content.ikon.mn/news/2019/3/2/379e34_E4FE05F2-064B-43EE-B2CA-5DAD85578F7A_ph.jpg\" /><img class=\"ikonlazy loaded\" src=\"https://content.ikon.mn/news/2019/3/2/379e34_E4FE05F2-064B-43EE-B2CA-5DAD85578F7A_x974.jpg\" data-action=\"zoom\" />\r\n<div class=\"ikonarsave\">&nbsp;</div>\r\n</div>\r\n<div class=\"ikonmedia margin-bottom16  medialoaded\" style=\"text-align: justify;\" contenteditable=\"false\"><img class=\"thumb\" src=\"https://content.ikon.mn/news/2019/3/2/f4fb2a_A63159C6-3B5F-4F63-A93D-024BBA49FAA1_ph.jpg\" /><img class=\"ikonlazy loaded\" src=\"https://content.ikon.mn/news/2019/3/2/f4fb2a_A63159C6-3B5F-4F63-A93D-024BBA49FAA1_x974.jpg\" data-action=\"zoom\" />\r\n<div class=\"ikonarsave\">&nbsp;</div>\r\n</div>\r\n<p class=\"phalf\" style=\"text-align: justify;\">Энэ тэмдэглэлийг бүрэн эхээр нь Даваа гарагт олон нийтэд танилцуулах хүлээлт байна.</p>', 'images/2019_03_03_1551597190_379e34_E4FE05F2-064B-43EE-B2CA-5DAD85578F7A_x974.jpg', '2019-03-03 15:13:10'),
(14, 6, 'Америкчууд дахин өөрсдөө сансарт хүн нисгэж эхлэх цаг ойртлоо', '<p style=\"text-align: justify;\">SpaceX компани өөрийн бүтээсэн Crew Dragon хөлгийг амжилттай хөөргөснөөр АНУ-ын газар шороон дээрээс сансарт хүн хөөргөх боломж ойртож байгааг NASA өчигдөр мэдэгджээ.</p>\r\n<div class=\"fb-quote fb_iframe_widget\" style=\"text-align: justify;\" data-layout=\"quote\">&nbsp;</div>\r\n<p style=\"text-align: justify;\">Өчигдөр өглөө уг сансрын хөлгийг Falcon 9 пуужинд тээвэрлэн сансарт хөөргөх ажиллагаа Флоридагийн Кеннедийн нэрэмжит сансрын төвд болсон юм.</p>\r\n<p style=\"text-align: justify;\">Crew Dragon хөлгийг Ням гарагт Олон Улсын Сансрын Станцад залгаж, тойрог замд хүн ажиллах боломжийг шалгах таван өдрийн туршилтыг эхлүүлэх ажээ.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Хэрвээ туршилт амжилттай болвол ирэх долдугаар сард Америкчууд өөрсдөө хүн сансарт нисгэх юм.</p>\r\n<p style=\"text-align: justify;\">Тус улс 2011 оны долдугаар сард NASA-гийн хүн сансарт илгээх хөтөлбөрийг зогсоосноор сүүлийн найман жилийн турш Оросын пуужинг ашиглан сансрын нисгэгчдээ тойрог замд илгээж байгаа.</p>\r\n<p style=\"text-align: justify;\">Ингэхдээ нэг сансрын нисгэгчид $81 саяыг төлж нисгэдэг байна.</p>\r\n<p style=\"text-align: justify;\">Crew Dragon хөлгийг хөөргөсний дараа NASA-гийн захирал Жим Бриденстин &ldquo;Өнөөдрийн амжилттай хөөргөлт нь Америкийн хүчин чадлыг харуулах шинэ хуудсыг нээж, Америкийн сансрын нисгэгчид Америкийн хөрс шороон дээрээс Америкийн пуужингаар дахин хөөрч эхлэх цагийг ойртууллаа&rdquo; хэмээн твиттер хуудсандаа бичжээ.</p>\r\n<p style=\"text-align: justify;\">Хувийн хэвшилд тулгуурласан өөрийн сансрын хөтөлбөрийг хэрэгжүүлэхийн хажуугаар ОХУ-тай сансрын салбарт хамтын ажиллагаагаа хэвээр үргэлжлүүлэх хүсэлтэй байгаагаа тэр дараа нь болсон хэвлэлийн хурал дээр мэдэгдсэн юм.</p>\r\n<p style=\"text-align: justify;\">Ирэх зун сансарт хөөрөхөөр нэр нь тодроод байгаа нисгэгчид болох Даг Харли, Роберт Бенкен нар өчигдрийн арга хэмжээг SpaceX компанийн хяналтын өрөөнөөс ажигласан байна.</p>', 'images/2019_03_03_1551597448_6f3619_falcon_9_spacex_x974.jpg', '2019-03-03 15:17:28'),
(15, 6, 'ИНФОГРАФИК: Төрөөс зээл авч гадаадад сураад ор сураггүй болсон 179 хүний НЭР ба ЗЭЭЛИЙН ХЭМЖЭЭ', '<div class=\"itype\" style=\"text-align: justify;\">IKON.MN</div>\r\n<div class=\"icontent\" style=\"text-align: justify;\">\r\n<p>Төрийн сангууд буюу татвар төлөгчдийн мөнгөнөөс олгодог зээлийн сангуудын хяналтгүй зарцуулалтын талаар үргэлжлүүлэн хөндөж байна.</p>\r\n<p>Энэ удаад&nbsp;<a href=\"https://ikon.mn/\" target=\"_blank\">iKon.mn</a>&nbsp;Боловсролын Зээлийн Сан (БЗС) буюу оюутнуудын гадаад болон дотоодод сурахад дэмжиж зээл өгдөг байгууллагын мэдээллийг цувралаар олон нийтэд хүргэхээр эхний материалаа нийтэлж&nbsp;байна.</p>\r\n<p>Бидэнд олдсон мэдээллээр&nbsp;<strong>гадаадын их, дээд сургуульд</strong>&nbsp;сурахаар зээл авсан 1,860 орчим оюутан байгаагаас өнөөдрийн байдлаар 179 нь ор сураггүй буюу БЗС-нд ямар ч бүртгэлгүй хүн байна.&nbsp;<span class=\"ikon-shareable-twitter\">Эдгээр 179 иргэний зээлийн үлдэгдэл болох 4.5 сая долларын авлага үүсээд байгаа юм.</span></p>\r\n<p>Хоёр жилийн өмнө БЗС гадаадад зээлээр суралцагчдаас огт эргэн төлөлт хийхгүй байгаа 400 орчим иргэнийг танилцуулсны дүнд зарим хүний зээлээ эргэн төлөх идэвх нэмэгдэж тоонд ийнхүү өөрчлөлт орсон бололтой.</p>\r\n<p>Тус сангаас төр засагт ажиллаж байх явцдаа зээл авч хүүхдээ гадаадад сургасан олон эрхмийн тухай хөндөгддөг ч тэд мэдээлэл задарсны дараа төлбөрөө төлж эхэлсэн бололтой. Гэхдээ энэ мэдээллийг ил тод болгохын төлөө бид ажиллах болно. Учир нь БЗС-нд төсөвлөгддөг мөнгө бол татвар төлөгчдийн мөнгө.&nbsp; Монгол Улсын иргэн бүр энэ сангийн оюутан шалгаруулалтын зарчим үнэн зөв явагдаж байгаа эсэх,&nbsp; шалгарсан этгээдүүдийг&nbsp;мэдэх ЭРХТЭЙ.</p>\r\n<p>Дотоодын сургуульд сурахаар зээл авсан зээлдэгчдийн тухайд, 1993 оноос 14,000 гаруй оюутны 15 тэрбум төгрөгийн зээл эргэн төлөгдөөгүй,&nbsp;эдгээр төгсөгчийн&nbsp;диплом<span style=\"text-decoration: line-through;\">н</span>ууд&nbsp;БЗС дээр хадгалаастай&nbsp;байна.</p>\r\n<p>Өөрөөр хэлбэл дотоодын их дээд сургуульд суралцагчдын тухайд мөн л зээлээ эргэн төлөөгүй 14 мянга гаруй хүн байна гэсэн үг. Гэхдээ дотоодын сургуульд зээлээр суралцагчдын хувьд харьцангуй амьдралын хүнд нөхцөлийн улмаас зээл авах магадлал өндөр хүмүүс байхыг үгүйсгэхгүй.</p>\r\n<p>Харин бид гадаадад өндөр хэмжээний төлбөр авч сурах боломжоор хэн хангагдаж байна вэ, тэд зээлээ эргэн төлж байна уу гэдэгт илүү анхаарлаа хандуулж байна.</p>\r\n<p><em><strong>Юуны түрүүнд гадаадад сурсан ч ор сураггүй болсон 179 хүний нэрийг танилцуулъя.</strong></em></p>\r\n<p><em>(График дээгүүр хулганаа чирж дэлгэрэнгүй мэдээлэлтэй танилцах боломжтой)</em></p>\r\n</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div class=\"fb_share_article\">&nbsp;</div>', 'images/2019_03_03_1551597561_scholarship_application.jpg', '2019-03-03 15:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `visited` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `email`, `phone`, `body`, `visited`, `datetime`) VALUES
(4, 'Adiya Ganbat', 'yagamipassion0322@gmail.com', 95522065, 'it is a Test ver-2', '1', '2019-03-03 19:35:39'),
(7, 'Adiya Ganbat', 'yagamipassion0322@gmail.com', 95522065, 'dada', '1', '2019-03-04 15:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `torol_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `torol_id`, `title`, `body`, `file`, `datetime`) VALUES
(3, 3, 'Дархан-Уул аймгийн Төсвийн ерөнхийлөн захирагчийн 2019 оны Худалдан авах ажиллагааны Нэгтгэл төлөвлөгөө', '<p data-reactid=\".x47vihjshs.3.0.0.0.0.0.1\">Дархан-Уул аймгийн Төсвийн ерөнхийлөн захирагчийн 2019 оны Худалдан авах ажиллагааны Нэгтгэл төлөвлөгөө</p>', 'files/2019_03_02_1551506309_Test.docx', '2019-03-02 13:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `tender_torol`
--

CREATE TABLE `tender_torol` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tender_torol`
--

INSERT INTO `tender_torol` (`id`, `name`) VALUES
(2, 'Тендерийн урилга'),
(3, 'Aлбаны төлөвлөгөө'),
(4, 'Тендерийн үр дүн, тайлан мэдээ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `question`, `answer`, `ip`, `datetime`) VALUES
(4, 6, 25, '::1', '2019-03-04'),
(5, 6, 25, '::1', '2019-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `vote_answer`
--

CREATE TABLE `vote_answer` (
  `id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vote_answer`
--

INSERT INTO `vote_answer` (`id`, `ques_id`, `answer`) VALUES
(25, 6, 'Google Chrome'),
(26, 6, 'Mozilla Firefox'),
(27, 6, 'Safari');

-- --------------------------------------------------------

--
-- Table structure for table `vote_question`
--

CREATE TABLE `vote_question` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vote_question`
--

INSERT INTO `vote_question` (`id`, `title`, `end_time`) VALUES
(6, '<p>Та аль интернет хөтөчийг илүү ашиглдаг вэ?</p>', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `web_visited`
--

CREATE TABLE `web_visited` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  `datetime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `web_visited`
--

INSERT INTO `web_visited` (`id`, `ip_address`, `counter`, `datetime`) VALUES
(1, '::1', 0, '2019-03-03'),
(2, '127.0.0.1', 0, '2019-03-02\r\n'),
(3, '127.0.0.1', 0, '2019-03-02'),
(4, '127.0.0.1', 0, '2019-03-01'),
(5, '::1', 0, '2019-03-04'),
(6, '::1', 0, '2019-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`),
  ADD KEY `torol_id` (`torol_id`);

--
-- Indexes for table `tender_torol`
--
ALTER TABLE `tender_torol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question` (`question`),
  ADD KEY `answer` (`answer`);

--
-- Indexes for table `vote_answer`
--
ALTER TABLE `vote_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ques_id` (`ques_id`);

--
-- Indexes for table `vote_question`
--
ALTER TABLE `vote_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_visited`
--
ALTER TABLE `web_visited`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tender_torol`
--
ALTER TABLE `tender_torol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vote_answer`
--
ALTER TABLE `vote_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vote_question`
--
ALTER TABLE `vote_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_visited`
--
ALTER TABLE `web_visited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `tender`
--
ALTER TABLE `tender`
  ADD CONSTRAINT `tender_torol_id` FOREIGN KEY (`torol_id`) REFERENCES `tender_torol` (`id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`question`) REFERENCES `vote_question` (`id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`answer`) REFERENCES `vote_answer` (`id`);

--
-- Constraints for table `vote_answer`
--
ALTER TABLE `vote_answer`
  ADD CONSTRAINT `vote_answer_ibfk_1` FOREIGN KEY (`ques_id`) REFERENCES `vote_question` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
