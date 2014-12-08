<?php

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype
 * @subpackage     geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.geogebra.org/license
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] => 'Lägg till begränsningar (bivillkor) till variabler.';,
$string['addmorevarblanks'] => 'Mallar för {no} fler variabler';,
$string['answerinvalid'] => 'Svarstexten i svaret är ogiltig. Det här borde inte hända - och ändå har det gjort det!';,
$string['answermissing'] => 'Svarstexten är tom. Troligen är JavaScript inte aktiverat i webbläsaren eller så har ett okänt fel inträffat';,
$string['answervar'] => 'Variabler för automatisk rättning';,
$string['answervar_help'] => 'För automatisk rättning: Namnet på ett booleskt objekt i GeoGebra som har värdet \'true\' om eleven löste frågan (åtminstone delvis). Summerar alla poäng för alla booleska variabler. Frågan anses korrekt om någon kombination överstiger 100%, men det bör finnas minst en kombination vars summa blir exakt 100%. Lämna fältet blankt för manuell rättning. \n\nA name of a boolean object in GeoGebra which is true if the student solved the question (partly). Sums up all grades for all boolean variables. The question is correct if any combination exceeds 100%, but there should be at least one combination which sums up to exactly 100%. Leave blank for manual grading.';,
$string['constraints'] => 'Begränsningar (bivillkor)';,
$string['constraints_help'] => 'Finns det några begränsningar (bivillkor för variabler, t.ex. a < b, som inte gått att definiera med glidarinställningar? Ange dessa separerade med kommatecken. Stöder <, <=, > och >=. Om du behöver en likhet så måste du använda samma variabel när du skapar arbetsbladet. Dynamiska intervall, dvs att använda variabler i glidarinställningarna för max- och minvärdena stödjs ej.';,
$string['constraintswrongortoohard'] => 'Villkoret {$a->inequalities} är fel eller för svårt att uppfylla, vi försökte (med brute force) {$a->tries} gånger på {$a->time} sekunder. Kanske kommer vi att använda en bättre metod i framtiden...';,
$string['feedback'] => 'Feedback när variabeln är \'true\'';,
$string['feedback_help'] => 'Denna feedback tas automatiskt från förklaringen till variabeln i GeoGebrafilen.';,
$string['geogebraapplet'] => 'GeoGebra applet';,
$string['getvars'] => 'Hämta variabler som kan bli slumpade från denna applet';,
$string['ggbfilemissing'] => 'base64-strängen är tom. Troligen är JavaScript inte aktiverat i webbläsaren eller så har ett okänt fel inträffat';,
$string['ggbturl'] => 'URL eller ID-numret till GeoGebraTube-arbetsbladet';,
$string['ggbturl_help'] => 'Du kan antingen använda "Dela-knappen" på GeoGebraTube och klippa och klistra länken, eller använda GeoGebraTude materialdatabas. Appleten och parametrarna lagras i databasen. Appleten kommer inte att laddas om från GeoGebraTube om du inte begär detta. Du kan även ange ID eller en delningsnyckel till appleten.';,
$string['ggbxmlmissing'] => 'XML-strängen i svaret saknas.  Troligen är JavaScript inte aktiverat i webbläsaren, eller så har ett okänt fel inträffat';,
$string['invalidinequality'] => '{$a} är inte giltig';,
$string['israndomized'] => 'Finns det några variabler som skall slumpas?';,
$string['loadapplet'] => 'Ladda (om) och visa appleten';,
$string['loadapplet_help'] => 'Ladda (om) appleten från GeoGebraTube och lagra den nya versionen från GeoGebraTube i databasen.';,
$string['mineqmax'] => 'Min- och Max-värdena för slumpningen är inte korrekt specificerade för variabel {$a}. Antingen har du inte specificerat glidarens min- och max-värden eller så är {$a} inte en glidare alls. Du måste antagligen korrigera detta i din GeoGebrafil.';,
$string['minplusstepgtmax'] => 'Minsta värdet + steglängden är större än största värdet för variabel {$a}. Du måste antagligen korrigera detta i din GeoGebrafil.';,
$string['noappletloaded'] => 'No Applet loaded! Check if URL is correct and if you see an applet after choosing a link or (re)loading the applet';,
$string['nofractionsumeq1'] => 'Minst en kombination av poäng måste summeras till 100%';,
$string['pluginname_help'] => 'Frågor där eleverna kan lösa frågan med GeoGebra';,
$string['pluginnameadding'] => 'Lägg till en GeoGebrafråga';,
$string['pluginnameediting'] => 'Redigera en GeoGebrafråga';,
$string['pluginnamesummary'] => 'En version av en beräknad fråga som använder GeoGebra för att visa frågan och verfiera svaret när testet tas.';,
$string['randomizedbutnovars'] => 'Du har valt att slumpa frågan, men har inte angett någon variabel som ska slumpas.';,
$string['randomizedvar'] => 'Variabler som ska slumpas';,
$string['randomizedvar_help'] => 'Variabler som ska slumpas (kommaseparerade). Använd glidaregenskaperna i GeoGebra gör att ange minsta och största värde samt steglängden. Dessa variabler kan även användas i frågetexten genom att omgärda dem med klamrat, t.ex: {a}';,
$string['stepzero'] => 'Steglängden är 0 för variabel {$a}; antingen har du inte specificrat glidarens steglängd eller så är variabeln inte en glidare alls. Du måste antagligen justera detta i din GeoGebrafil.';,
$string['valuecheckedfor'] => 'Booleskt objekt i GeoGebra som används för att kontrollera om frågan är rätt besvarad.';,
$string['variablenamewrong'] => 'En variabel med det namnet kunde inte hittas i GeoGebrafilen.';,
$string['variableno'] => 'Variabel {$a}';,
$string['variables'] => 'Variabler';,
$string['willbereadfromfile'] => 'Kommer att läsas från GeoGebra... (se hjälpknappen)';