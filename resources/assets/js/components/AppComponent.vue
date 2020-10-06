<template>
  <div>
    <div class="container">
        <sidebar-component align="right"></sidebar-component>

      
    </div>
  </div>
</template>

<script>
import HoraComponent from "./horaExtra/Home";
import NoticiaComponent from "./noticias/Home";
import SidebarComponent from "./sidebarComponent";
export default {
  components: {
    HoraComponent,
    NoticiaComponent,
    SidebarComponent,
  },
};
</script>
