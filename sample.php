<html>
<head>
<link id="bs-css" href="../vanness_recruiting/css/bootstrap-spacelab.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {

var MaxInputs       = 4; //maximum input boxes allowed
var InputsWrapper   = $("#InputsWrapper"); //Input boxes wrapper ID
var AddButton       = $("#AddMoreFileBox"); //Add button ID

var x = InputsWrapper.length; //initlal text box count
var FieldCount=1; //to keep track of text box added

$(AddButton).click(function (e)  //on add input button click
{
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++; //text box added increment
            //add input box
            $(InputsWrapper).append('<div><fieldset><div class="control-group" style="width:150px; float:left;" align="center"><label for="inputError">Skill Name<span style="color:#F00">*</span></label><div style="clear:both;"></div><div class="controls" style="margin:0px;"><input type="text" id="txt_VannessSname_'+ FieldCount +'" name="txt_VannessSname[]" class="validate[required ,custom[onlyLetterSp]] text-input"   maxlength="15" style="width:100px;" value="Text '+ FieldCount +'"/><span class="help-inline"></span></div></div><div class="control-group" style="width:150px; float:left;" align="center"><label for="inputError">Version<span style="color:#F00">*</span></label><div style="clear:both;"></div><div class="controls" style="margin:0px;"><input type="text" id="txt_VannessSname_'+ FieldCount +'" name="txt_VannessSname[]" class="validate[required ,custom[onlyLetterSp]] text-input"   maxlength="10" style="width:100px;" value="Text '+ FieldCount +'"/><span class="help-inline"></span></div></div><div class="control-group" style="width:150px; float:left;" align="center"><label for="selectError6">Last Used<span style="color:#F00">*</span></label><div style="clear:both;"></div><div class="controls" style="margin:0px;"><span id="years_select"><select name="years[]" id="years_'+ FieldCount +'" style="width:80px;"><option value="selectText '+ FieldCount +'" id="select">Select</option><option value="fresher" id="fresher">Fresher</option><option value="" id="year">2013</option></select></span></div></div><div class="control-group" style="width:150px; float:left;" align="center"><label for="selectError6">Experience Year<span style="color:#F00">*</span></label><div style="clear:both;"></div><div class="controls" style="margin:0px;"><span id="years_select"><select name="years[]" id="years_'+ FieldCount +'" style="width:80px;"><option value="select '+ FieldCount +'" id="select">Select</option><option value="fresher" id="fresher">Fresher</option><option value="" id="year">2013</option></select></span></div></div><div class="control-group" style="width:150px; float:left;" align="center"><label for="selectError6">Experience Month<span style="color:#F00">*</span></label><div style="clear:both;"></div><div class="controls" style="margin:0px;"><span id="years_select"><select name="years[]" id="years_'+ FieldCount +'" style="width:80px;"><option value="select" id="select">Select</option><option value="fresher" id="fresher">Fresher</option><option value="" id="year">2013</option></select></span></div></div></fieldset><a href="#" class="removeclass" data-rel="tooltip" data-content="And heres some amazing content. Its very engaging. right?" title="Add your masters details">Remove</a></div>');
            x++; //text box increment
        }
return false;
});

$("body").on("click",".removeclass", function(e){ //user click on remove text
        if( x > 1 ) {
                $(this).parent('div').remove(); //remove text box
                x--; //decrement textbox
        }
return false;
}) 

});
</script>
</head>
<body>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon icon-darkgray icon-book"></i>Skills</h2>
					</div>
					<div class="box-content">
                        <div class="box-content-left" style="margin:0px 0px 0px 155px;" id="InputsWrapper">
                            
						    <fieldset>
							  
                              <div class="control-group" style="width:150px; float:left;" align="center">
								<label for="inputError">Skill Name<span style="color:#F00">*</span></label>
                                
								<div class="controls" style="margin:0px;">
								  <input type="text" id="txt_VannessSname" name="txt_VannessSname" class="validate[required ,custom[onlyLetterSp]] text-input"   maxlength="15" style="width:100px;" />
								  <span class="help-inline"></span>
								</div>
							  </div>
                              <div class="control-group" style="width:150px; float:left;" align="center">
								<label for="inputError">Version<span style="color:#F00">*</span></label>
                                <div style="clear:both;"></div>
								<div class="controls" style="margin:0px;">
								  <input type="text" id="txt_VannessSname" name="txt_VannessSname" class="validate[required ,custom[onlyLetterSp]] text-input"   maxlength="10" style="width:100px;" />
								  <span class="help-inline"></span>
								</div>
							  </div>
                              <div class="control-group" style="width:150px; float:left;" align="center">
								<label for="selectError6">Last Used<span style="color:#F00">*</span></label>
                                <div style="clear:both;"></div>
								<div class="controls" style="margin:0px;">
								  <span id='years_select'>
								  <select name="years" id="years" style="width:80px;">
					              <option value="select" id="select">Select</option>
					              <option value="fresher" id="fresher">Fresher</option>
					              
                                  <option value="" id="year">2013</option>
                                  
                                  </select>
                                  </span>
								  
								</div>
							  </div>
                              <div class="control-group" style="width:150px; float:left;" align="center">
								<label for="selectError6">Experience Year<span style="color:#F00">*</span></label>
                                <div style="clear:both;"></div>
								<div class="controls" style="margin:0px;">
								  <span id='years_select'>
								  <select name="years" id="years" style="width:80px;">
					              <option value="select" id="select">Select</option>
					              <option value="fresher" id="fresher">Fresher</option>
					              
                                  <option value="" id="year">2013</option>
                                  
                                  </select>
                                  </span>
								  
								</div>
							  </div>
                              <div class="control-group" style="width:150px; float:left;" align="center">
								<label for="selectError6">Experience Month<span style="color:#F00">*</span></label>
                                <div style="clear:both;"></div>
								<div class="controls" style="margin:0px;">
								  <span id='years_select'>
								  <select name="years" id="years" style="width:80px;">
					              <option value="select" id="select">Select</option>
					              <option value="fresher" id="fresher">Fresher</option>
					              
                                  <option value="" id="year">2013</option>
                                  
                                  </select>
                                  </span>
								  
								</div>
							  </div>
                            </fieldset>
                            <a href="#" class="removeclass" data-rel="tooltip" data-content="And here's some amazing content. It's very engaging. right?" title="Add your masters details">Remove</a>
					  </div>
                      <div style="clear:both;"></div>
                              <div class="input-prepend" id="masters">
									  <span class="add-on"><i class="icon-plus"></i></span><a href="#" id="AddMoreFileBox" class="btn btn-info" data-rel="tooltip" data-content="And here's some amazing content. It's very engaging. right?" title="Add your masters details">Add More</a>
							  </div>
                    </div>
				</div><!--/span-->
			
			</div>
</body>
</html>
