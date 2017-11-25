<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>uplinq.net</title>
</head>

<body>

<script type="text/javascript">
document.write("<p>Hello World!</p>");
document.write("<a href=\"javascript:var text = window.getSelection().toString(); alert (text);\">PANIC</a>");
function getXhrObject() {
	var xhrObject = new XMLHttpRequest();
	return xhrObject;
	}
var ajaxCapable = getXhrObject();
if (ajaxCapable) {
    alert('AJAX supported!');
	ajaxCapable.onreadystatechange = checkServerResponse;
	ajaxCapable.open("POST", "file.txt");
	ajaxCapable.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajaxCapable.send(null);

function checkServerResponse(ajaxCapable) {  
    if (ajaxCapable.readyState === 4) {  
        var cap = ajaxCapable.status(); 
            // do something  
		alert(cap);
    }  
}



}
</script>

<?php 

$mysql = mysql_connect('localhost', 'root', '3n73rin9') or die ('no good..');
mysql_select_db('test') or die ('no db..');
$word = "heya";
$input = mysql_query("INSERT INTO stack (word) VALUES ('$word')");

echo "Inserted ID:" . mysql_insert_id() . "<br />";
echo mysql_affected_rows() . "rows affected";

$mysql->close;

?>

<p>Dobry den, 
dekuji za prilezitost uchazet se o zamestnani ve spolecnosti IQ Group a predevsim za Vas cas.
Verim tomu, ze me mnohalete, ac zatim neprofesionalni, zkusenosti v oblasti web developmentu a webdesignu a stejne tak praxe v komunikaci v cizich jazycich, drive v jazyce nemeckem, nyni uz prakticky vyhradne v anglictine, mohou byt prinosnymi pro ucely a potreby firmy s timto zamerenim a osobne mam velky zajem o pravidelnou komunikaci a sebezdokonalovani nejen v jazyce ale i znalostech webovych technologii. Jako relativne produktivni a tvorivy clovek bych Vas rad odkazal na svou on-line prezentaci nejzajimavejsich vytvoru a projektu, ktere Vas snad ujisti o pravdivosti vyse zmineneho: cyberfly.freehostia.com . Z predchoziho zamestnani mam nezanedbatelnou zkusenost s verbalni i neverbalni komunikaci s klienty v cizim jazyce, vcetne reseni spletitych problemu a komplikovanych situaci a take efektivnejsi organizaci casu a zvladani stresu. Nemecky jazyk jsem zanechal v minulosti, abych se mimo ceskeho jazyka, ktery je mimochodem, zejmena v pisemne forme, na nadprumerne urovni, venoval plne a soustredil se na rozvoj znalosti jazyka anglickeho, coz mi umoznilo ziskat vice zkusenosti s nim a dovest ustni projev v nem na velmi dobrou uroven a pisemny projev podle dosavadnich referenci na uroven velmi vytribenou. Vzhledem k tomu, ze sleduji deni na globalni webove scene, neni pro me prekazkou ucit se novym vecem v tomto oboru a promptne se jim prizpusobit. Pro vice informaci o dosavadnich zkusenostech a pusobnosti na zahranicni webove scene se prosim podivejte na prilozeny zivotopis.
Diky za peclive uvazeni teto aplikace a preji Vam prijemny den.
Vaclav Vlcek</p>
</body>

</html>