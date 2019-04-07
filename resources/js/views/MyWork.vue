<template>
<div id="mywork-view">
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-8 align-self-end">
          <h1 class="text-uppercase text-white">Dmytro<br> Bereznii</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <h4 class="text-white-75 font-weight-light mb-5">Self-learning software engineering and architecture through research & development.</h4>
        </div>
      </div>
    </div>
  </header>

  <!-- About My Work -->
  <section class="page-section bg-black">
    <div class="container py-5">
      <h2 class='text-uppercase pb-5'>My Work</h2>
      <p class='text-light'>I am a computer systems and network course student, who is interested in designing and developing computer networks and web-development overall. 
      Not the best student and not one of those who learn everything by heart, to pretend they understand it. 
      But I am a curious type of person, who likes to understand things, and even more so, be able to put this knowledge into practice.</p>
      <p class="text-light">Want to build scalable and distributed architectures and work with processes automatization.</p>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="page-section">
    <div class="container py-4">
        <h5 class='h5spacing'>Last Projects (from GitHub)</h5>
        <table class="table table-hover table-responsive-md">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Language</th>
              <th scope="col">Updated</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="project in projects">
              <td>{{project.name}}</td>
              <td>{{project.description}}</td>
              <td>{{project.language}}</td>
              <td>{{project.updated}}</td>
            </tr>
          </tbody>
        </table>
    </div>

    <!-- Ventures Section -->
    <div class="container py-4">
        <h5 class='h5spacing'>Future Ventures (interested in 2019)</h5>
        <ul>
          <li>Scalable distributed systems (infrastructure, networks, microservices)</li>
          <li>MySQL for complex queries</li>
          <li>Any NoSQL, such as MongoDB, Memcached or Redis</li>
          <li>Security</li>
          <li>Testing</li>
          <li>More practice with JavaScript, NodeJS?</li>
          <li>General purpose language, such as Python or C#</li>
          <li>Blockchain</li>
        </ul>
        <p>This list built from interests in my head right now, so it may vary over time. You can read more about my technology stack on the software page.</p>
    </div>
  </section>
</div>
</template>
<script>
    export default {
      props:['projects']
    }
</script>