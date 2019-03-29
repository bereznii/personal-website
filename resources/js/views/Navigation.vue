<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4" id="mainNav">
            <div class="container">
            <a class="navbar-brand" href="#page-top">Dmytro Bereznii</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse shift" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item text-center">
                    <!--<a class="nav-link" href="{{route('mywork')}}">My Work</a>-->
                    <router-link class="nav-link" :to="{ name: 'mywork' }">My Work</router-link>
                </li>
                <li class="nav-item text-center">
                    <!--<a class="nav-link" href="{{route('software')}}">Software</a>-->
                    <router-link class="nav-link" :to="{ name: 'software' }">Software</router-link>
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link text-center" href="{{route('contact')}}">Contact</a>-->
                    <router-link class="nav-link text-center" :to="{ name: 'contact' }">Contact</router-link>
                </li>
                </ul>
            </div>
            </div>
        </nav>
            <router-view></router-view>
        <!-- Footer -->
        <!-- Contact Section -->
        <section class="bg-dark page-section py-5">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                <h5 class="mt-0 pb-4 text-light text-uppercase">Stay Connected</h5>
                <a href='https://www.instagram.com/bereznii_/'><img class='contact-icon' src=""></a>
                <a href='https://www.facebook.com/profile.php?id=100008971929484'><img class='contact-icon' src=""></a>
                <a href='https://www.linkedin.com/in/%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B9-%D0%B1%D0%B5%D1%80%D0%B5%D0%B7%D0%BD%D0%B8%D0%B9-75173b177/'><img class='contact-icon' src=""></a>
                <a href="#contact"><img class='contact-icon' src=""></a>
                </div>
            </div>
            </div>
        </section>

        <footer class="bg-black py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md"><a class='text-light' href="#mywork">My Work</a></div>
                <div class="col col-md text-light">|</div>
                <div class="col col-md"><a class='text-light' href="#software">Software</a></div>
                <div class="col col-md text-light">|</div>
                <div class="col col-md"><a class='text-light' href="#contact">Contact</a></div>
            </div>
            <!--<div class="small text-center text-muted">Copyright &copy; {{date("Y")}} - Dmytro Bereznii</div>-->
            </div>
        </footer>
    </div>
</template>
<script>
    export default {}
</script>