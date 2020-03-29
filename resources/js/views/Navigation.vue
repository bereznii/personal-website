<template v-on:scroll="scrollFunction">
    <div id="base-view">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 navbar-notscrolled" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Dmytro Bereznii</a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item text-center">
                            <router-link class="nav-link" @click.native="closeMenu()" :to="{ name: 'mywork' }">My Work</router-link>
                        </li>
                        <li class="nav-item text-center">
                            <router-link class="nav-link" @click.native="closeMenu()" :to="{ name: 'software' }">Software</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link text-center" @click.native="closeMenu()" :to="{ name: 'contact' }">Contact</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <router-view v-bind:projects="projects"></router-view>
        <!-- Footer -->
        <!-- Contact Section -->
        <section class="bg-dark page-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                    <h5 class="mt-0 pb-4 text-light text-uppercase">Stay Connected</h5>
                    <a href='https://www.instagram.com/bereznii_/'><img class='contact-icon' src="/img/instagram.svg"></a>
                    <a href='https://github.com/bereznii'><img class='contact-icon' src="/img/github.png"></a>
                    <a href='https://www.facebook.com/profile.php?id=100008971929484'><img class='contact-icon' src="/img/facebook.svg"></a>
                    <a href='https://www.linkedin.com/in/dmytro-bereznii'><img class='contact-icon' src="/img/linkedin.svg"></a>
                    <router-link class='text-light' :to="{ name: 'contact' }"><img class='contact-icon' src="/img/mail.svg"></router-link>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-black py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-md"><router-link class='text-light' @click.native="closeMenu()" :to="{ name: 'mywork' }">My Work</router-link></div>
                    <div class="delimiter col col-md text-light">|</div>
                    <div class="col col-md"><router-link class='text-light' @click.native="closeMenu()" :to="{ name: 'software' }">Software</router-link></div>
                    <div class="delimiter col col-md text-light">|</div>
                    <div class="col col-md"><router-link class='text-light' @click.native="closeMenu()" :to="{ name: 'contact' }">Contact</router-link></div>
                </div>
            </div>
        </footer>
    </div>
</template>
<script>
    export default {
        data() {
          return {
              projects: null,
          };
        },
        mounted () {
          axios
            .get('api/projects')
            .then(response => (this.projects = response.data))
        },
        methods: {
            handleScroll (event) {
                let header = document.querySelector("#mainNav");
                if (window.scrollY > 100 && !header.className.includes('v-toolbar--bgchange')) {
                    header.classList.remove('navbar-notscrolled');
                    header.classList.add('navbar-scrolled');
                    header.classList.remove('py-4');
                    header.classList.add('py-2');
                } else if (window.scrollY < 100) {
                    header.classList.remove('navbar-scrolled');
                    header.classList.add('navbar-notscrolled');
                    header.classList.remove('py-2');
                    header.classList.add('py-4');
                }
            },
            closeMenu() {
                $('#navbarResponsive').collapse('hide');
            }
        },
        created () {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>
