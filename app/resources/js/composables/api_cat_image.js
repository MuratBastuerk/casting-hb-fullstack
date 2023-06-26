import { ref } from 'vue'

export default function useImage() {
    const image = ref('')

    const getImage = async () => {
        axios.get('/api/cat_image')
            .then( response => {
                image.value = response.data;
            })
    }

    return { image, getImage }
}
