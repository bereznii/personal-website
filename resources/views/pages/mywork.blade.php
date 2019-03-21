@extends('layouts.main')

@section('page')
<!-- Masthead -->
<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-8 align-self-end">
          <h1 class="text-uppercase text-white">Dmytro Bereznii</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <h3 class="text-white-75 font-weight-light mb-5">Self-learning software engineering and architecture through research & development.</h3>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-black">
    <div class="container py-5">
      <h2 class='text-uppercase pb-5'>My Work</h5>
      <p class='text-light'>I am a computer systems and network course student, who is interested in designing and developing computer networks and web-development overall. 
      Not the best student and not one of those who learn everything by heart, to pretend they understand it. 
      But I am a curious type of person, who likes to understand things, and even more so, be able to put this knowledge into practice.</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section">
    <div class="container py-4">
        <h5 class='h5spacing'>Last Projects (from GitHub)</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Language</th>
              <th scope="col">Commits</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="container py-4">
        <h5 class='h5spacing'>Future Ventures (teach myself in 2019)</h5>
        <ul>
          <li>Scalable distributed systems (infrastructure, networks, microservices)</li>
          <li>Practise more with vanilla PHP</li>
          <li>MySQL for complex queries</li>
          <li>Any NoSQL, such as MongoDB, Memcached or Redis</li>
          <li>Security</li>
          <li>Testing</li>
          <li>More practice in JavaScript, NodeJS?</li>
          <li>General purpose language, such as Python or C#</li>
          <li>Blockchain</li>
        </ul>
        <p>This list built from interests in my head right now, so it may vary over time. You can read more about my technology stack on the software page.</p>
    </div>
  </section>

@endsection