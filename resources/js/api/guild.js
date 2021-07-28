import axios from 'axios';


export default {
  async getAllGuilds() {
    const res = await axios.get('/api/guilds');
    return res.data;
  },
  async getAllRealms() {
    const res = await axios.get('/api/realms');
    return res.data;
  },
}