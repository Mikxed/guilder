<template>
  <div>
    <md-card>
      <md-card-header>
        <div class="md-title">Edit guild</div>
      </md-card-header>
      <md-card-content>
        <md-field>
          <label>Name</label>
          <md-input v-model="guildName"></md-input>
        </md-field>
        <md-autocomplete v-model="guildRealm" :md-options="realms">
          <label>Realm</label>
        </md-autocomplete>
    </md-card-content>
    </md-card>
  </div>
</template>

<script>
import guildApi from '../api/guild'

export default {
  data() {
    return {
      realms: [],
      guildName: '',
      guildRealm: '',
      guildPlayers: []
    };
  },
  async created() {
    try {
      this.realms = await guildApi.getAllRealms();
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
