@include('partials.head')
@include('partials.navbar')
<div class="search" style="margin-top:115px;">
  <h4 class="register-text">Welcome to your events feed</h4>
  <input type="text" name="" class="cust" value="" placeholder="Search your favorite events happening near you..">
</div>
<div class="container" style="margin-top:50px;">

  <p class="upcoming">Upcoming  Events..</p>
  <hr class="line">
  @include('partials.css')
  <div class="row">
    @if (count($events) > 0)
      @foreach ($events as $event)


        <div class="col-md-3">
          <div class="card card-margin">
            <img src="images/{{$event->image}}" alt="" style="height:150px; width:100%;">
            <div class="card-header no-border">
              <a href="{{route('events.show',$event->id)}}" class="card-title" style="color:#000">{{$event->title}}</a>
            </div>
            <div class="card-body pt-0">
              <div class="widget-49">
                <div class="widget-49-title-wrapper">

                  {{-- <div class="widget-49-date-primary">
                  <span class="widget-49-date-day">{{$event->created_at->format('D')}}</span>
                  <span class="widget-49-date-month">{{$event->created_at->format('M')}}</span>
                </div> --}}
                <div class="widget-49-meeting-info">
                  <span class="widget-49-pro-title">{{$event->date}}</span>
                  <span class="widget-49-pro-title">{{$event->location}}</span>
                  <span class="widget-49-meeting-time">{{$event->start_time}} to {{$event->end_time}} Hrs</span>
                </div>
              </div>
              <ol class="widget-49-meeting-points">
                <li class="widget-49-meeting-item"><span>{{$event->special_guests}} will be attending</span></li>
                <li class="widget-49-meeting-item"><span>{{$event->event_giveaways}} will be offered</span></li>
                <li class="widget-49-meeting-item"><span>{{$event->description}}</span></li>
              </ol>
              {{-- <div class="widget-notify pull-right">
              <p>Seats available</p>
            </div> --}}
            {{-- <div class="widget-49-meeting-action">
            <a href="#" class="btn btn-sm">Buy Ticket</a>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
@endforeach
@else
  <p>Who who</p>
@endif
</div>
</div>
@include('partials.footer')
