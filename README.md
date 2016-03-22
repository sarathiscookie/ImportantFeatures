# ImportantFeatures

1: HTML5-Autocomplete
======================

Simple autocomplete in HTML5 

NOTE: The datalist tag is not supported in Internet Explorer 9 and earlier versions, or in Safari.
Files: autocomplete

2: Bootstrap-Model
===================

Add bootstrap model in a loop. Set model id dynamically otherwise Bootstrap Model won't work.
Files: modal

3: CLick-on-addmore-button.
============================

Generate full row (textbox,dropdown box etc).
Files: sample, bootstrap-spacelab

4: Edit-a-table-row-using-jQuery-
==================================

Edit data listed in html table using jQuery. 

Just copy paste the code and change the databse connection.

Note: Query is mysqli and create a database 
page: index, ajax

5: Laravel5-Ajax-Post
======================
If the incoming request was an AJAX request, no redirect will be generated in laravel 5. How can we solve this?

If you are trying to submit a form via AJAX post you will get an error 422 Unprocessable Entity, dont worry about that.

I will introduce the file structure firstly.

Create view pages in -> app/resources/views/
Add route in -> app/Http/routes.php
Create controller page in -> app/Http/Controllers
Create Request page in -> app/Http/Requests
Create Model Pages in -> You can create model folder under anywhere in the app. eg: app/Models. 


422 Unprocessable : 

Published on laravel website "If the incoming request was an AJAX request, no redirect will be generated. Instead, an HTTP response with a 422 status code will be returned to the browser containing a JSON representation of the validation errors".

Because Laravel's request responds with a status code of 422, jQuery's success/done functions don't fire, but rather the error function, seeing as it's not 200.

So, in order to get the JSON response from your AJAX request generated from the Request object due to validation failing, you need to define the error handler, in my case i added below section in my index.blade.php.

$.ajax({
              type: "post",
              url: "http://localhost/laravel/",
              data: dataString,
              success: function(NULL, NULL, jqXHR) {
               if(jqXHR.status === 200 ) {//redirect if  authenticated user.
                $( location ).prop( 'pathname', 'projects' );
                console.log(data);
                }
              },
              error: function(data) {
               if( data.status === 422 ) {
               //process validation errors here.
               var errors = data.responseJSON; 
               errorsHtml = '<div class="alert alert-danger"><ul>';
               $.each( errors , function( key, value ) {
                errorsHtml += '<li>' + value[0] + '</li>'; 
               });
               errorsHtml += '</ul></div>';
               $( '#validationSignup' ).html( errorsHtml ); 
               }
              }
            });

Files: HomeController, index, routes, SignupBookingRequest

6: PHP-Bootstrap-Pagination
============================
Create database and table in your localhost.
Copy paste this code and change the database name and table name.
Files: index1

7:Select-multiple-check-box-in-Jquery-and-listed-using-PHP-foreach
==================================================================

Select multiple check box in Jquery and listed using PHP foreach
Files: index, ajax
