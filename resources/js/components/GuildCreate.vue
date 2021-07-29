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
        <div class="md-layout">
          <md-autocomplete v-model="guildRealm" :md-options="players">
            <label>Invite player</label>
          </md-autocomplete>
          <md-button class="md-fab md-mini md-primary md-raised" @click="onAdd">
              <md-icon>add</md-icon>
          </md-button>
        </div>
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
      const realms = await guildApi.getAllRealms();
      realms.forEach(realm => {
        this.realms.push(realm.name)
      });
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
