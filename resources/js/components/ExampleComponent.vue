<template>
    <div>
        <Navbar :user="user"/>

        <Sidebar :user="user"/>
        <!-- Content Wrapper. Contains page content -->
        <div className="content-wrapper">
            <slot name="breadcrumbs"></slot>
            <!-- Main content -->
            <section className="content">
                <slot name="content"></slot>
                <div class="card">1111</div>
                <div class="my_class">222</div>

            </section>
            <!-- /.content -->
        </div>
        <Footer/>
    </div>
</template>

<script>

import Navbar from "./global/Navbar.vue";
import Sidebar from "./global/Sidebar.vue";
import Footer from "./global/Footer.vue";

export default {
    name: "Container",
    props: ['user', 'breadcrumbs', 'domain'],
    components: {Footer, Sidebar, Navbar},
    mounted() {
        // Load Js Files
        const jquery = document.createElement("script");
        jquery.setAttribute('src', '/adminlte/plugins/jquery/jquery.min.js');
        jquery.async = true;
        document.body.appendChild(jquery);

        const bootstrap = document.createElement("script");
        bootstrap.setAttribute('src', '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');
        bootstrap.async = true;
        document.body.appendChild(bootstrap);

        const adminlte = document.createElement("script");
        adminlte.setAttribute('src', '/adminlte/dist/js/adminlte.min.js');
        adminlte.async = true;
        document.body.appendChild(adminlte);

        const overlayScrollBars = document.createElement("script");
        overlayScrollBars.setAttribute('src', '/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');
        overlayScrollBars.async = true;
        document.body.appendChild(overlayScrollBars);
    }
}
</script>
