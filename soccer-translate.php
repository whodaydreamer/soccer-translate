<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
/*
Plugin name: WP Translate
Plugin URI: http://www.google.com
Description: A plugin have a check and translate language
Author: Supphachok Phetkaew
Author URI: http://www.google.com
*/

function wp_translate_page(){
global $wptranslate_options;
ob_start();?>

<div class="wrap">

<form action="#" method="POST">
<p>
<h1>Translate Team Football Version 1.0</h1>
</p>

<?php

$input_team_th =''; // ป้อนค่าภาษาไทยเพื่อแปลเป็นอังกฤษ

$list_team_en = array(
	//Euro 2016 (National Team)
	"ฝรั่งเศส" => "France",
	"อังกฤษ" => "English",
	"สาธารณรัฐเช็ก" => "Czech Republic",
	"ไอซ์แลนด์" => "Iceland",
	"ไอซ์แลนด์เหนือ" => "Northern Ireland",
	"ออสเตรีย" => "Austria",
	"โปรตุเกส" => "Portugal",
	"สเปน" => "Spain",
	"สวิตเซอร์แลนด์" => "Switzerland",
	"อิตาลี่" => "Italy",
	"เบลเยี่ยม" => "Belgium",
	"เวลส์" => "Wales",
	"โรมาเนีย" => "Romania",
	"แอลเบเนีย" => "Albania",
	"เยอร์มนี" => "Germany",
	"โปแลนด์" => "Poland",
	"รัสเซีย" => "Russia",
	"สโลวาเกีย" => "Slovakia",
	"โครเอเชีย" => "Croatia",
	"ตุรกี" => "Turkey",
	//English 2016-2017 (Premier Leage)
	"มิดเดิลสโปรห์" => "Middlesbrough",
	"เวสต์ บรอมมิช อัลเบียน" => "West Bromwich Albion",
	"อาร์เซน่อล" => "Arsenal",
	"เชลซี" => "Chelsea",
	"ลิเวอร์พูล" => "Liverpool",
	"แมนเชสเตอร์ ซิตี้" => "Manchester City",
	"แมนเชสเตอร์ ยูไนเต็ด" => "Manchester United",
	"เซาแธมป์ตัน" => "Southampton",
	"เอฟเวอร์ตัน" => "Everton",
	"ท็อตแน่ม ฮ็อทสเปอร์" => "Tottenham Hotspur",
	"คริสตัล พาเลซ" => "Crystal Palace",
	"เบิร์นลี่ย์" => "Burnley",
	"วัดฟอร์ด" => "Watford",
	"สโต๊ค ซิตี้" => "Stoke City",
	"เลสเตอร์ ซิตี้" => "Leicester City",
	"เวสต์แฮมยูไนเต็ด" => "West Ham United",
	"ซันเดอร์แลนด์" => "Sunderland",
	"บอร์นมัธ" => "Bournemouth",
	"ฮัลล์ ซิตี้" => "Hull City",
	"สวอนซี ซิตี้" => "Swansea City",
	//English Championship 2016-2017
	"แอสตัน วิลล่า" => "Aston Villa",
	"แบล็คเบิร์น โรเวอร์ส" => "Blackburn Rovers",
	"นิวคาสเซิ่ล ยูไนเต็ด" => "Newcastle United",
	"ฟูแล่ม" => "Fulham",
	"เบอร์มิงแฮม ซิตี้" => "Brimingham City",
	"นอริช ซิตี้" => "Norwich City",
	"ดาร์บี้ เค้าท์ตี้" => "Derby County",
	"น็อตติ้งแฮม ฟอเรสต์" => "Nottingham Forest",
	"ควีนส์ปาร์ค เรนเจอร์ส" => "Queens Park Rangers",
	"วูล์ฟแฮมป์ตัน" => "Wolverhamtop",
	"ร็อตเธอร์แฮม ยูไนเต็ด" => "Rotherham United",
	"เพรสตัน นอร์ท เอนด์" => "Preston North End",
	"ลีดส์ ยูไนเต็ด" => "Leeds United",
	"ไบรท์ตัน โฮฟ อัลเบี้ยน" => "Brighton and Hove Albion",
	"วีแกน แอธเลติก" => "Wigan Athletic",
	"คาร์ดิฟฟ์ซิตี้" => "Cardiff City",
	"เร้ดดิ้ง" => "Reading",
	"อิปสวิช ทาวน์" => "Ipswich Town",
	"เซฟฟิลด์ เว้นส์เดย์" => "Sheffield Wednesday",
	"ฮัดเดอร์ฟิลด์ ทาวน์" => "Huddersfield Town",
	"เบรนท์ฟอร์ด" => "Brentford",
	"บาร์นสลีย์" => "Barnsley",
	"บริสตอล ซิตี้" => "Bristol City",
	"เบอร์ตัน อัลเบี้ยน" => "Burton Albion",
	//Italy Serie A 2015-2016
	"ยูเวนตุส" => "Juventus",
	"นาโปลี"  => "Napoli",
	"โรม่า" => "AS Roma",
	"อินเตอร์ มิลาน" => "Inter",
	"ฟิออเรนติน่า" => "Florentina",
	"ซาสซูโอโล่" => "Sassuolo",
	"เอซี มิลาน" => "AC Milan",
	"ลาซิโอ" => "Lazio",
	"คิเอโว" => "Chievo",
	"เจนัว" => "Genoa",
	"เอ็มโปลี" => "Empoli",
	"อตาลันต้า" => "Atalanta",
	"โตริโน่" => "Torino",
	"โบโลญญ่า" => "Bologna",
	"ซามพ์โดเรีย" => "Sampdoria",
	"อูดิเนเซ่" => "Udinese",
	"ปาแลร์โม่" => "Palermo",
	"คาร์ปิ" => "Carpi",
	"โฟรซิโนเน่" => "Frosinone",
	"เวโรน่า" => "Verona",
	//Primera Division 2015-2016
	"บาร์เซโลน่า" => "Barcelona",
	"เรอัล มาดริด" => "Real Mardrid",
	"แอต มาดริด" => "Atl. Mardrid",
	"บียาร์เรอัล" => "Villarreal",
	"แอธ บิลเบา" => "Ath Bilbao",
	"เซลต้า บีโก้" => "Celta Vigo",
	"เซบีย่า" => "Sevilla",
	"มาลาก้า" => "Malaga",
	"เรอัล โซเซียดาด" => "Real Sociedad",
	"เรอัล เบติส" => "Betis",
	"บาเลนเซีย" => "Valencia",
	"ลาส ปัลมาส" => "Las Palmas",
	"เออิบาร์" => "Eibar",
	"เอสปันญ่อล" => "Espanyol",
	"ลา กอรุนญ่า" => "Dep. La Coruna",
	"สปอร์ติ้ง กิฆอน" => "Gijon",
	"กรานาด้า" => "Granada CF",
	"ราโย บาเยกาโน่" => "Rayo Vallecano",
	"เคตาเฟ่" => "Getafe",
	"เลบันเต้" => "Levante",
	//Ligue 1 2015-2016
	"เปแอสเช" => "Paris SG",
	"ลียง" => "Lyon",
	"โมนาโก" => "Monaco",
	"นีซ" => "Nice",
	"ลีลล์" => "LOSC",
	"แซงต์ เอเตียน" => "St Etienne",
	"ก็อง" => "Caen",
	"แรนส์" => "Rennes",
	"บอร์กโดซ์" => "Bordeaux",
	"อองเช่ร์" => "Angers SCO",
	"บาสเตีย" => "SC Bastia",
	"มงต์เปลลิเย่ร์" => "Montpellier",
	"มาร์กเซย" => "Marseille",
	"น็องต์" => "Nantes",
	"ลอริยองต์" => "Lorient",
	"แก็งก็อง" => "Guingamp",
	"ตูลูส" => "Toulouse",
	"แร็งส์" => "Reims",
	"กาเซเล็ก อฌักซิโอ้" => "Ajaccio",
	"ทรัวส์" => "Troyes",
	//Bundesliga 2015-2016
	"บาเยิร์น มิวนิค" => "Bayern Munich",
	"ดอร์ทมุนด์" => "Dortmund",
	"เลเวอร์คูเซ่น" => "Bayer Leverkusen",
	"มึนเช่นกลัดบัค" => "Monchengladbach",
	"ชาลเก้ 04" => "Schalke 04",
	"ไมนซ์" => "Mainz",
	"แฮร์ธ่า เบอร์ลิน" => "Hertha BSC",
	"โวล์ฟสบวร์ก" => "Wolfsburg",
	"โคโลญจน์" => "Koln",
	"ฮัมบูร์ก" => "Hamburger",
	"อิงโกลสตัดท์" => "Ingolstadt",
	"เอาก์สบวร์ก" => "Augsburg",
	"เบรเมน" => "Werder",
	"ดาร์มสตัดท์" => "Darmstadt",
	"ฮอฟเฟ่นไฮม์" => "Hoffenheim",
	"แฟร้งค์เฟิร์ต" => "Eintracht",
	"สตุ๊ดการ์ท" => "Stuttgart",
	"ฮันโนเวอร์" => "Hannover"
);

$input_team_th = strtr($input_team_th,$list_team_en);

 echo $input_team_th; // ค่าที่นำไปแสดงผลแปลจากไทยเป็นอังกฤษ
echo "<br/>";
$input_team_en =''; // ป้อนค่าภาษาอังกฤษเพื่อแปลเป็นไทย

$list_team_th = array(
	//Euro 2016 (National Team)
	"France" => "ฝรั่งเศส",
	"English" => "อังกฤษ",
	"Czech Republic" => "สาธารณรัฐเช็ก",
	"Iceland" => "ไอซ์แลนด์",
	"Northern Ireland" => "ไอซ์แลนด์เหนือ",
	"Austria" => "ออสเตรีย",
	"Portugal" => "โปรตุเกส",
	"Spain" => "สเปน",
	"Switzerland" => "สวิตเซอร์แลนด์",
	"Italy" => "อิตาลี่",
	"Belgium" => "เบลเยี่ยม",
	"Wales" => "เวลส์",
	"Romania" => "โรมาเนีย",
	"Albania" => "แอลเบเนีย",
	"Germany" => "เยอร์มนี",
	"Poland" => "โปแลนด์",
	"Russia" => "รัสเซีย",
	"Slovakia" => "สโลวาเกีย",
	"Croatia" => "โครเอเชีย",
	"Turkey" => "ตุรกี",
	//English 2016-2017 (Premier Leage)
	"Middlesbrough" => "มิดเดิลสโปรห์",
	"West Bromwich Albion" => "เวสต์ บรอมมิช อัลเบียน",
	"Arsenal" => "อาร์เซน่อล",
	"Chelsea" => "เชลซี",
	"Liverpool" => "ลิเวอร์พูล",
	"Manchester City" => "แมนเชสเตอร์ ซิตี้",
	"Manchester United" => "แมนเชสเตอร์ ยูไนเต็ด",
	"Southampton" => "เซาแธมป์ตัน",
	"Everton" => "เอฟเวอร์ตัน",
	"Tottenham Hotspur" => "ท็อตแน่ม ฮ็อทสเปอร์",
	"Crystal Palace" => "คริสตัล พาเลซ",
	"Burnley" => "เบิร์นลี่ย์",
	"Watford" => "วัดฟอร์ด",
	"Stoke City" => "สโต๊ค ซิตี้",
	"Leicester City" => "เลสเตอร์ ซิตี้",
	"West Ham United" => "เวสต์แฮมยูไนเต็ด",
	"Sunderland" => "ซันเดอร์แลนด์",
	"Bournemouth" => "บอร์นมัธ",
	"Hull City" => "ฮัลล์ ซิตี้",
	"Swansea City" => "สวอนซี ซิตี้",
	//English Championship 2016-2017
	"Aston Villa" => "แอสตัน วิลล่า",
	"Blackburn Rovers" => "แบล็คเบิร์น โรเวอร์ส",
	"Newcastle United" => "นิวคาสเซิ่ล ยูไนเต็ด",
	"Fulham" => "ฟูแล่ม",
	"Brimingham City" => "เบอร์มิงแฮม ซิตี้",
	"Norwich City" => "นอริช ซิตี้",
	"Derby County" => "ดาร์บี้ เค้าท์ตี้",
	"Nottingham Forest" => "น็อตติ้งแฮม ฟอเรสต์",
	"Queens Park Rangers" => "ควีนส์ปาร์ค เรนเจอร์ส",
	"Wolverhamtop" => "วูล์ฟแฮมป์ตัน",
	"Rotherham United" => "ร็อตเธอร์แฮม ยูไนเต็ด",
	"Preston North End" => "เพรสตัน นอร์ท เอนด์",
	"Leeds United" => "ลีดส์ ยูไนเต็ด",
	"Brighton and Hove Albion" => "ไบรท์ตัน โฮฟ อัลเบี้ยน",
	"Wigan Athletic" => "วีแกน แอธเลติก",
	"Cardiff City" => "คาร์ดิฟฟ์ซิตี้",
	"Reading" => "เร้ดดิ้ง",
	"Ipswich Town" => "อิปสวิช ทาวน์",
	"Sheffield Wednesday" => "เซฟฟิลด์ เว้นส์เดย์",
	"Huddersfield Town" => "ฮัดเดอร์ฟิลด์ ทาวน์",
	"Brentford" => "เบรนท์ฟอร์ด",
	"Barnsley" => "บาร์นสลีย์",
	"Bristol City" => "บริสตอล ซิตี้",
	"Burton Albion" => "เบอร์ตัน อัลเบี้ยน",
	//Italy Serie A 2015-2016
	"Juventus" => "ยูเวนตุส",
	"Napoli"  => "นาโปลี",
	"AS Roma" => "โรม่า",
	"Inter" => "อินเตอร์ มิลาน",
	"Florentina" => "ฟิออเรนติน่า",
	"Sassuolo" => "ซาสซูโอโล่",
	"AC Milan" => "เอซี มิลาน",
	"Lazio" => "ลาซิโอ",
	"Chievo" => "คิเอโว",
	"Genoa" => "เจนัว",
	"Empoli" => "เอ็มโปลี",
	"Atalanta" => "อตาลันต้า",
	"Torino" => "โตริโน่",
	"Bologna" => "โบโลญญ่า",
	"Sampdoria" => "ซามพ์โดเรีย",
	"Udinese" => "อูดิเนเซ่",
	"Palermo" => "ปาแลร์โม่",
	"Carpi" => "คาร์ปิ",
	"Frosinone" => "โฟรซิโนเน่",
	"Verona" => "เวโรน่า",
	//Primera Division 2015-2016
	"Barcelona" => "บาร์เซโลน่า",
	"Real Mardrid" => "เรอัล มาดริด",
	"Atl. Mardrid" => "แอต มาดริด",
	"Villarreal" => "บียาร์เรอัล",
	"Ath Bilbao" => "แอธ บิลเบา",
	"Celta Vigo" => "เซลต้า บีโก้",
	"Sevilla" => "เซบีย่า",
	"Malaga" => "มาลาก้า",
	"Real Sociedad" => "เรอัล โซเซียดาด",
	"Betis" => "เรอัล เบติส",
	"Valencia" => "บาเลนเซีย",
	"Las Palmas" => "ลาส ปัลมาส",
	"Eibar" => "เออิบาร์",
	"Espanyol" => "เอสปันญ่อล",
	"Dep. La Coruna" => "ลา กอรุนญ่า",
	"Gijon" => "สปอร์ติ้ง กิฆอน",
	"Granada" => "กรานาด้า",
	"Rayo Vallecano" => "ราโย บาเยกาโน่",
	"Getafe" => "เคตาเฟ่",
	"Levante" => "เลบันเต้",
	//Ligue 1
	"Paris SG" => "เปแอสเช",
	"Lyon" => "ลียง",
	"Monaco" => "โมนาโก",
	"Nice" => "นีซ",
	"LOSC" => "ลีลล์",
	"St Etienne" => "แซงต์ เอเตียน",
	"Caen" => "ก็อง",
	"Rennes" => "แรนส์",
	"Bordeaux" => "บอร์กโดซ์",
	"Angers SCO" => "อองเช่ร์",
	"SC Bastia" => "บาสเตีย",
	"Montpellier" => "มงต์เปลลิเย่ร์",
	"Marseille" => "มาร์กเซย",
	"Nantes" => "น็องต์",
	"Lorient" => "ลอริยองต์",
	"Guingamp" => "แก็งก็อง",
	"Toulouse" => "ตูลูส",
	"Reims" => "แร็งส์",
	"Ajaccio" => "กาเซเล็ก อฌักซิโอ้",
	"Troyes" => "ทรัวส์",
	//Bundesliga 2015-2016
	"Bayern Munich" => "บาเยิร์น มิวนิค",
	"Dortmund" => "ดอร์ทมุนด์",
	"Bayer Leverkusen" => "เลเวอร์คูเซ่น",
	"Monchengladbach" => "มึนเช่นกลัดบัค",
	"Schalke 04" => "ชาลเก้ 04",
	"Mainz" => "ไมนซ์",
	"Hertha BSC" => "แฮร์ธ่า เบอร์ลิน",
	"Wolfsburg" => "โวล์ฟสบวร์ก",
	"Koln" => "โคโลญจน์",
	"Hamburger" => "ฮัมบูร์ก",
	"Ingolstadt" => "อิงโกลสตัดท์",
	"Augsburg" => "เอาก์สบวร์ก",
	"Werder" => "เบรเมน",
	"Darmstadt" => "ดาร์มสตัดท์", 
	"Hoffenheim" => "ฮอฟเฟ่นไฮม์",
	"Eintracht" => "แฟร้งค์เฟิร์ต",
	"Stuttgart" => "สตุ๊ดการ์ท",
	"Hannover" => "ฮันโนเวอร์"
);

$input_team_en = strtr($input_team_en,$list_team_th);

  echo $input_team_en; // ค่าที่นำไปแสดงผลแปลจากอังกฤษเป็นไทย

?>
</form>

<?php

echo ob_get_clean();
}

//admin tab

function wp_translate_tab(){

add_options_page('wp_translate_tab','WP Translate','manage_options','wptranslate','wp_translate_page');

}
add_action('admin_menu','wp_translate_tab');

//register settings

function wp_translate_setting(){

register_setting('wptranslategroup','wptranslatesettings');

}
add_action('admin_init','wp_translate_setting');

/*
function sct_trans_th($name)
{
	return $arr[$name];
}

function sct_trans_en($name)
{
	return $arr[$name];
}

function data()
{

    $a = "abc";
    $b = "def";
    $c = "ghi";

    $array = array($a, $b, $c);

    print_r($array);//outputs the key/value pair

    echo "<br>";

    echo $array[0].$array[1].$array[2];//outputs a concatenation of the values

}

data();

*/
?>