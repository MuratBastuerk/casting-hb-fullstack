import { ref } from 'vue'

export default function useFact() {
    const fact = ref('')

    const getFact = async () => {
        axios.get('/api/cat_fact')
            .then( response => {
                fact.value = response.data;
            })
    }

    return { fact, getFact }
}
