<!DOCTYPE html>
<html lang="en">

<head>
@include("portal.partials.header")

<body>

    <div id="wrapper">

          @include("portal.partials.sidebar")

        <!-- Page Content -->
        <div id="page-content-wrapper">
        
        
           
<div class="topnavbar" > <!--div to hold the top bar and progress bar chete-->   
<!--navigation-->       
@include("portal.partials.topNavBar")





<div class="container-fluid">


@include("portal.partials.progressbar")  
                      
                    <div class='toptext'> 
                    <center>
                    <h3>
                   Add your personal contact details by which people can get in touch with you as a professional
                    </h3>
                    </center></div><!--top text-->
                      
                       
 <div class="row businessholder">
    
     
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Nyasha Lionel" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
             <div class="col-md-5">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Guzha"/>
                </div><!--form group-->
            </div><!--col-md-4-->
            
        </div><!--row-->
        
        
        
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="email" class="form-control" placeholder="Email Adress" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
           <div class="col-md-4">
        <div class="form-group has-success">
        <input type="url" id="txtphonenumber" class="form-control" placeholder="Phone Number"/>
        </div><!--form group-->
        </div><!--col-md-4-->
        
            
            
        </div><!--row-->
        
         <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <h5>Click to add another email adress</h5>
            </div><!--col-md-4-->
            
            <div class="col-md-4">
                <h5>Click to add another phone number</h5>
            </div><!--col-md-4-->
        </div><!--row-->

        <hr>
        
        		
		
                <div class="row">
                <div class="col-md-12">
                <div class="form-group has-success">
                <input type="text" class="form-control" placeholder="Street number and Name (Seperate with a comma)" />
                </div><!--form group-->
                </div><!--col-md-4-->
                </div><!--row-->
                       
                       
                       
                
                <div class="row">
                
                <div class="col-md-4">
                <div class='dropdown'>
<select class="mydropdown" >
<option>City/Town</option>
<option>02</option>
<option>03</option>
</select>
</div><!--dropdown-->
                </div><!--col-md-4-->
                
                
                
                
                <div class="col-md-4">
               <div class='dropdown'>
<select class="mydropdown" >
<option>City/Town</option>
<option>02</option>
<option>03</option>
</select>
</div><!--dropdown-->
                </div><!--col-md-4-->
                
                
                
                <div class="col-md-4">
                <div class='dropdown'>
<select class="mydropdown" >
<option>City/Town</option>
<option>02</option>
<option>03</option>
</select>
</div><!--dropdown-->
                </div><!--col-md-4-->
                </div><!--row-->        
        
        <div class="row">
<div class="col-md-4">
<h4>Click here to add another address</h4>
</div><!--col-md-4-->
</div><!--row-->

<br>
<br>

<div class="row">
<div class="col-md-4">
<div class="form-group has-success">
<input type="text" class="form-control" placeholder="Website" />
</div><!--form group-->
</div><!--col-md-4-->
</div><!--row-->
        
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--info businessholder--> 





<div class="row">
<center>
<h4>Looks Great Proffesor now go ahead and edit your Location Settings</h4>
</center>

</div><!--row-->





                
</div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->
</div><!-- /#wrapper for the menu -->

  
  @include("portal.partials.footer")



</body>
</html>
