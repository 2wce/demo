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
                    <h3>Looking good so far professor Nyasha Lets add yourt business details. They help your customers/clients to know and understand what it is what it is that you do. We also use these details to help you to connect to other proffesionals and associates in the industry your business operates.
                    </h3>
                    </center></div><!--top text-->
                      
                       
                            <div class="row businessholder">
                                <center>
                                 <h4>Choose a business to edit</h4>
                                 </center>
                                 
                              <div class="bussinessholderitem">
                                      <div class="row" >
                                                  <div class="col-md-2 pull-left">
                                                  
                                                  <img src="{{ URL::asset('portal/img/download.svg') }}" class="img-responsive pull-right imgIcon" alt="Responsive image" >
                                                  
                                                  </div><!--.col-md-1 for image-->
                                                  <div class="col-md-4" style="">
                                                          <div class="row"><!--inner row-->
                                                                  <div class="col-md-12"><!--col-inner-->
                                                                    <h4>Amason dental Clinic</h4>
                                                                    <h4>Edit</h4>
                                                                   </div><!--col-inner-->
                                                              </div><!--inner row-->
                                                             
                                                
                                                  </div><!--.col-md-1-->
                                                  <div class="col-md-3-offset-12"><img src="img/file_delete.png" class="img-responsive pull-right imgClose" alt="Responsive image"></div><!--.col-md-1-->
                                      </div><!--row-->
                              </div><!-- bussinessholderitem -->
                              
                              
                               <div class="bussinessholderitem">
                                      <div class="row" >
                                                  <div class="col-md-2 pull-left">
                                                  
                                                  <img src="{{ URL::asset('portal/img/download.svg') }}" class="img-responsive pull-right imgIcon" alt="Responsive image" >
                                                  
                                                  </div><!--.col-md-1 for image-->
                                                  <div class="col-md-4" style="">
                                                          <div class="row"><!--inner row-->
                                                                  <div class="col-md-12"><!--col-inner-->
                                                                    <h4>Plus Afrik</h4>
                                                                    <h4>Edit</h4>
                                                                   </div><!--col-inner-->
                                                              </div><!--inner row-->
                                                             
                                                
                                                  </div><!--.col-md-1-->
                                                  <div class="col-md-3-offset-12"><img src="{{ URL::asset('portal/img/file_delete.png') }}" class="img-responsive pull-right imgClose" alt="Responsive image"></div><!--.col-md-1-->
                                      </div><!--row-->
                              </div><!-- bussinessholderitem -->
                              
                                <h3 style="margin-left:10px;">Click to add another company</h3>
                               
                                </div><!--row businessholder-->
                                
                                <center>
                                <h1>Currently you have 2 businesses registered on plus afrik click edit to modify the details</h1>
                                </center>
                
</div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->
</div><!-- /#wrapper for the menu -->

  
  
  
@include("portal.partials.footer")



</body>
</html>
