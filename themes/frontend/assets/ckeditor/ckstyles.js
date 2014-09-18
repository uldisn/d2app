/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.addStylesSet( 'my_styles',
    [
    /* Block Styles */
    // These styles are already available in the "Format" combo, so they are
    // not needed here by default. You may enable them to avoid placing the
    // "Format" combo in the toolbar, maintaining the same features.

    /* Inline Styles */
    // These are core styles available as toolbar buttons. You may opt enabling
    // some of them in the Styles combo, removing them from the toolbar.
    /*
	{ name : 'Strong'	, element : 'strong', overrides : 'b' },
	{ name : 'Emphasis'	, element : 'em'	, overrides : 'i' },
	{ name : 'Underline', element : 'u' },
	{ name : 'Strikethrough'	, element : 'strike' },
	{ name : 'Subscript', element : 'sub' },
	{ name : 'Superscript', element : 'sup' },
	*/

    {
        name : 'Typewriter',
        element : 'tt'
    },
    {
        name : 'Code',
        element : 'code'
    },
    {
        name : 'Cited Work',
        element : 'cite'
    },
    {
        name : 'Inline Quotation'	,
        element : 'q'
    },
    /*	{ name : 'Computer Code'	, element : 'code' },
	{ name : 'Keyboard Phrase'	, element : 'kbd' },
	{ name : 'Sample Text', element : 'samp' },
	{ name : 'Variable'	, element : 'var' },

	{ name : 'Deleted Text', element : 'del' },
	{ name : 'Inserted Text'	, element : 'ins' },
    */

    {
        name : 'Two Columns',
        element : 'table',
        attributes :
        {
            'style' : '',
            'class' : 'twoColumns'

        }
    },

    /* Object Styles */
    /* we strongly recommend to use CSS classes only! */

    {
        name : 'Link Image Thumbnail',
        element : 'img',
        attributes :
        {
            'style' : '',
            'class' : 'thumbnail',
            'border' : '0',
            'vspace' : '0',
            'hspace' : '0',
            'align' : ''
        }
    },

    {
        name : 'Image Pull Left',
        element : 'img',
        attributes :
        {
            'class' : 'pull-left'
        }
    },

    {
        name : 'Image Pull Right',
        element : 'img',
        attributes :
        {
            'class' : 'pull-right'
        }
    },

    {
        name : 'DIV Pull Left',
        element : 'div',
        attributes :
        {
            'class' : 'pull-left'
        }
    },

    {
        name : 'DIV Pull Right',
        element : 'div',
        attributes :
        {
            'class' : 'pull-right'
        }
    },

    {
        name : 'Clearfix',
        element : 'div',
        attributes : {
            'class' : 'clearfix'
        }
    },
    {
        name : '1/1 width, container span12',
        element : 'div',
        attributes : {
            'class' : 'span12'
        }
    },
    {
        name : '3/4 width, container span9',
        element : 'div',
        attributes : {
            'class' : 'span9'
        }
    },
    {
        name : '2/3 width, container span8',
        element : 'div',
        attributes : {
            'class' : 'span8'
        }
    },
    {
        name : '1/2 width, container span6',
        element : 'div',
        attributes : {
            'class' : 'span6'
        }
    },
    {
        name : '1/3 width, container span4',
        element : 'div',
        attributes : {
            'class' : 'span4'
        }
    },
    {
        name : '1/4 width, container span3',
        element : 'div',
        attributes : {
            'class' : 'span3'
        }
    },
    {
        name : '1/6 width, container span2',
        element : 'div',
        attributes : {
            'class' : 'span2'
        }
    },


    // Bootstrap block styles
    {
        name : 'alert success',
        element : 'div',
        attributes : {
            'class' : 'alert alert-block alert-success'
        }
    },
    {
        name : 'alert warning',
        element : 'div',
        attributes : {
            'class' : 'alert alert-block alert-warning'
        }
    },
    {
        name : 'alert error',
        element : 'div',
        attributes : {
            'class' : 'alert alert-block alert-error'
        }
    },
    {
        name : 'alert info',
        element : 'div',
        attributes : {
            'class' : 'alert alert-block alert-info'
        }
    },

    // Bootstap inline styles
    {
        name : 'badge success',
        element : 'span',
        attributes : {
            'class' : 'badge badge-success'
        }
    },
    {
        name : 'badge warning',
        element : 'span',
        attributes : {
            'class' : 'badge badge-warning'
        }
    },
    {
        name : 'badge error',
        element : 'span',
        attributes : {
            'class' : 'badge badge-error'
        }
    },
    {
        name : 'badge info',
        element : 'span',
        attributes : {
            'class' : 'badge badge-info'
        }
    },
    {
        name : 'badge inverse',
        element : 'span',
        attributes : {
            'class' : 'badge badge-inverse'
        }
    },

    {
        name : 'label success',
        element : 'span',
        attributes : {
            'class' : 'label label-success'
        }
    },
    {
        name : 'label warning',
        element : 'span',
        attributes : {
            'class' : 'label label-warning'
        }
    },
    {
        name : 'label error',
        element : 'span',
        attributes : {
            'class' : 'label label-error'
        }
    },
    {
        name : 'label info',
        element : 'span',
        attributes : {
            'class' : 'label label-info'
        }
    },
    {
        name : 'label inverse',
        element : 'span',
        attributes : {
            'class' : 'label label-inverse'
        }
    },

    {
        name : 'button normal',
        element : 'a',
        attributes : {
            'class' : 'btn'
        }
    },
    {
        name : 'button large',
        element : 'a',
        attributes : {
            'class' : 'btn btn-large'
        }
    },
    {
        name : 'button small',
        element : 'a',
        attributes : {
            'class' : 'btn btn-small'
        }
    },

    /*{
        name : 'tooltip (title)',
        element : 'a',
        attributes : {
            'rel' : 'tooltip'
        }
    },*/

    {
        name : 'thumbnail',
        element : 'img',
        attributes : {
            'class' : 'thumbnail'
        }
    },




    ]);
