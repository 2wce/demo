
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
        
        
        
        
<div style="position:absolute;width:101%; z-index:0;margin-top:-22px;margin-left:-22px;" > <!--div to hold the top bar and progress bar chete-->   
<!--navigation-->   

@include("portal.partials.topNavBar")






<div class="container-fluid">


@include("portal.partials.progressbar")   
                      
 <div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Help people identify you by adding your picture.</h4>
         </center>
         </div><!--top text-->
         
         <div class="row">
         <center>
         <img src="{{ URL::asset('portal/img/user.png') }}" style="margin-top:20px; height:70px;width:70px;border-radius:35px;"/>
         </center>
         </div><!--prof image row-->
     
         <div class="row">
         <center>
         <a class="btn btn-primary btn-md" href="#" role="button" id='dimensions' style="margin-top:40px;margin-bottom:-5px;">Add a picture</a>
         </center>
         </div><!--btnadd pic row-->
          
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--info businessholder--> 

         
         
     <div class="row businessholder">
     <div class="topText">
      
        <div class="row">
                          <div class="col-md-4">
                          <div class="form-group has-success has-feedback">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your trading names/Aliases">
                          </div><!--form-group-->
                          </div><!--col-md-4-->
                          
            	 
                 
                 <div class="col-md-4 col-md-offset-1">
                           <div class="btn-group">
                              <button type="button" class="btn btn-primary">Your Title</button>
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Your title</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">Mr</a></li>
                                <li><a href="#">Ms</a></li>
                                <li><a href="#">Mrs</a></li>
                                 <li><a href="#">Doctor</a></li>
                                  <li><a href="#">Professor</a></li>
                                   <li><a href="#">Saint</a></li>
                                
                              </ul>  
                              </div><!--btn-group-->
            	 </div><!--col-md-4-->


               
                 <div class="col-md-1">
                 Your Gender
                 </div><!--col-md-2-->
                 
                 <div class="col-md-2">
                 <div class="switch">
                  <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                    <label for="cmn-toggle-1"></label>
         	      </div>
                    <p>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female</p>
                </div><!--col-md-4-->
                           
                          
                           
          
           
        </div><!--row-->
        
        
         
        <div class="row">
                 <div class="col-md-4">
                          <div class="form-group has-success has-feedback">
                            <input type="text" class="form-control focusedInput" id="exampleInputEmail1" placeholder="Trade/Profesion">
                         </div><!--form-group-->
            	 </div><!--col-md-4-->
                 
                 
                 
               <div class="col-md-4 col-md-offset-1">
                <div class='togglebtn'>
                  <h5>Date of birth</h5>
                            <div id="dateday">
                            <select>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            </select>
                            </div>
                            <div id="datemonth">
                            <select>
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            </select>
                            </div>
                            <div id="dateyear">
                            <select>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            </select>
                            </div>
                    
                </div><!--tradenamne-->
              </div><!--col-md-4-->         
                          
                           
          
           
        </div><!--row-->
        
          
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div> <!--clickCheckLabel-->
                
        </div><!--info tab2 row businessholder">--> 
        
        
        
        
  <div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Sell yourself in a few words below</h4>
         </center>
         </div><!--top text-->
         <div class="row">
        
          <div class="col-md-10 col-md-offset-1">
           <div class="form-group has-success has-feedback">
           <textarea cols='' rows='10' class="form-control"></textarea>
           </div><!--col-md-9-->
           </div><!--form group-->
          
          
           
         </div><!--row-->
       
          
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--row businessholder-->   
        
 <div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Do you have any businesses that you run? Plus would be a great platform for your business to operate and get customers/clients and find their associates.</h4>
         </center>
         </div><!--top text-->
         
         <div class="row" style="margin-top:30px;">
          <div class="col-md-7">
          <div class="form-group has-success has-feedback">
          <input type="text" class="form-control" placeholder="Name of the Business" />
          </div><!--form group-->
         </div><!--.col-md-7-->
           <div class="col-md-4">
          <label>Click here to edit the details</label>
          </div><!--col-md-4-->
        </div><!--row-->
          
         
           <div class="row">
           <div class="col-md-7">
           <label>Click here to add another business</label>
           </div><!--col-md-7-->
          </div><!--.row-->
           
              
                    
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--row businessholder--> 
        
        
        

        
        
<div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Do you have any organisations/assosiations/regulatory bodies that you are affiliate associate of? Entering these below will help to sell you as a bona fide professional and expert, within industrie you operate.</h4>
         </center>
         </div><!--top text-->
         
         <div class="row" style="margin-top:20px;">
          <div class="col-md-5">
          <div class="form-group has-success">
          <input type="text" class="form-control" placeholder="Name of the Business" />
          </div><!--form group-->
          </div><!--col-md-5-->
          <div class="col-md-5 col-md-offset-0">
                           <div class="btn-group">
                              <button type="button" class="btn btn-primary">Capacity</button>
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Capacity</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#">less than 50</a></li>
                                <li><a href="#">more than 50</a></li>
                                <li><a href="#">between 100 to 200</a></li>
                                 <li><a href="#">more than 200</a></li>
                                
                              </ul>  
                              </div><!--btn-group-->
          </div><!--col-md-5-->
          
        </div><!--row-->
          
          
         <div class="row">
          <div class='col-md-5'>
           <label>Add another organisation</label>
          </div><!--.col-md-5-->
           </div><!--row-->
              
                    
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
     
     </div><!--info tab6-->
    
    
    
    <div class="row businessholder">
     <div class="topText">
         <center>
         <h4>Do you have any cirtificates that you have won?</h4>
         </center>
         </div><!--top text-->
         
         <div class="row">
          <div class="col-md-5 col-md-offset-1">
          <div class="form-group has-success">
          <input type="text" class="form-control" placeholder="Name of the awarding organisation" />
          </div><!--form group-->
          </div><!--col-md-5-->
          
          <div class="col-md-5">
          <div class="form-group has-success">
          <input type="text" class="form-control" placeholder="Name of the award" />
          </div><!--form group-->
          </div><!--col-md-5-->
           
          
        </div><!--row-->
          
          
         
          <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <div class='togglebtn'>
                  <h5>Year awarded</h5>
                            <div id="dateyear">
                            <select>
                            <option>1992</option>
                            <option>2005</option>
                            <option>2003</option>
                            </select>
                            </div><!--date date day-->
             </div><!--toggle btn-->
             </div><!--col-md-5-->
          </div><!--.addbusiness-->
           
               
                    
          <div class='clickCheckLabel'>
          confirm
          </div><!--clickCheck-->
          <br>
           <div class='clickCheck'>
                  <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<input id="cb6" name="cb6" type="checkbox">
			      </form>
            </div><!--clickCheck-->
      <div class='row'>
      <div class="col-md-5">
           <label>Add another Award</label>
           </div><!--col-md-5-->
          </div><!--.row-->
     </div><!--row businessholder-->    
        
        
        <center>
        <h3>Great stuff, Proffesor Nyasha Now go aheah and edit your <u>business details.</u></h3>
        </center>
                
                
</div><!-- /.container-fluid -->
</div><!-- /#page-content-wrapper -->
</div><!-- /#wrapper for the menu -->

  
  
  @include("portal.partials.footer")


</body>
</html>
