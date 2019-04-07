<template>
<div id="software">
  <!-- Alternative CSS -->
  <link href="/css/software.css" rel="stylesheet">

  <!-- Services Section -->
  <section class="page-section project-repositories">
    <div class="container py-4">
        <h2 class='h5spacing'>Projects Repository</h2>
        <table class="table table-hover table-responsive-md">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Language</th>
              <th scope="col">Created</th>
              <th scope="col">Updated</th>
              <th scope="col">Size (kb)</th>
              <th scope="col">Commits</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="project in projects">
              <td>{{project.name}}</td>
              <td>{{project.description}}</td>
              <td>{{project.language}}</td>
              <td>{{project.created}}</td>
              <td>{{project.updated}}</td>
              <td>{{project.size}}</td>
              <td>{{project.commits}}</td>
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
      </p>
    </div>

    <!-- Stack Section -->
    <div class="container py-5">
      <h2 class='text-uppercase'>Technology stack</h2>
      <p class="text-uppercase pb-3 stack-text">My Website Architecture</p>
      <div class="row stack-text">
        <div class='col-sm-12 py-xs-3 col-lg'><h5 class='p-heading'>Front-end</h5>
          <p class="p-subheading">HTML, CSS, JS</p>
          <ul>
            <li>Single page web-application built with Vue.js and Vue Router</li>
            <li>Multi-page, server rendered web-application built with Laravel and Laravel Blade</li>
          </ul>
        </div>  
        <div class='col-sm-12 py-xs-3 col-lg'><h5 class='p-heading'>Back-end</h5>
          <p class="p-subheading">PHP</p>
          <ul>
            <li>Laravel Application</li>
          </ul>
        </div>  
        <div class='col-sm-12 py-xs-3 col-lg'><h5>Security</h5>
          <p class="p-subheading">Laravel</p>
          <ul>
            <li>Basic Laravel Authentication for me</li>
            <li>Laravel Validation</li>
          </ul>
        </div> 
        <div class='col-sm-12 py-xs-3 col-lg'><h5>Database</h5>
          <p class="p-subheading">MySQL</p>
          <ul>
            <li>All saved data</li>
            <li>Laravel Queues</li>
          </ul>
        </div>  
        <div class='col-sm-12 py-xs-3 col-lg'><h5>Deployment</h5>
          <p class="p-subheading"></p>
          <ul>
            <li>...</li>
          </ul>
        </div>  
      </div>
    </div>
  </section>
  </div>
</template>
<script>
    export default {
        props:['projects']
    }
</script>