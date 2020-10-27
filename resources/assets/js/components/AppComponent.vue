<template>
  <div>
    <div class="container">
        <sidebar-component align="right"></sidebar-component>

      
    </div>
    <transition name="component-fade" mode="out-in">
      <router-view></router-view>
    </transition>
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

<style>
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
