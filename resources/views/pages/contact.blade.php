@extends('layouts.main')

@section('page')
  <!-- Alternative CSS -->
  <link href="{{asset('css/contact.css')}}" rel="stylesheet">

  <!-- Contact Section -->
  <section class="page-section contact-section">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h4 class="mt-0 text-center">Send me an email</h4>
          <label for="NameInput">Name</label>
          <input type="text" id="NameInput" class="form-control" placeholder="Your name">
          <label for="EmailInput">Email</label>
          <input type="email" id="EmailInput" class="form-control" placeholder="Your email">
          <label for="SubjectInput">Subject</label>
          <input type="text" id="SubjectInput" class="form-control" placeholder="Subject of email">
          <label for="ReasonInput">Example select</label>
          <select class="form-control" id="ReasonInput">
            <option>Just to say HI</option>
            <option>Business</option>
            <option>Software</option>
            <option>Social Media</option>
            <option>Other</option>
          </select>
          <label for="TextInput">Message</label>
          <textarea class="form-control" id="TextInput" rows="4" placeholder="..."></textarea>
  
    
        </div>
      </div>
    </div>
  </section>

@endsection