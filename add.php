


<html lang="en">
<head>
  <title>Add New Insurer</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>


<div class="container" style="margin-top:20px">
<div class="row"> 
<h1>Add New Insurer</h1>
<div class="col-md-9">
  <div class="panel panel-default">
    <!-- <div class="panel-heading">Add New Insurer</div> -->
    <div class="panel-body">


        <form action="add.php" method="post">

            <div class="input-group control-group">
                <!-- <label>Insurer Name</label> -->
          <input type="text" name="insurer_name" class="form-control" placeholder="Enter Insurer Name" required>
          <!-- <input type="text" name="movie_duration" class="form-control" placeholder="Enter Movie Duration Here"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3" required> -->
         
        </div>


        <div class="input-group control-group after-add-insurerinfo">
        <div class="form-group">
            <!-- <label>Policy Type</label> -->
          <input type="text" name="addinsurerinfo[policy_type][]" class="form-control" placeholder="Enter Policy Type" required>
          </div>
          <div class="form-group">
          <!-- <label for="exampleFormControlSelect1">Fuel Type</label> -->
          <select class="form-control" id="exampleFormControlSelect1" name="addinsurerinfo[fuel_type][]">
            <option value="">Please Select Fuel Type</option>
            <option value="P">Petrol</option>
            <option value="D">Diesel</option>
            </select>
          </div>
          <div class="form-group">
          <label>Payout %</label>
          <input type="text" name="addinsurerinfo[payout_percentage][]" class="form-control" placeholder="Enter Payout Percentage" required>
          </div>
          <div class="form-group">
          <!-- <label>Bonus %</label> -->
          <input type="text" name="addinsurerinfo[bonus_percentage][]" class="form-control" placeholder="Enter Bonus Percentage" required>
          </div>
          <div class="form-group">
          <label for="exampleFormControlSelect2">Regions</label>
          <select class="form-control" id="exampleFormControlSelect2" name="addinsurerinfo[regions][]" multiple>
            <!-- <option value="">Please Select Regions</option> -->
            <option value="PAN">PAN India</option>
            <option value="N">North India</option>
            <option value="S">South India</option>
            <option value="E">East India</option>
            <option value="W">West India</option>
            <option value="C">Central India</option>
            </select>
          </div>
          
          <div class="form-group">
          <label>No Claim Bonus</label>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="addinsurerinfo[ncb][]" id="inlineRadio1" value="NCB">
          <label class="form-check-label" for="inlineRadio1">NCB</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="addinsurerinfo[ncb][]" id="inlineRadio2" value="NNCB">
          <label class="form-check-label" for="inlineRadio2">Non NCB</label>
        </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect3">Vehicle Model</label>
          <select class="form-control" id="exampleFormControlSelect3" name="addinsurerinfo[vehicle_model][]" multiple>
            <!-- <option value="">Please Select Regions</option> -->
            <option value="All">All</option>
            <option value="Bolero">Bolero</option>
            <option value="Brezza">Brezza</option>
            <option value="Fortuner">Fortuner</option>
            <option value="Polo">Polo</option>
           
            </select>
          </div>
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more-insurerinfo" type="button"><i class="glyphicon glyphicon-plus"></i> Add More Policy Details</button>
          </div>
        </div>

    
        <p></p>

        <input type="submit" name="submit" value="Add Insurer" class="btn btn-success">

        <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>


        </form>


        <!-- Copy Cast Fields -->
        <div class="insurerinfo hide">
          <div class="control-group input-group" style="margin-top:10px">
          <div class="form-group">
            <!-- <label>Policy Type</label> -->
          <input type="text" name="addinsurerinfo[policy_type][]" class="form-control" placeholder="Enter Policy Type" required>
          </div>
          <div class="form-group">
          <!-- <label for="exampleFormControlSelect1">Fuel Type</label> -->
          <select class="form-control" id="exampleFormControlSelect1" name="addinsurerinfo[fuel_type][]">
            <option value="">Please Select Fuel Type</option>
            <option value="P">Petrol</option>
            <option value="D">Diesel</option>
            </select>
          </div>
          <div class="form-group">
          <label>Payout %</label>
          <input type="text" name="addinsurerinfo[payout_percentage][]" class="form-control" placeholder="Enter Payout Percentage" required>
          </div>
          <div class="form-group">
          <!-- <label>Bonus %</label> -->
          <input type="text" name="addinsurerinfo[bonus_percentage][]" class="form-control" placeholder="Enter Bonus Percentage" required>
          </div>
          <div class="form-group">
          <label for="exampleFormControlSelect2">Regions</label>
          <select class="form-control" id="exampleFormControlSelect2" name="addinsurerinfo[regions][]" multiple>
            <!-- <option value="">Please Select Regions</option> -->
            <option value="PAN">PAN India</option>
            <option value="N">North India</option>
            <option value="S">South India</option>
            <option value="E">East India</option>
            <option value="W">West India</option>
            <option value="C">Central India</option>
            </select>
          </div>
          
          <div class="form-group">
          <label>No Claim Bonus</label>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="addinsurerinfo[ncb][]" id="inlineRadio1" value="NCB">
          <label class="form-check-label" for="inlineRadio1">NCB</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="addinsurerinfo[ncb][]" id="inlineRadio2" value="NNCB">
          <label class="form-check-label" for="inlineRadio2">Non NCB</label>
        </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect3">Vehicle Model</label>
          <select class="form-control" id="exampleFormControlSelect3" name="addinsurerinfo[vehicle_model][]" multiple>
            <!-- <option value="">Please Select Regions</option> -->
            <option value="All">All</option>
            <option value="Bolero">Bolero</option>
            <option value="Brezza">Brezza</option>
            <option value="Fortuner">Fortuner</option>
            <option value="Polo">Polo</option>
           
            </select>
          </div>
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove Policy Details</button>
            </div>
          </div>
        </div>

         


    </div>
  </div>
</div>
</div>
</div>


<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more-insurerinfo").click(function(){ 
          var html = $(".insurerinfo").html();
          $(".after-add-insurerinfo").after(html);
      });     


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>
<style>
    input{
        margin-bottom: 10px !important;
    }
    .btn{
        margin: 0px !important;
    }
</style>

</body>
</html>