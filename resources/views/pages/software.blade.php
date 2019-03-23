@extends('layouts.main')

@section('page')
  <!-- Alternative CSS -->
  <link href="{{asset('css/software.css')}}" rel="stylesheet">

  <!-- Services Section -->
  <section class="page-section project-repositories">
    <div class="container py-4">
        <h2 class='h5spacing'>Projects Repository</h2>
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
  </section>

   <!-- Platform Section -->
   <section class="page-section bg-black">
    <div class="container py-5">
      <h2 class='text-uppercase'>This Platform</h2>
      <p class="text-uppercase pb-1 stack-text">Idea behind it</p>
      <p class='text-light'>
      The main problem, which led to creation of this 'platform' was lack of real-life experience of creation and deploying web-applications. bereznii.me allows me to practice in different technologies on full cycle of project's lifespan: form designing to deploying.<br>
      It is built mainly using PHP based on Laravel Framework and JS on Vue.js.<br>
      This front-end pages are just a cover for everything going on in the background. ...
      </p>
    </div>

    <!-- Stack Section -->
    <div class="container py-5">
      <h2 class='text-uppercase'>Technology stack</h2>
      <p class="text-uppercase pb-3 stack-text">My Website Architecture</p>
      <div class="row stack-text">
        <div class='col'><h5 class=''>Front-end</h5>
          <p class="p-subheading">HTML, CSS, JS</p>
          <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Bootstrap4</li>
            <li>JQuery</li>
            <li>Laravel Blade</li>
          </ul>
        </div>  
        <div class='col'><h5 class='p-heading'>Back-end</h5>
          <p class="p-subheading">PHP</p>
          <ul>
            <li>Laravel app</li>
          </ul>
        </div>  
        
        <div class='col'><h5>Database</h5>
          <p class="p-subheading">MySQL</p>

        </div>  
        <div class='col'><h5>Deployment</p>
          <p class="p-subheading"></p>
          <ul>
            <li>...</li>
          </ul>
        </div>  
        <div class='col'><h5>Security</p>
          <p class="p-subheading"></p>
          <ul>
            <li>Laravel ...</li>
          </ul>
        </div>  
      </div>
    </div>
  </section>

@endsection