<html>
<head>

<script type="text/javascript" src="http://www.google.com/jsapi">
</script>
<script type="text/javascript">
  google.load("language", "1");
</script>

<script language="javascript">

function watchTextAreas(isKeyPress) {
	if(!isKeyPress) {

		var box = document.createElement('div');
		box.setAttribute('id', 'overlay-box');
		box.setAttribute('style', 'overflow: hidden; position: absolute; bottom: 0px; right: 0px; padding: 10px; width: auto; font-family: arial; font-size: 50px; text-align: right; color: orange; background: black;');
		document.body.appendChild(box);

		var allTextAreas = "";
		for (var i=0; allTextAreas[i] != "undefined"; i++) {
			var allTextAreas = document.getElementsByTagName('textarea')[i];
			if (allTextAreas[i] != "undefined") {
				allTextAreas.setAttribute('onKeyUp', 'watchTextAreas(1);');
				allTextAreas.setAttribute('onFocus', 'this.style="background:orange;"');
				allTextAreas.setAttribute('onBlur', 'this.style="background:silver;"');
			}
		}
	}

	else {

		var aE = document.activeElement;
		var CaretPos = 0;

		if (aE == "[object HTMLTextAreaElement]") {
			// IE Support***************************************************************************************
			if (document.selection) {
				aE.focus ();
				var Sel = document.selection.createRange ();
				Sel.moveStart ('character', -aE.value.length);
				CaretPos = Sel.text.length;
			}
			//**************************************************************************************************
			// Firefox support
			else if (aE.selectionStart || aE.selectionStart == '0' || aE.selectionStart == '-1') {

					origin = aE.selectionStart; // 1
					CaretPos = origin; // 1

					var currentStart = CaretPos - 1; // 0
					var currentEnd = CaretPos; // 1
					var chunk = "";
					
			do {
		//			var len = textarea.value.length;
					//get selection contents
					var sel = aE.value.substring(currentStart, currentEnd); //W

		//			alert(sel + "  currentStart: " + currentStart + "  currentEnd: " + currentEnd);

					currentStart--; // -2
					currentEnd--; // -1

					var chunk = sel + chunk;
		//			alert (activeElement);

				} while (sel != " " && sel !="");
			// -1 + 1 = 0
			var wordStart = currentEnd + 1;
			
					var currentStart = wordStart; // 0
					var currentEnd = wordStart + 1; // 1
			
			do {
		//			var len = textarea.value.length;
					//get selection contents
					var sel = aE.value.substring(currentStart, currentEnd); // W

		//			alert(sel + "  currentStart: " + currentStart + "  currentEnd: " + currentEnd);			

					currentStart++; // 2
					currentEnd++; // 3
				
				} while (sel != " " && sel != "");
			
		//	alert (CaretPos);
			
			var wordEnd = currentStart;
			
		//	alert ('wordEnd: ' + wordEnd);
			
			var word = aE.value.substring(wordStart, wordEnd);
			
			var textarea2 = document.getElementById('textarea2');
			textarea2.value = chunk;
			
			google.language.translate(word, "", "en", function(result) {
				if (!result.error) {
					var overlayBox = document.getElementById("overlay-box");
					overlayBox.innerHTML = result.translation;
					google.language.getBranding("overlay-box");
				}
			});
			
//			var overlayBox = document.getElementById('overlay-box');
	//		overlayBox.innerHTML = word;

	//		return (word);
			}
		}
	}
}









function setCaretPosition(aE, pos, pos2){
	if(aE.setSelectionRange)
	{
		aE.focus();
		aE.setSelectionRange(pos,pos2);
	}
	else if (aE.createTextRange) {
		var range = aE.createTextRange();
		range.collapse(true);
		range.moveEnd('character', pos);
		range.moveStart('character', pos);
		range.select();
	}
}

function blah() { alert('hi'); }

function display() {
	var textarea = document.getElementById("textarea");

	var len = textarea.value.length;
	var start = textarea.selectionStart;
	var end = textarea.selectionEnd;
	var sel = textarea.value.substring(start, end);

   // This is the selected text and alert it
	alert(sel);
}
</script>
		</head>

<body onload="watchTextAreas();">
<div id="wrap">
		<textarea cols="40" rows="40" id="textarea">
		Dobr� den.

