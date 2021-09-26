@include('partials.head')
@include('partials.navbar')
<section style="margin-top:300px;">
  @include('partials.css')
  <div class="container">
    <div class="card card-margin">
      <div class="row">

        {{-- <div class="col-md-4">
        <img src="images/1630305692.jpg" alt="" style="height:cover; width:100%;">
      </div> --}}
      <div class="col-md-12">
        <img src="{{URL::asset('images/'.$event->image)}}" alt="" style="height:400px; width:100%;">

        <h4 class="main-title">{{$event->title}}</h4>

        {{-- <img src="assets/overlay.png" alt=""> --}}
        <div class="card-details">
            @include('messages.flash-message')
          <div class="about-game">

            <div class="host-section">
              {{-- <img src="{{URL::asset('images/1630995463.jpg')}}" class="rounded-circle" alt="" style="width:100px;  height:100px;"> --}}

              {{-- <h5 class="event-title">Event Host: CEO</h5> --}}
            </div>
            <h5 class="card-title">About Event</h5>
            <p>{{$event->description}}</p>

          </div>
          <div class="event-pricing">
            <h5 class="event-title">Pricing</h5>
            <p>Ksh.{{$event->price}}</p>
          </div>
          <div class="event-time">
            <h5 class="event-title">Event Time</h5>
            <p>Start time: {{$event->sales_start_time}} hrs</p>
            <p>End time: {{$event->sales_end_time}} hrs</p>
          </div>
          <div class="others">
            <h5 class="event-title">Invited Guests</h5>
            <p>{{$event->special_guests}}</p>
          </div>

          <div class="event-reservation">
            <form class="" action="/book" method="post">
              @csrf
              <input type="hidden" name="event_id" value="{{$event->id}}">
              <input type="hidden" name="price" value="{{$event->price}}">
              <input type="text" class="cust1" name="promo_code" value="ACVFRT" placeholder="Enter promo code">
              <button type="submit" class="book-btn" name="book">Reserve Ticket</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

</section>
@include('partials.footer')
