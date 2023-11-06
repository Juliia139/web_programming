<?php
$dom_xml= new DOMDocument();
$dom_xml->loadXML('<car><model>BMW 525i</model><model>Ford Focus 2</model></car>');
// Записуємо назву моделі у змінну
$mod=$dom_xml->getElementsByTagName("model");
// Відображення даних
foreach ($mod as $element)
{
    echo $element->nodeValue." ".$element->nodeName." ".'<br />';
}
?>