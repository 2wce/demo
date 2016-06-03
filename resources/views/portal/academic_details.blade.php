<!DOCTYPE html>
<html lang="en">

<head>
@include("portal.partials.header")
    
</head>


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
                   Tell us what academic qualifications you have and where you attained them.
                    </h3>
                    </center></div><!--top text-->
                      
                       
 <div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Lets start with high school cirtificates</h4>
         </center>
         </div><!--top text-->
         
          <hr>
     
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Level of qualification" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
             <div class="col-md-5">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Examining board"/>
                </div><!--form group-->
            </div><!--col-md-4-->
            
        </div><!--row-->
        
        
        
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Name of high school" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
            <div class="col-md-2">
               <h4>your presence</h4>
            </div><!--col-md-4-->
            
             <div class="col-md-2">
                   
                    

                                         <div class='dropdown'>
                                                <select class="mydropdown" >
                                                <option>City/Town</option>
                                                <option>02</option>
                                                <option>03</option>
                                                </select>
                                        </div><!--dropdown-->
            </div><!--col-md-4-->
            <div class="col-md-1">
              <h4>  TO</h4>
            </div><!--col-md-4-->
            <div class="col-md-2">
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
                <h5>Add another qualification</h5>
            </div><!--col-md-4-->
        </div><!--row-->
        
        
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--info businessholder--> 



<div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Do you have any college cirtificates or diplomas?</h4>
         </center>
         </div><!--top text-->
         
          <hr>
     
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Name of Diploma Cirtificate" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
             <div class="col-md-5">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Examining board"/>
                </div><!--form group-->
            </div><!--col-md-4-->
            
        </div><!--row-->
        
        
        
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Name of college" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
            <div class="col-md-2">
               <h4>your presence</h4>
            </div><!--col-md-4-->
            
             <div class="col-md-2">
                   <div class='dropdown'>
                                                <select class="mydropdown" >
                                                <option>City/Town</option>
                                                <option>02</option>
                                                <option>03</option>
                                                </select>
                                        </div><!--dropdown-->
            </div><!--col-md-4-->
            <div class="col-md-1">
              <h4>  TO</h4>
            </div><!--col-md-4-->
            <div class="col-md-2">
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
                <h5>Add another college qualification</h5>
            </div><!--col-md-4-->
        </div><!--row-->
        
        
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--info businessholder--> 



<div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Do you have any college cirtificates or diplomas?</h4>
         </center>
         </div><!--top text-->
         
          <hr>
     
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Field of study" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
             <div class="col-md-5">
                    <select class="selectpicker" data-style="btn-primary">
                    <option>Degree Level</option>
                    <option>1.1</option>
                    <option>1.2</option>
                    <option>2.1</option>
                    <option>2.2</option>
                    <option>3.1</option>
                    <option>3.2</option>
                    <option>4.1</option>
                    <option>4.2</option>
                    <option>5.1</option>
                    <option>5.2</option>
                    <option>6.1</option>
                    <option>6.2</option>
                    <option>7.1</option>
                    <option>7.2</option>
                    <option>8.1</option>
                    <option>8.2</option>
                    </select>

            <!--    <div class="btn-group">
                              <button type="button" class="btn btn-primary">Degree Level</button>
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Degree Level</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">1.1</a></li>
                                <li><a href="#">1.2</a></li>
                                <li><a href="#">2.1</a></li>
                                 <li><a href="#">2.2</a></li>
                                  <li><a href="#">3.1</a></li>
                                   <li><a href="#">3.2</a></li>
                                      <li><a href="#">4.1</a></li>
                                   <li><a href="#">4.2</a></li>
                                      <li><a href="#">5.1</a></li>
                                   <li><a href="#">5.2</a></li>
                                      <li><a href="#">6.1</a></li>
                                   <li><a href="#">6.2</a></li>
                                      <li><a href="#">7.1</a></li>
                                   <li><a href="#">7.2</a></li>
                                      <li><a href="#">8.1</a></li>
                                   <li><a href="#">8.2</a></li>
                                
                              </ul>  
                              </div><!--btn-group-->
            </div><!--col-md-4-->
            
        </div><!--row-->
        
        
        
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group has-success">
                 <input type="text" class="form-control" placeholder="Name of University" />
                </div><!--form group-->
            </div><!--col-md-4-->
            
            
            <div class="col-md-2">
               <h4>your presence</h4>
            </div><!--col-md-4-->
            
             <div class="col-md-2">
                   <div class='dropdown'>
                                                <select class="mydropdown" >
                                                <option>City/Town</option>
                                                <option>02</option>
                                                <option>03</option>
                                                </select>
                                        </div><!--dropdown-->
            </div><!--col-md-4-->
            <div class="col-md-1">
              <h4>  TO</h4>
            </div><!--col-md-4-->
            <div class="col-md-2">
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
                <h5>Add another university qualification</h5>
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
<h4>Looks Great Proffesor now go ahead and edit your Contact details</h4>
</center>

</div><!--row-->





                
</div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->
</div><!-- /#wrapper for the menu -->

  
  @include("portal.partials.footer")

</body>
</html>
