<!DOCTYPE html>
<html lang="en">

@include("portal.partials.header")

<body>

    <div id="wrapper">

        <!-- Sidebar -->
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
                    <h3>Knowing your location allows up to link you to the customers?/clients and assosiates withinand around your current location. However, you can choose not to broadcast your location with the settings below.
                    </h3>
                    </center>
                    </div><!--top text-->
                    
                 
                  
                   
                   
                    
                   
                      
                       
                            <div class="row businessholder">
                                <center>
                                 <h4>Change your email</h4>
                                
                                 </center>
                                 
                            <center>
                                <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="password" class="form-control" placeholder="Password" />
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                                
                                
                                 <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="email" class="form-control" placeholder="New Email" />
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                            </center>
                              
                              
                              
                              
                                
                               
                               
                               <div class="row">
                                        <div class='clickCheckLabel'>
                                        confirm
                                        </div><!--clickCheck-->
                                        <br>
                                        <div class='clickCheck'>
                                        <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                        <input id="cb6" name="cb6" type="checkbox">
                                        </form>
                                        </div><!--clickCheck-->
                                        
                                     
                                </div><!--row-->
     
                                </div><!--row business holder-->
                               
                               
                               
                               
                               <div class="row businessholder">
                                <center>
                                 <h4>Change your Mobile</h4>
                                
                                 </center>
                                 
                            <center>
                                <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="password" class="form-control" placeholder="Password" />
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                                
                                
                                 <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="text" class="form-control" placeholder="New Mobile" />
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                            </center>
                              
                              
                              
                              
                                
                               
                               
                               <div class="row">
                                        <div class='clickCheckLabel'>
                                        confirm
                                        </div><!--clickCheck-->
                                        <br>
                                        <div class='clickCheck'>
                                        <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                        <input id="cb6" name="cb6" type="checkbox">
                                        </form>
                                        </div><!--clickCheck-->
                                        
                                     
                                </div><!--row-->
     
                                </div><!--row business holder-->
                              
                              
                              <div class="row businessholder">
                                <center>
                                 <h4>Change your Password</h4>
                                
                                 </center>
                                 
                            <center>
                                <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="password" class="form-control" placeholder="Old Password" />
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                                
                                
                                 <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="password" class="form-control" placeholder="New Password" />
                                        <img src="{{ URL::asset('portal/img/eye.png') }}" height='30' width='30' style="float:right; margin-top:-32px;"/>
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                 <div class="row">
                                
                                <div class="col-md-4"></div><!--colmd-3-->
                                 
                                <div class="col-md-4">
                                		<input type="password" class="form-control" placeholder="Confirm password" />
                                         <img src="{{ URL::asset('portal/img/eye.png') }}" height='30' width='30' style="float:right; margin-top:-32px;"/>
                                </div><!--colmd-3-->
                                
                                <div class="col-md-4"></div><!--colmd-4-->
                                
                                </div><!--row-->
                                
                            </center>
                              
                              
                              
                              
                                
                               
                               
                               <div class="row">
                                        <div class='clickCheckLabel'>
                                        confirm
                                        </div><!--clickCheck-->
                                        <br>
                                        <div class='clickCheck'>
                                        <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                        <input id="cb6" name="cb6" type="checkbox">
                                        </form>
                                        </div><!--clickCheck-->
                                        
                                     
                                </div><!--row-->
     
                                </div><!--row business holder-->
                              
                               <div class="row businessholder">
                                <center>
                                 <h4>Email and text notifications</h4>
                                
                                 </center>
                                 
                           
                                <div class="row"> 
                                    <center>
                                      
                                     
                                      <div class="col-md-3">Notify me via email</div>
                                      <div class="col-md-3"> 
                                          <div class="switch">
                                          <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round_2" type="checkbox">
                                            <label for="cmn-toggle-1"></label>
                                          </div><!--switch-->
                                      </div><!--col-md-3-->
                                      <div class="col-md-3">Notify me via text message</div><!--col-md-3-->
                                      <div class="col-md-3"><div class="switch">
                                          <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round_2" type="checkbox">
                                            <label for="cmn-toggle-2"></label>
                                          </div><!--switch-->
                                      </div><!--col-md-3-->
                                     
                                      
                                    </center>
                                </div><!--row-->
                                
                          
                          
                                <div class="row"> 
                                    <center>
                                      
                                     
                                       <div class="col-md-3">Notify me of connection requests</div>
                                      <div class="col-md-3"> 
                                          <div class="switch">
                                          <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round_2" type="checkbox">
                                            <label for="cmn-toggle-3"></label>
                                          </div><!--switch-->
                                      </div><!--col-md-3-->
                                      <div class="col-md-3">Notify me of inquiries/messages</div><!--col-md-3-->
                                      <div class="col-md-3"><div class="switch">
                                          <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round_2" type="checkbox">
                                            <label for="cmn-toggle-4"></label>
                                          </div><!--switch-->
                                      </div><!--col-md-3-->
                                      
                                    </center>
                                </div><!--row-->
                              
                              
                              
                              
                                
                               
                               
                               <div class="row">
                                        <div class='clickCheckLabel'>
                                        confirm
                                        </div><!--clickCheck-->
                                        <br>
                                        <div class='clickCheck'>
                                        <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                        <input id="cb6" name="cb6" type="checkbox">
                                        </form>
                                        </div><!--clickCheck-->
                                        
                                     
                                </div><!--row-->
     
                                </div><!--row business holder-->
                              
                              
                                                  
                               
                                
                                
                                
                             
   </div><!--end page inportant-->               
</div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->
</div><!-- /#wrapper for the menu -->

  
  
   @include("portal.partials.footer")



</body>
</html>
