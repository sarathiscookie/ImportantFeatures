//Table Records
<table>
<?php
$mysqli   = new mysqli("localhost", "root", "", "bootstrapautocomplete");
$sql      = $mysqli->query("select * from country LIMIT 5");
while($row=$sql->fetch_array())
{
$id           =  $row['slno'];
$firstname    =  $row['country'];
$lastname     =  $row['country_2char'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $firstname; ?></span>
<input type="text" value="<?php echo $firstname; ?>" class="editbox" id="first_input_<?php echo $id; ?>" /&gt;
</td>

<td class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $lastname; ?></span> 
<input type="text" value="<?php echo $lastname; ?>" class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>

</tr>
<?php
}
?>
</table>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
 $(".editbox").hide();
 $(".text").show();   
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&firstname='+first+'&lastname='+last;
$("#first_"+ID).html('<img src="loader.gif" alt="loader"/>'); // Loading image

if(first.length>0&& last.length>0)
{

$.ajax({
type: "POST",
url: "ajax.php",
data: dataString,
cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>
