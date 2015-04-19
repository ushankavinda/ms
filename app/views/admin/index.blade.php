<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MS - Admin</title>
        
        <!-- Angular-->
        <script src="<?php echo asset('_/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset('_/js/myscripts.js'); ?>"></script>
        <!--Bootstrap-->
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/bootstrap.min.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/mystyle.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/font-awesome.css'); ?>">
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        
    </head>
    <body id="admin" style="color: #000">
        
        <div class="container">
            <div class="row" style="margin-top: 3em;">
                <div class="col-lg-8">

                    <h1>Update</h1><hr>
                    <h3> <?php if(isset($success)) { echo $success; } ?></h3>
                {{ Form::open(array('url' => 'update', 'files'=>true)) }}
		     {{ Form::label('mainName', 'Accessories/ Parts Name :') }}
		     {{ Form::text('mainName','', array('class' => 'form-control', 'placeholder' => 'Enter Name')) }}
		
		     {{ Form::label('type', 'Type : ') }}
		     {{ Form::select('type', [                 
                        '0' => 'Accessories',
                        '1' => 'Parts'],null, ['class' => 'form-control']) }}
                        
                        <hr>
		     <table id="myTable" class="table update">
                        <tr>
                            <td>Model No</td>
                            <td>Model Name</td>
                            <td>Image</td>
                        </tr>
                        <tr>
                            <td>{{ Form::text('modelNo[]','', array('class' => 'form-control', 'placeholder' => 'Enter Model no')) }}</td>
                            <td>{{ Form::text('modelName[]','', array('class' => 'form-control', 'placeholder' => 'Enter Model name')) }}</td>
                            <td>{{ Form::file('image[]','', array('class' => 'form-control')) }}</td>
                        </tr>
                       <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: left;">
                                <input type="button" id="addrow" value="Add Row" />
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="3">{{ Form::submit('Update', array('class' => 'btn btn-primary')) }} </td>
                        </tr>

                    </table>
		     
		     
                    
		{{ Form::close() }}  
                </div>
                
                    <div class="col-lg-4">
                        <div class="alert alert-warning" role="alert"><h5>You can only upload less than 500KB JPEG, JPG and PNG.</h5></div>
                    </div>
            </div>
        </div>
        
        
        
        
        <script src="<?php echo asset('_/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset('_/js/bootstrap.min.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                var counter = 0;

                $("#addrow").on("click", function () {

                    counter = $('#myTable tr').length - 2;

                    var newRow = $("<tr>");
                    var cols = "";

                    cols += '<td>{{ Form::text("modelNo[]","", array("class" => "form-control", "placeholder" => "Enter Model no")) }}</td>';
                    cols += '<td>{{ Form::text("modelName[]","", array("class" => "form-control", "placeholder" => "Enter Model name")) }}</td>';
                    cols += '<td>{{ Form::file("image[]","", array("class" => "form-control")) }}</td>';

                    cols += '<td><input type="button" class="ibtnDel"  value="Delete"></td>';
                    newRow.append(cols);
                    if (counter == 10) $('#addrow').attr('disabled', true).prop('value', "You've reached the limit");
                    $("table.update").append(newRow);
                    counter++;
                });

                $("table.update").on("change", 'input[name^="price"]', function (event) {
                    calculateRow($(this).closest("tr"));
                    calculateGrandTotal();                
                });


                $("table.update").on("click", ".ibtnDel", function (event) {
                    $(this).closest("tr").remove();
                    calculateGrandTotal();

                    counter -= 1
                    $('#addrow').attr('disabled', false).prop('value', "Add Row");
                });


            });



            function calculateRow(row) {
                var price = +row.find('input[name^="price"]').val();

            }

            function calculateGrandTotal() {
                var grandTotal = 0;
                $("table.order-list").find('input[name^="price"]').each(function () {
                    grandTotal += +$(this).val();
                });
                $("#grandtotal").text(grandTotal.toFixed(2));
            }
        </script>
        
    </body>
</html>


