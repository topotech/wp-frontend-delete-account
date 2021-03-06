/**
 * @see https://gist.github.com/Shelob9/144055408101e2fdfc4bf34adc85dd04
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const el = wp.element.createElement;
const { ServerSideRender } = wp.components;

registerBlockType( 'wp-frontend-delete-account/delete-account-content', {
    title: __( 'WP Frontend Account Delete', 'wp-frontend-delete-account' ),
    icon: 'admin-users',
    category: 'common',
    attributes: {
        images : {
            default: [],
            type:   'array',

        }
    },
	edit: function ({ attributes }) {
	    return (
	        <ServerSideRender
	            block="wp-frontend-delete-account/delete-account-content"
	        />
	    );
	},
    save( { attributes, className } ) {
        // Gutenberg will save attributes we can use in server-side callback
       return null;
    },
} );
