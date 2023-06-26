<script>
import breeds from "@/Components/Cat/Breeds.vue";
import TPagination from 'vue3-tailwind-pagination';

export default {
    components: { TPagination },
    computed: {
        breeds() {
            return breeds
        }
    },
    data() {
        return {
            breeds: [],
            disabled: false,
        }
    },
    mounted() {
        this.fetchBreeds()
    },
    methods: {
        fetchBreeds() {
            axios.get( '/api/cat_breeds' )
                .then( response => this.breeds = response.data )
                .catch( error => console.log( 'breeds error ' + error ) )

            console.log( ' breeds ' + JSON.stringify( this.current_page ) )
        },
    }
};
</script>

<template>

    <table class="min-w-full divide-y divide-gray-200 border">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-left">
                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Breed</span>
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left">
                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Country</span>
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left">
                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Origin</span>
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left">
                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Coat</span>
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left">
                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Pattern</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        <tr v-for="breed in breeds.data">
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                {{ breed.breed }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                {{ breed.country }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                {{ breed.origin }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                {{ breed.coat }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                {{ breed.pattern }}
            </td>
        </tr>
        </tbody>
    </table>
    <hr>
    <t-pagination
        :total-items="breeds.total"
        :per-page="25"
        :limit=25
        :disabled=disabled
        :value=1
        v-model="breeds.data"
    />
    <hr>
</template>

<style scoped>

</style>
