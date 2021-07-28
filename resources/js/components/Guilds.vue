<template>
  <div>
    <md-table md-card @md-selected="onSelect">
      <md-table-toolbar>
        <h1 class="md-title">All guilds</h1>
        <router-link to="/guilds/create">
          <md-button class="md-fab md-mini md-primary md-raised" @click="onAdd">
              <md-icon>add</md-icon>
          </md-button>
        </router-link>
      </md-table-toolbar>
      <md-table-row>
          <md-table-head md-numeric>ID</md-table-head>
          <md-table-head>Guild</md-table-head>
          <md-table-head>Realm</md-table-head>
          <md-table-head/>
      </md-table-row>
      <md-table-row v-for="guild in guilds" :key="guild.id">
        <md-table-cell md-numeric>{{ guild.id }}</md-table-cell>
        <md-table-cell>{{ guild.name }}</md-table-cell>
        <md-table-cell>{{ guild.realm }}</md-table-cell>
        <md-table-cell>
          <md-button class="md-fab md-mini md-primary md-raised" @click="onEdit(guild)">
            <md-icon>edit</md-icon>
          </md-button>
          <md-button class="md-fab md-mini md-raised">
            <md-icon>delete</md-icon>
          </md-button>
        </md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
import guildApi from '../api/guild'

export default {
  data() {
    return {
      guilds: [],
    };
  },
  async created() {
    try {
      this.guilds = await guildApi.getAllGuilds();
    } catch (e) {
      console.error(e)
    }
  },
  methods: {
    onSelect(asd) {
      console.log(asd)
    },
    onEdit(asd) {
      console.log(asd)
    },
    onAdd(asd) {
      console.log(asd)
    },
    onDelete(asd) {
      console.log(asd)
    },
  },
};
</script>
