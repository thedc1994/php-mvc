<script>

	function initDatepicker(picker){

 		picker.datepicker({
            todayHighlight: !0,
            format        : 'dd-mm-yyyy',
            autoclose     : true,
        });

        return picker;
	}

	function initImageFile(image, inputFile){

		image.click(function(){
			inputFile.trigger('click');
		});

		inputFile.change(function(){
			var reader = new FileReader();

	        reader.onload = function (e) {
	            var img = image[0];
	            img.src = e.target.result;
	        };
	        reader.readAsDataURL(inputFile[0].files[0]);
		});

	}

</script>
