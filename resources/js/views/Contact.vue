<template>
  <div>
  <link href="/css/contact.css" rel="stylesheet">
    <section class="page-section contact-section">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <form method="post" action="">
              @csrf
              <h4 class="mt-0 text-center">Send me an email</h4>
              <label for="NameInput">Name</label>
              <input type="text" name='name' id="NameInput" class="form-control" placeholder="Your name">
              <label for="EmailInput">Email</label>
              <input type="email" name='email' id="EmailInput" class="form-control" placeholder="Your email">
              <label for="SubjectInput">Subject</label>
              <input type="text" name='subject' id="SubjectInput" class="form-control" placeholder="Subject of email">
              <label for="ReasonInput">Reason</label>
              <select class="form-control" name='reason' id="ReasonInput">
                <option>Just to say HI</option>
                <option>Business</option>
                <option>Software</option>
                <option>Social Media</option>
                <option>Other</option>
              </select>
              <label for="TextInput">Message</label>
              <textarea class="form-control" name='message' id="TextInput" rows="4" placeholder="..."></textarea>
              <div class="col text-center">
                <button type="submit" class="btn btn-primary my-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>