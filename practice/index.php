<html>
<?php 
  include_once("header.php");
 ?>


<body>



<div class="container-fluid">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
 <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModal">Add Person</button>



  <table class="table table-condensed" id="persontable">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="LotteryTableBody">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
                  <form >
                    <div class="form-group">
                      <label for="Firstname">First Name:</label>
                      <input type="Firstname" class="form-control" id="Firstname">
                    </div>
                    <div class="form-group">
                      <label for="Lastname">Last Name:</label>
                      <input type="Lastname" class="form-control" id="Lastname">
                    </div>

                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email">
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="button" id="submit" class="btn btn-default">Submit</button>
                  </form>    
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<script type="text/javascript">
  $(document).ready(function() {
LoadData();
     $('#submit').click(function(event) {
        var formData = {
            'Firstname'              : $('#Firstname').val(),
            'Lastname'             : $('#Lastname').val(),
            'email'    : $('#email').val()
        };
       $.ajax({
                  type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                  url         : 'process.php', // the url where we want to POST
                  data        : formData, // our data object
                 // dataType    : 'json', // what type of data do we expect back from the server
                              //encode          : true
              })
                  // using the done promise callback
                  .done(function(data) {
                   //     console.log(data); 
                  alert(data);    

                      // here we will handle errors and validation messages
                  });

              // stop the form from submitting the normal way and refreshing the page
              event.preventDefault();
          });
      });

  function LoadData() {    
$.ajax(
{
        type:"post",
        url:"process.php",
        data:"LoadTable",
        success:function(data)
        {
        $("#LotteryTableBody").remove();
        $("#persontable").append(data);
        }
        });
  }
</script>

</body>
</html>
