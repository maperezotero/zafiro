wp.domReady( () => {
	wp.blocks.registerBlockStyle( 'core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'extrabold',
			label: 'Extrabold',
		}
	] );
} );