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

   <!-- About Section -->
   <section class="page-section bg-black">
    <div class="container py-5">
      <h2 class='text-uppercase'>Technology stack</h2>
      <p class="text-uppercase pb-5 stack-text">My Website Architecture</p>
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