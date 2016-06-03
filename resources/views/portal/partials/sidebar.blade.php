

    <div id="sidebar-wrapper">
        
            <ul class="sidebar-nav">
            
            
            <br>
            <br>
            <br>
            <br>
            
                <li><a href="proffesional_info">
                <div class='navicon'>
                @if($data=='professional')
                <div class="selected"></div>
                @endif
                <center>
                <img src="{{ URL::asset('portal/img/book.png') }}" />
                </center>
                </div></a>
                </li>

               
                  
                <li><a href="business_info">
                <div class='navicon'>
                @if($data=='business')
                <div class="selected"></div>
                @endif
                <center>
                <img src="{{ URL::asset('portal/img/circle.png') }}" />
                </center>
                </div></a>
                </li>
                
                <li><a href="contact_info">
                <div class='navicon'>
                @if($data=='contact')
                <div class="selected"></div>
                @endif
                <center>
                <img src="{{ URL::asset('portal/img/shape.png') }}" />
                </center>
                </div></a>
                </li>


                <li><a href="location_info">
                <div class='navicon'>
                @if($data=='location')
                <div class="selected"></div>
                @endif
                <center>
                <img src="{{ URL::asset('portal/img/settings.png') }}" />
                </center>
                </div></a>
                </li>

                <li><a href="general_settings">
                <div class='navicon'>
                @if($data=='general')
                <div class="selected"></div>
                @endif
                <center>
                <img src="{{ URL::asset('portal/img/settings.png') }}" />
                </center>
                </div></a>
                </li>

               
               
               
            </ul>
        </div><!-- /#sidebar-wrapper -->


        
       