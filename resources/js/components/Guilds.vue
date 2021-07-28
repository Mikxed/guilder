<template>
    <div>
      <h3 class="text-center">All guilds</h3><br/>

      <v-card
        elevation="2"
        shaped
      >
      <v-simple-table dark>
        <template v-slot:default>
          <thead>
            <tr>
                <th>ID</th>
                <th>Guild</th>
                <th>Realm</th>
                <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="guild in guilds" :key="guild.id">
                <td>{{ guild.id }}</td>
                <td>{{ guild.name }}</td>
                <td>{{ guild.realm }}</td>
                <td>
                    <button>Manage</button>
                </td>
            </tr>
          </tbody>
        </template>
      </v-simple-table>
</v-card>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                guilds: []
            }
        },
        created() {
            this.axios
                .get('/api/guilds')
                .then(response => {
                    this.guilds = response.data;
                });
        },
        methods: {

        }
    }
</script>