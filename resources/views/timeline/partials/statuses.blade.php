<div class="scroller">
<!-- shows statuses and replies plus reply forms for each status -->

@if (!$statuses->count())
	<p>There is nothing in this timeline, yet.</p>
@else
	@foreach ($statuses as $status)

     	@if($status->type_id == 0)

          @include('templates.posts.image')

			@endif

			@if($status->type_id == 1)

          @include('templates.posts.product')

			@endif

			@if($status->type_id == 2)

          @include('templates.posts.service')

			@endif
			@if($status->type_id == 4)

          @include('templates.posts.image')

			@endif

		<div class="media">



		        @foreach ( $status->replies as $reply )



		        @endforeach

		        <!-- show input textarea to reply to this status -->

		    </div>

	@endforeach

	{!! $statuses->render() !!}

@endif
</div>
 <script type="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js">

</script>
<script>
    $(document).ready(function(){

        //hides the default paginator
        $('ul.pagination:visible:first').hide();

        //init jscroll and tell it a few key configuration details
        //nextSelector - this will look for the automatically created
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
</script>
