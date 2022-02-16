<template>
	<div class="container">
		<div>
			<h2>Single File</h2>
			<hr/>
			<label>File
				<input type="file" @change="handleFileUpload( $event )"/>
			</label>
			<br>
			<button v-on:click="submitFile()">Submit</button>
		</div>
	</div>
</template>

<script>
	import axios from 'axios';
	
	export default {
		data(){
			return {
				file: ''
			}
		},
		
		methods: {
			handleFileUpload( event ){
				this.file = event.target.files[0];
			},
			
			submitFile(){
        console.log("werkt dit")
				let formData = new FormData();
				
				formData.append('file', this.file);
				
				axios.post( '/api/fileupload',
					formData,
					{
						headers: {
								'Content-Type': 'multipart/form-data'
						}
					}
				).then(function(){
					console.log('SUCCESS!!');
				})
				.catch(function(){
					console.log('FAILURE!!');
				});
			}
		},
        beforeRouteEnter(to, from, next) {
        if (!window.Laravel.isLoggedin) {
            window.location.href = "/";
        }
        next();
    }
	}
</script>
	