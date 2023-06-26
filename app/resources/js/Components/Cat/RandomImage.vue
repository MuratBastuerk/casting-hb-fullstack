<template>
    <div class="RandomImage">
        <img :src="imageFromString" :alt="altImage" />
<!--        <img :src="`data:image/png;base64,${image}`" style="height: 33%; width: 33%;" alt="{{ __('Image_if_Api_worked') }}" />-->
    </div>
</template>

<script>
    export default {
        name: 'Randomimage',
        data() {
            return {
                imageFromString: '',
                altImage: 'Image_if_Api_worked'
            }
        },
        mounted() {
            this.fetchRandomImage()
        },
        methods: {
            fetchRandomImage() {
                axios.get( '/api/cat_image', { responseType: "arraybuffer" } )
                    .then( (response) => {
                        const base64 = btoa(
                            new Uint8Array( response.data ).reduce(
                                (data, byte) => data + String.fromCharCode( byte ), ''
                            )
                        )
                        this.setImageString( base64 )
                    } )
                    .catch ( error => console.log( 'image error ' + error ))
            },
            setImageString( val ) {
                this.imageFromString = "data:image/png;base64," + val
            },
        }
    };
</script>
