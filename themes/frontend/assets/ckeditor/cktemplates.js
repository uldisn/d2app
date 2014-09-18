/*
 Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or http://ckeditor.com/license
 */

// Register a templates definition set named "default".

var loremIpsum = 'Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.';
var loremImage = '<a href="http://placehold.it/1200x900.jpg"><img src="http://placehold.it/400x300.jpg" alt=""></a>';

CKEDITOR.addTemplates('default',
    {
        // The name of sub folder which hold the shortcut preview images of the
        // templates.
        imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath('templates') + 'templates/images/'),

        // The templates definitions.
        templates:[
            {
                title:'Headline, text, thumbnails',
                image:'',
                description:'HINT: Use a FancyBox Widget for zoomable thumbnails.',
                html:'<h2>' + loremIpsum.substr(0, 20) + '</h2>' +
                    '<p>' + loremIpsum + '</p>' +
                    '<p>' + loremIpsum + loremIpsum + '</p>' +
                    '<div class="row-fluid">' +
                    '<ul class="thumbnails"> \
                        <li class="span4">'+loremImage+'</li> \
                        <li class="span2">'+loremImage+'</li> \
                        <li class="span2">'+loremImage+'</li> \
                      </ul>' +
                    '</div>'
            },
            {
                title:'Text, button',
                image:'',
                description:'',
                html:'<p>' + loremIpsum + '</p>' +
                    '<p>' + loremIpsum + '</p>' +
                    '<p><a class="btn" href="#">View details »</a></p>' +
                    '</div>'
            },
            {
                title:'Headline + 3x image with text',
                image:'',
                description:'Template: 33%-33%-33% columns',
                html:'<h2>' + loremIpsum.substr(0, 20) + '</h2>' +
                    '<div class="row">' +
                    '<div class="span4"><p>'+loremImage+'</p><p>' + loremIpsum + '</p></div>' +
                    '<div class="span4"><p>'+loremImage+'</p><p>' + loremIpsum + '</p></div>' +
                    '<div class="span4"><p>'+loremImage+'</p><p>' + loremIpsum + '</p></div>' +
                    '</div>'
            },
            {
                title:'1 empty columns',
                image:'',
                description:'Template: 100%',
                html:
                    '<div class="row">' +
                        '<div class="span12"></div>' +
                        '</div>'

            },
            {
                title:'2 empty columns',
                image:'',
                description:'Template: 50%-50%',
                html:
                    '<div class="row">' +
                    '<div class="span6"></div>' +
                    '<div class="span6"></div>' +
                    '</div>'

            },
            {
                title:'3 empty columns',
                image:'',
                description:'Template: 33%-33%-33%',
                html:
                    '<div class="row">' +
                    '<div class="span4"></div>' +
                    '<div class="span4"></div>' +
                    '<div class="span4"></div>' +
                    '</div>'

            },
            {
                title:'4 empty columns',
                image:'',
                description:'Template: 25%-25%-25-25%',
                html:
                    '<div class="row">' +
                    '<div class="span3"></div>' +
                    '<div class="span3"></div>' +
                    '<div class="span3"></div>' +
                    '<div class="span3"></div>' +
                    '</div>'

            }
        ]
    });
