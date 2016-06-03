$(document).ready(function(){
   //hides the default paginator
   $('ul.pagination:visible:first').hide();

   //init jscroll and tell it a few key configuration details
   //nextSelector - this will look for the automatically created {{$data->links()}}
   //contentSelector - this is the element wrapper which is cloned and appended with new paginated data
   $('div.scroller').jscroll({
       debug: true,
       autoTrigger: true,
       nextSelector: '.pagination li.active + li a',
       contentSelector: 'div.scroller',
       callback: function() {

           //again hide the paginator from view
           $('ul.pagination:visible:first').hide();
         }
     });
 });
