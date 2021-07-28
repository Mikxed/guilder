import Guilds from './components/Guilds.vue';
import GuildCreate from './components/GuildCreate.vue';

export const routes = [
  {path: '/', component: Guilds},
  {path: '/guilds/create', component: GuildCreate},
];
