import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'

// Créer l'application Vue
const app = createApp(App)

// Faire la requête à l'API Laravel
axios
  .get('http://127.0.0.1:8000/api/transmissions')
  .then((response) => {
    console.log(response.data) // Afficher les données dans la console
    // Tu peux aussi stocker les données dans un store global si nécessaire
  })
  .catch((error) => {
    console.error(error)
  })

// Utilisation du routeur
app.use(router)

app.mount('#app')
