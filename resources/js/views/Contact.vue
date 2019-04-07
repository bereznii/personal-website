<template>
  <div>
  <link href="/css/contact.css" rel="stylesheet">
    <section class="page-section contact-section">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <form @submit.prevent="sendEmail">
              <h4 class="mt-0">Send me an email</h4>
              <label for="NameInput">Name:</label>
              <input type="text" name='name' id="NameInput" class="form-control" placeholder="Your name" v-model="fields.name" required>
              <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
              <label for="EmailInput">Email</label>
              <input type="email" name='email' id="EmailInput" class="form-control" placeholder="Your email" v-model="fields.email" required>
              <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
              <label for="SubjectInput">Subject</label>
              <input type="text" name='subject' id="SubjectInput" class="form-control" placeholder="Subject of email" v-model="fields.subject" required>
              <div v-if="errors && errors.subject" class="text-danger">{{ errors.subject[0] }}</div>
              <label for="ReasonInput">Reason</label>
              <select class="form-control" name='reason' id="ReasonInput" v-model="fields.reason" required>
                <option selected>Just to say HI</option>
                <option>Business</option>
                <option>Software</option>
                <option>Social Media</option>
                <option>Other</option>
              </select>
              <div v-if="errors && errors.reason" class="text-danger">{{ errors.reason[0] }}</div>
              <label for="TextInput">Message</label>
              <textarea class="form-control" name='message' id="TextInput" rows="4" placeholder="..." v-model="fields.message" required></textarea>
              <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
              <div class="col text-center">
                <button type="submit" class="btn btn-primary my-3">Submit</button>
                <div v-if="success" class="alert alert-success mt-3">
                  Message sent!
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        fields: {},
        errors: {},
        success: false,
        loaded: true
      }
    },
    methods: {
      sendEmail(){
        if (this.loaded) {
          this.loaded = false;
          this.success = false;
          this.errors = {};
          axios.post('/send_email', this.fields).then(response => {
            this.fields = {}; //Clear input fields.
            this.loaded = true;
            this.success = true;
          }).catch(error => {
            this.loaded = true;
            if (error.response.status === 422) {
              this.errors = error.response.data.errors || {};
            }
          });
        }
      }
    }
  }
</script>