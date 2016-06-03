<div class="panel panel-gray" data-widget='{"draggable": "false"}'>
          <div class="panel-heading">
            <h2>Activities</h2>
            <div class="panel-ctrls button-icon-bg"
      data-actions-container=""
      data-action-collapse='{"target": ".panel-body"}'
      data-action-colorpicker=''
      data-action-refresh-demo='{"type": "circular"}'
      >
    </div>
  </div>

  <div class="panel-body scroll-pane" style="height: 320px;">
    <div class="scroll-content">
      <ul class="mini-timeline">
        @foreach($notifications as $note)
        <li class="mini-timeline-lime">
          <div class="timeline-icon"></div>
          <div class="timeline-body">
            <div class="timeline-content">
          <a href="#/" class="name">{{$note->text}} {{$note->from_id}}</a>
              <span class="time">{{$note->created_at->diffForHumans()}}</span>
            </div>
          </div>
        </li>
        @endforeach



      </ul>
    </div>
  </div>
</div>
