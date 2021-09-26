@include('partials.head')
@include('partials.navbar')
<div class="container">
  @include('partials.css')
  <section id="events" style="margin-top:300px; margin-bottom:30px;">
    <div class="event-info">
      <h5>Create your event in simple steps</h5>
      <p>Complete the form below to get your event published..</p>
    </div>
    <ul id="progressBar">
      <li class="active">Basic Info</li>
      <li>Event Details</li>
      <li>Tickets</li>
      <li>Complete</li>
    </ul>
    <hr>
    @include('messages.flash-message')
    <div class="create-event">
      <form class="steps" action="{{@route('create.post')}}" method="post" enctype="multipart/form-data">
        <div class="row">

          @csrf
          <div class="col-md-12">
            <fieldset>
              <h2 class="fs-title">Event basic information</h2>
              <h3 class="fs-subtitle">We just need some basic information to beigin creating your event</h3>
              <label for="">Event Title</label>
              <input type="text" name="title" class="event_input" placeholder="Enter event title e.g Gala Awards.." value="" required>
              <label for="">Event Host</label>
              <input type="text" name="host" class="event_input" placeholder="Who is hosting the event.." value="" required>
              <label for="">Description</label>
              <textarea name="description" rows="4" cols="80" placeholder="Event Description" id="editor" class="event_input" style="height:200px;"></textarea>
              <input type="button" name="next" value="Next" name="next" class="next action-button">
            </fieldset>
            <fieldset>
              <h2 class="fs-title">Event Details</h2>
              <h3 class="fs-subtitle">Provide more details about the event so that your attendees have enough information..</h3>
              <label>Event Venue</label>
              <div class="ticket-category">
                <ul>
                  <li>Physical</li>
                  <li class="active">Online</li>
                </ul>
              </div>
              <div class="sections">
                <label for="">Event Type</label><br>
                <select class="event_select" name="category">
                  <option value="1">Sports</option>
                  <option value="2">Shopping</option>
                  <option value="3">Festival / Concert</option>
                  <option value="4">Restaurants</option>
                  <option value="5">Things to Do</option>
                  <option value="6">Accomodation</option>
                </select>
                <label for="">Date</label>
                <div class="inline-forms">
                  <input type="date" name="date" class="event_input" value="" required>
                  <input type="time" name="event_start_time" class="event_input" value="" required>
                  <input type="time" name="event_end_time" class="event_input" value="" required>
                </div>
                <label for="">Special Guests</label>
                <input type="text" name="special_guests" class="event_input" value="" placeholder="Special guests attending e.g. President" required>
                <section class="active">
                  <label for="">Location</label>
                  <input type="text" id="location" class="event_input" name="location" value="" required>
                </section>
                <section>
                    {{-- <input type="text" id="location" class="event_input" name="location" value="Online" hidden> --}}
                </section>
              </div>
              <label for="">Theme</label>
              <input type="text" name="theme" class="event_input" value="" placeholder="Your event theme e.g. All Black" required>
              <label for="">Give Aways</label>
              <input type="text" name="giveaways" class="event_input" value="" placeholder="Indicate any giveaways from the event" required>

              <input type="button" name="next" value="Previous" name="next" class="previous action-button">
              <input type="button" name="next" value="Next" name="next" class="next action-button">
            </fieldset>
            <fieldset>
              <h2 class="fs-title">Tickets</h2>
              <h3 class="fs-subtitle">Lets create your tickets</h3>
              <label>Type of ticket</label>
              <div class="ticket-category">
                <ul>
                  <li>Paid</li>
                  <li class="active">Free</li>
                </ul>
              </div>
              <div class="sections">
                <section class="active">
                  <label for="">Price</label>
                  <input type="text" name="price" class="event_input" value="" placeholder="Cost" required>
                </section>
                <section>
                  <label for="">Price</label>
                  <input type="text" name="price" class="event_input" value="Free" placeholder="Cost" disabled>
                </section>
                <label for="">Capacity</label>
                <input type="number" class="event_input" name="capacity" placeholder="Maximum event capacity e.g 200" value="" required>

                <label for="">Sales Start</label>
                <div class="inline-forms">
                  <input type="date" name="sales_start_date" class="event_input w-50" value="" required>
                  <input type="time" name="sales_start_time" class="event_input w-50" value="" required>
                </div>
                <label for="">Sales End</label>
                <div class="inline-forms">
                  <input type="date" name="sales_end_date" class="event_input w-50" required>
                  <input type="time" name="sales_end_time" class="event_input w-50"  required>
                </div>
              </div>

              <input type="button" name="next" value="Previous" name="next" class="previous action-button">
              <input type="button" name="next" value="Next" name="next" class="next action-button">
            </fieldset>
            <fieldset>
              <h2 class="fs-title">Upload Event cover</h2>
              <h3 class="fs-subtitle">Select high quality images that will capture the attention of your attendees</h3>
              <button type="button" class="file-upload-btn" onclick="$('.file-upload-input').trigger('click')" name="button">Add Image</button>
              <div class="image-upload-wrap">

                <input class="file-upload-input" type='file'  accept="image/*" onchange="readURL(this);"  name="event_cover"/>
                <div class="drag-text">
                  <h3>Drag and drop a file or select add Image</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
              </div>
              {{-- <div class="image-upload-wrap">

              <input type="file" name="event_cover" class="file-upload-input" value="" onchange="readUrl(this)" required>
              <div class="drag-text">
              <h3>Drag and drop or select image</h3>
            </div>
            <div class="file-upload-content">
            <img src="#" class="file-upload-image" alt="Your image">
          </div>
          <div class="image-title-wrap">
          <button type="button" name="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span> </button>
        </div>
      </div> --}}
      <input type="submit" name="next" value="Previous" name="next" class="previous action-button">
      <button type="submit"  name="next" class="event_button action-button">Publish</button>
    </fieldset>
  </div>
  {{-- <div class="col-md-12" style="text-align:center">
  <button type="submit" class="event_button submit" name="button">Publish</button>
</div> --}}
</div>
</form>
</div>

</section>

</div>
<script>
ClassicEditor
.create( document.querySelector( '#editor' ) )
.then( editor => {
  // editor.ui.view.editable.element.style.height='200px';
  // min-height:'300px';
  console.log( editor );
} )
.catch( error => {
  console.error( error );
} );
</script>

@include('partials.footer')
