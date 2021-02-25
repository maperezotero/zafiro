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

	wp.blocks.registerBlockStyle( 'core/button', [
		{
			name: 'medium',
			label: 'Medium'
		},
		{
			name: 'big',
			label: 'Big Button'
		}
	] );
} );