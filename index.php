<!DOCTYPE html>
    <head>
        <title>Restaurant_Menu</title>
        
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
    </head>
  <body id="mbody">
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li id="btn1" class="nav-item active"><a class="nav-link" href="#"><span class="brandname">Piggy</span> Order food online</a></li>
        </ul>
      </div>
    </nav>
    <div class="jumbot">
      <h1>Welcome to <span class="title">Restraunt</span></h1>
    </div>
    <div class="container">
      <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
        <option value=""><h3>Select Menu</h3></option>
      </select>
      <br>    
      <table id="table" class="table table-light table table-hover table-bordered table_data">
      <tr>
        <th>Full_Name</th>
        <td id="menuname"></td>
      </tr>
      <tr>
        <th>ID</th>
        <td id="id"></td>
      </tr>
      <tr>
        <th>Short_Name</th>
        <td id="sname"></td>
      </tr>
      <tr>
        <th>Description</th>
        <td id="descp"></td>
      </tr>
      <tr>
        <th>Price_Small</th>
        <td id="psmall"></td>
      </tr>
      <tr>
        <th>Price_Large</th>
        <td id="plarge"></td>
      </tr>
      <tr>
        <th>Small_Portion_Name</th>
        <td id="spname"></td>
      </tr>
      <tr>
        <th>Large Portion Name</th>
        <td id="lpname"></td>
      </tr>
      </table>
    </div> 
    <script>
       
    </script>	
		<script src="jquery-3.5.1.min.js"></script> 
    <script src="script.js" defer></script>   
  </body>
</html>
