<template>
  <v-app>
      <v-app-bar
        color="deep-purple accent-4"
        dense
        darkt
      >
      
        <router-link to="/"><v-list-item title="Home"  value="menuHome"></v-list-item></router-link>
        <router-link to="/about"><v-list-item title="About"  value="menuAbout"></v-list-item></router-link>
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
      </v-app-bar>
    

    <v-main>
      <v-container grid-list-xs>
        <router-view></router-view>
      </v-container>
    </v-main>
  </v-app>
</template>


<script>

</script>