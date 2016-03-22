
<input type="checkbox" value="PHP" name="programming_language[]" /><label>Select PHP</label><br>
 
<input type="checkbox" value="PYTHON" name="programming_language[]" /><label>Select PYTHON</label><br>
 
<input type="checkbox" value="JQUERY" name="programming_language[]" /><label>Select JQUERY</label>
 
<input type="button" name="sub" value="Submit" name="submitcheck" id="submitcheck" Onclick="get2();" />

<div id="input16"></div>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
    
function get2() {
      var programming_language = $('input[name="programming_language\\[\\]"]:checked').
            map(function(i, elem) { return $(this).val(); }).get();
     // alert(main_occupancy);
      var submitcheck ='submitcheck';
      $.post('ajax.php', {programming_language: programming_language, submitcheck: submitcheck}, 
            function(output) {
                  $('#input16').html(output).show();
            });}
    
</script>

