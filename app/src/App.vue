<template>
  <v-app>
      <v-navigation-drawer
        theme="dark"
        permanent
      >
        <v-list color="transaparent">
          <v-list-item prepend-icon="mdi-folder"  value="menuHome"><router-link to="/">Home</router-link></v-list-item>
          <v-list-item prepend-icon="mdi-account-multiple"  value="menuAbout"><router-link to="/about">About</router-link></v-list-item>
        </v-list>
      </v-navigation-drawer>
    

    <v-main>
      <v-container grid-list-xs>
        <router-view></router-view>
      </v-container>
    </v-main>
  </v-app>
</template>


<script>
</script>