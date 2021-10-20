ClassicEditor
				.create( document.querySelector( '#body' ), {
					
				toolbar: {
					items: [
						'heading',
						'|',
						'undo',
						'redo',
						'bold',
						'italic',
						'bulletedList',
						'numberedList',
						'blockQuote',
						'outdent',
						'indent',
						'|',
						'link',
						'specialCharacters',
						'imageUpload',
						'CKFinder',
						'horizontalLine',
						'|',
						'pageBreak'
					]
				},
				language: 'hi',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:inline',
						'imageStyle:block',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
					licenseKey: '',
					
					
					
				} )
				.then( editor => {
					window.editor = editor;
			
					
					
					
				} )
				.catch( error => {
					console.error( 'Blogpress Classic editor not loaded' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: maofb8w1gn52-osx8e63ipx8s' );
					console.error( error );
				} );