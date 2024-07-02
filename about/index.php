<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "теewfewfwefст+");
$APPLICATION->SetPageProperty("description", "О нашей компании+");
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('TITLE', 'О нас | We Codes');
$_SERVER['SERVER_SOFTWARE']
?>
<?= 'Description =' . $APPLICATION->GetPageProperty("description"); ?>

<p>О нас текст</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>