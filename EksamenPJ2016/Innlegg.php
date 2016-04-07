<?php


$title = "Innlegg";


$content = '<form id="innlegg_form" action="includes/post.php" method="post" accept-charset="UTF-8">
<fieldset>
<input type="text" id="title" name="title" required placeholder="Tittel"><br><br>
<textarea name="bcontent" id="bcontent" rows="25" cols="80"></textarea><br>
<select name="kategori">
<option value="Alle">Alle</option>
<option value="Ledelse">Ledelse</option>
<option value="Kommunikasjon">Kommunikasjon</option>
<option value="Teknologi">Teknologi</option>
<option value="Kunstfag">Kunstfag</option>
</select>
<input type="submit" value="Submit">
</fieldset>
</form>';

$divConf = 'align="center"';

$script = '<script src=\'https://cdn.tinymce.com/4/tinymce.min.js\'></script>
<script>
tinymce.init({
  selector: \'#bcontent\',
  theme: \'modern\',
  plugins: [
    \'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker\',
    \'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\',
    \'save table contextmenu directionality emoticons template paste textcolor\'
  ],
  toolbar: \'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons\'
});
</script>';


//require 'php/config.inc.php';
include 'Template.php';