Zaujaly me aspekty v��e zm�nen�ho zamestn�n� a ver�m, nejen pro duvody uveden� n�e, �e jsem vhodn�m kandid�tem pro tuto pozici. Pokud netrv�te na z�sk�n� odborn�ka s �zce specifick�m vzdel�n�m a mnohaletou prax� v oboru, r�d zapoj�m sv� schopnosti i nezanedbateln� vedomosti ve sd�len� prospech. Predem dekuji za V� cas.

M� dosavadn� pracovn� zku�enosti zahrnuj� v�uku anglick�ho jazyka; preklad mezi CJ a AJ; profesion�ln� blogging (IT); logistiku v oblasti leteck� dopravy - zde s durazem na komunikaci na mezin�rodn� �rovni, jedn�n� s �rady, administrativu, efektivn� organizaci casu, stresovou odolnost. Pova�uji se za cloveka prirozene zv�dav�ho a tvoriv�ho, a to zejm�na, nikoli v�ak v�hradne, ve virtu�ln�m prostred�. Mezi m� volnocasov� aktivity patr� aktivn� rozv�jen� anglick�ho jazyka a verb�ln� i neverb�ln� komunikace s lidmi v mezin�rodn�m prostred�, roz�irov�n� znalosti informacn�ch technologi� v cele s web developmentem (z�klady k�dov�n� a skriptov�n�, designu a typografie, grafiky a fotografov�n�, UX) a 2D/3D grafikou (webdesign a 3D modelov�n�), ale i vcetne z�kladn�ch hardwarov�ch a s�tov�ch servisn�ch znalost�; z�jmove letectv� a r�zen� letov�ho provozu (simulace). Detailneji v prilo�en�m �ivotopise. Pro predstavu o m�ch aktivit�ch a m� tvorbe nav�tivte pros�m http://cyberfly.freehostia.com .

R�d bych se rozv�jel ve v��e uveden�ch ohledech, rozhodne v�ak nepohrdnu ani alternativn� pr�le�itost�, kter� si zaslou�� m� upr�mn� sna�en�. R�d se uc�m nov�m vecem a zkoum�m nov� mo�nosti a pritom si v��m t�mov�ch kolegu a lid� v�eobecne a sna��m se jednat f�rove. Minimum z�skan� praxe a n�zk� vek vyva�uji t�mto pr�stupem a pohotovou adaptac� na nov� po�adavky a prostred�.

Dekuji za Va�e nepochybne pecliv� uv�en� a te��m se na pr�padn� setk�n�.

S pozdravem,
V�clav Vlcek

		</textarea>
		<textarea cols="40" rows="40">0</textarea>
		<textarea cols="40" rows="40">0</textarea>
		<textarea cols="40" rows="40" id="textarea2">0</textarea>
        <input type="button" value="Use Ranges"  /> 
		<input type="button" value="Set Ranges" onclick="display();" /> 
	</form>
</div>
</body>
</html>






<!--

<html>
<head>
<script language="javascript">
<!-- //Begin Hide
function checkMessage(myForm) {
if (/[\"\'\/\\]/.test(myForm.charcount.value)){
alert("Invalid Message! This message included invalid characters.")
return (false)
}
return (true)
}

function countit(what){
formcontent=what.form.charcount.value
displaycount.innerHTML=formcontent.length
}

function storeCaret(textE1) {
if (textE1.createTextRange) 
textE1.caretPos = document.selection.createRange().duplicate();
displaycount.innerHTML= texte1.caretPos
}

</script>
</HEAD>
<BODY>
<form onSubmit="return checkMessage(this)">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" colspan="2">
<textarea rows="12" name="charcount" onkeyup="return countit(this)" cols="60" wrap="virtual" onclick="storeCaret(this);"></textarea>
</td>
</tr>
<tr>
<td valign="top" width="35%">Current Character Position:</td>
<td><div id="displaycount" size="20">&nbsp;&nbsp;</div></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align=left><input type="submit" value="Submit" id=submit1 name=submit1>
&nbsp;<input type="reset" value="Reset" id=reset1 name=reset1></td>
</tr>
</table>
</form>
</body>
</html-->