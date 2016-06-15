jQuery(document).ready( function($){
    
	tinymce.PluginManager.add('ebit_first_button', function( editor, url ) {
		editor.addButton('ebit_first_button', {
			text: 'eBiT',
			icon: false,
			onclick: function() {
				editor.insertContent('[slider]');
			}
		});
	});
    
	tinymce.PluginManager.add('ebit_second_button', function( editor, url ) {
		editor.addButton('ebit_second_button', {
			text: 'linkon',
			icon: false,
			type: 'menubutton',
            menu: [
                {
                    text: 'Menu first level',
                    onclick: function(){
                        editor.insertContent('[from first lavel]');
                    }
                },
                {
                    text: 'Menu first level 2',
                    menu: [
                        {
                            text: 'Menu Second lavel'
                        },
                        {
                            text: 'Menu Second lavel 2'
                        }
                    ]
                },
                {
                    text: 'Menu first level 3',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Insert Ebit Shortcode',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'firstname',
                                    label: 'First Name',
                                    value: 'Linkon'
                                },
                                {
                                    type: 'textbox',
                                    name: 'address',
                                    label: 'Address',
                                    multiline: true,
                                    minWidth: 300,
                                    minHeight: 100
                                },
                                {
                                    type: 'listbox',
                                    name: 'selectSex',
                                    label: 'Select Your Sex',
                                    'values': [
                                        {text: 'Male', value: 'male'},
                                        {text: 'Female', value: 'female'}
                                    ]
                                }
                            ],
                            onsubmit: function( x ) {
                                editor.insertContent( '[ebit firstName="' + x.data.firstname + '" address="'+ x.data.address +'" sex="'+ x.data.selectSex +'"]');
                            }
                        });
                    }
                }
            ]
		});
	});
    
});